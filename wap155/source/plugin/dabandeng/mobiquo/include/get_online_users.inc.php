<?php

defined('IN_MOBIQUO') or exit;

if (!$_G['uid']) {
    get_error('to_login');
}

if(empty($_G['cookie']['onlineusernum'])) {
    $onlinenum = DB::result_first("SELECT count(*) FROM ".DB::table('common_session'));
} else {
    $onlinenum = intval($_G['cookie']['onlineusernum']);
}

updatesession();

$member_count = DB::result(DB::query("SELECT COUNT(*) FROM ".DB::table('common_session')." WHERE uid>'0' AND invisible='0'"), 0);

$online_user_ids = array();
$query = DB::query("SELECT uid FROM ".DB::table('common_session')." WHERE uid>'0' AND invisible='0' ORDER BY lastactivity DESC LIMIT 100");
while($online = DB::fetch($query)) {
    $online_user_ids[] = $online['uid'];
}

$whosonline = array();
if (!empty($online_user_ids)) {
    $query = DB::query("SELECT cm.uid, cm.username, cmfh.recentnote 
                        FROM ".DB::table("common_member").' cm
                        LEFT JOIN '.DB::table("common_member_field_home")." cmfh ON cmfh.uid=cm.uid
                        WHERE cm.uid IN(".dimplode($online_user_ids).")");
    while($value = DB::fetch($query)) {
        $whosonline[] = $value;
    }
}

$onlineinfo = array(
    'member_count' => $member_count,
    'guest_count'  => max($onlinenum - $member_count, 0),
    'online_user'  => $whosonline,
);


