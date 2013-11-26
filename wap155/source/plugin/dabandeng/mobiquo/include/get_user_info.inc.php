<?php

defined('IN_MOBIQUO') or exit;

$uid = 0;

if($_GET['username']) {
    $member = DB::fetch_first("SELECT uid FROM ".DB::table('common_member')." WHERE username='$_GET[username]' LIMIT 1");
    if(empty($member)) {
        get_error('member_nonexistence');
    }
    $uid = $member['uid'];
}

if(empty($uid)) $uid = $_G['uid'];

if($uid) {
    $space = getspace($uid);
    if(empty($space)) {
        showmessage('space_does_not_exist');
    }
}

if(empty($space)) {
    get_error('login_before_enter_home', array(), true);
} elseif($space['status'] == -1 && $_G['adminid'] != 1) {
    get_error('space_has_been_locked');
}

space_merge($space, 'count');
space_merge($space, 'field_home');
space_merge($space, 'field_forum');
space_merge($space, 'profile');
space_merge($space, 'status');

$space['admingroup'] = $_G['cache']['usergroups'][$space['adminid']];
$space['group'] = $_G['cache']['usergroups'][$space['groupid']];

if($space['lastvisit']) $space['lastvisit'] = dgmdate($space['lastvisit']);
if($space['lastactivity']) {
    $space['lastactivitydb'] = $space['lastactivity'];
    $space['lastactivity'] = dgmdate($space['lastactivity']);
}
if($space['lastpost']) $space['lastpost'] = dgmdate($space['lastpost']);
if($space['lastsendmail']) $space['lastsendmail'] = dgmdate($space['lastsendmail']);
if($space['lastsendmail']) $space['groupexpiry'] = dgmdate($space['groupexpiry']);


if (TIMESTAMP - $space['lastactivitydb'] <= 10800) {
    $space['is_online'] = true;
} else {
    $space['is_online'] = false;
}

$lang = lang('home/template');
$custom_fields = array();

if (in_array($_G['adminid'], array(1, 2)) && $space['email']) {
    $custom_fields['Email'] = $space['email'];
}
if ($space['spacenote']) {
    $custom_fields[$lang['spacenote']] = $space['spacenote'];
}
if ($space['customstatus']) {
    $custom_fields[$lang['permission_basic_status']] = $space['customstatus'];
}
if ($space['sightml']) {
    $custom_fields[$lang['personal_signature']] = $space['sightml'];
}
if ($space['adminid']) {
    $custom_fields[$lang['management_team']] = $space['admingroup']['grouptitle'];
}
$custom_fields[$lang['usergroup']] = $space['group']['grouptitle'];
if ($space['extgroupids']) {
    $custom_fields[$lang['group_expiry_type_ext']] = $space['extgroupids'];
}
$custom_fields[$lang['online_time']] = $space['oltime']." ".$lang['hours'];
$custom_fields[$lang['last_visit']] = $space['lastvisit'];
$custom_fields[$lang['last_activity_time']] = $space['lastactivity'];
$custom_fields[$lang['last_post_time']] = $space['lastpost'];
$custom_fields[$lang['last_send_email']] = $space['lastsendmail'];
