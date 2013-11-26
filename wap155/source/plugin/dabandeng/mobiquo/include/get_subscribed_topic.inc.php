<?php

defined('IN_MOBIQUO') or exit;

$uid = empty($_GET['uid']) ? 0 : intval($_GET['uid']);

if($_GET['username']) {
    $member = DB::fetch_first("SELECT uid FROM ".DB::table('common_member')." WHERE username='$_GET[username]' LIMIT 1");
    if(empty($member)) {
        showmessage('space_does_not_exist');
    }
    $uid = $member['uid'];
}

$dos = array('index', 'doing', 'blog', 'album', 'friend', 'wall',
    'notice', 'share', 'home', 'pm', 'videophoto', 'favorite',
    'thread', 'trade', 'poll', 'activity', 'debate', 'reward', 'profile');

$do = (!empty($_GET['do']) && in_array($_GET['do'], $dos))?$_GET['do']:'index';
if($do == 'index' && $_G['inajax']) {
    $do = 'profile';
}

if(empty($uid) || in_array($do, array('notice', 'pm'))) $uid = $_G['uid'];

if($uid) {
    $space = getspace($uid);
    if(empty($space)) {
        showmessage('space_does_not_exist');
    }
}

if(empty($space)) {
    if(in_array($do, array('doing', 'blog', 'album', 'share', 'home', 'thread', 'trade', 'poll', 'activity', 'debate', 'reward', 'group'))) {
        $_GET['view'] = 'all';
        $space['uid'] = 0;
    } else {
        showmessage('login_before_enter_home', null, array(), array('showmsg' => true, 'login' => 1));
    }
} else {

    $navtitle = $space['username'];

    if($space['status'] == -1 && $_G['adminid'] != 1) {
        showmessage('space_has_been_locked');
    }

    if(in_array($space['groupid'], array(4, 5, 6)) && ($_G['adminid'] != 1 && $space['uid'] != $_G['uid'])) {
        $_GET['do'] = $do = 'profile';
    }

    if($do != 'profile' && !ckprivacy($do, 'view')) {
        $_G['privacy'] = 1;
        showmessage('space_privacy');
        //require_once libfile('space/profile', 'include');
        //include template('home/space_privacy');
        //exit();
    }

    if(!$space['self'] && $_GET['view'] != 'eccredit') $_GET['view'] = 'me';

    get_my_userapp();

    get_my_app();
}

$diymode = 0;

$seccodecheck = $_G['setting']['seccodestatus'] & 4;
$secqaacheck = $_G['setting']['secqaa']['status'] & 2;




$space = getspace($_G['uid']);

$id = empty($_GET['id'])?0:intval($_GET['id']);

$perpage = $limit;

ckstart($start, $perpage);

$idtypes = array('thread'=>'tid', 'forum'=>'fid', 'blog'=>'blogid', 'group'=>'gid', 'album'=>'albumid', 'space'=>'uid', 'article'=>'aid');
$_GET['type'] = isset($idtypes[$_GET['type']]) ? $_GET['type'] : 'all';
$actives = array($_GET['type'] => ' class="a"');

$gets = array(
    'mod' => 'space',
    'uid' => $space['uid'],
    'do' => 'favorite',
    'view' => 'me',
    'type' => $_GET['type'],
    'from' => $_GET['from']
);
$theurl = 'home.php?'.url_implode($gets);


$wherearr = $list = array();
$favid = empty($_GET['favid'])?0:intval($_GET['favid']);
if($favid) {
    $wherearr[] = "hf.favid='$favid'";
}
$wherearr[] = "hf.uid='$_G[uid]'";
$idtype = isset($idtypes[$_GET['type']]) ? $idtypes[$_GET['type']] : '';
if($idtype) {
    $wherearr[] = "hf.idtype='$idtype'";
}
$wheresql = implode(' AND ', $wherearr);

$count = DB::result(DB::query("SELECT COUNT(*) FROM ".DB::table('home_favorite')." hf WHERE $wheresql"),0);
$f_list = array();
if($count && $idtype == 'tid') {
    $query = DB::query("SELECT ft.*, ff.name FROM ".DB::table('home_favorite')." hf
        LEFT JOIN ".DB::table('forum_thread')." ft ON(hf.id=ft.tid)
        LEFT JOIN ".DB::table('forum_forum')." ff USING(fid)
        WHERE $wheresql
        ORDER BY hf.dateline DESC
        LIMIT $start,$perpage");
    while ($value = DB::fetch($query)) {
        $f_list[] = $value;
    }
}
