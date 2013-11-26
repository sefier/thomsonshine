<?php

defined('IN_MOPEN') or exit;

require_once (DISCUZ_ROOT.'source/class/class_core.php');
require_once (DISCUZ_ROOT.'source/function/function_core.php');
require_once (DISCUZ_ROOT.'source/function/function_forum.php');

switch(@$_GET['mocmd']) {
	case "login":
	case "board":
	case "topic":
	case "thread":
	case "newthreadform":
	case "newreplyform":
		break;
	case "newthread":
		$_GET['action'] = 'newthread';
		$_GET['topicsubmit'] = 'yes';
		//$_POST['posttime'] = time();
		//$_POST['checkbox'] = 0;
		break;
	case "newreply":
		$_GET['action'] = 'reply';
		$_GET['replysubmit'] = 'yes';
		break;
	default:
		$request_cmd = "board";
		break;
}

$discuz = & discuz_core::instance();

$request_cmd=@$_GET['mocmd'];

$modarray = array('board','topic','thread','login','newthread','newthreadform','newreply','newreplyform'
	/*'ajax','announcement','attachment','forumdisplay',
        'group','image','index','medal','misc','modcp','notice','post','redirect',*/
);
    
$modcachelist = array(
        'board'        => array('announcements', 'onlinelist', 'forumlinks', 'advs_index',
                'heats', 'historyposts', 'onlinerecord', 'userstats'),
        'topic'    => array('smilies', 'announcements_forum', 'globalstick', 'forums',
                'icons', 'onlinelist', 'forumstick','threadtable_info', 'threadtableids', 'stamps'),
        'thread'    => array('smilies', 'smileytypes', 'forums', 'usergroups', 'ranks',
                'stamps', 'bbcodes', 'smilies',    'custominfo', 'groupicon', 'stamps',
                'threadtableids', 'threadtable_info'),
        'newthread'        => array('bbcodes_display', 'bbcodes', 'smileycodes', 'smilies', 'smileytypes',
                'icons', 'domainwhitelist'),
        'newthreadform'        => array('bbcodes_display', 'bbcodes', 'smileycodes', 'smilies', 'smileytypes',
                'icons', 'domainwhitelist'),      
        'newreply'        => array('bbcodes_display', 'bbcodes', 'smileycodes', 'smilies', 'smileytypes',
                'icons', 'domainwhitelist'),
        'newreplyform'        => array('bbcodes_display', 'bbcodes', 'smileycodes', 'smilies', 'smileytypes',
                'icons', 'domainwhitelist'),                            
        /*'space'        => array('fields_required', 'fields_optional', 'custominfo'),
        'group'        => array('grouptype'),*/
);

$discuz->var['mod'] = $request_cmd;
$mod = !in_array($discuz->var['mod'], $modarray) ? 'index' : $discuz->var['mod'];     

define('CURMODULE', $mod != 'redirect' ? $mod : 'viewthread');
$cachelist = array();
if(isset($modcachelist[CURMODULE])) {
    $cachelist = $modcachelist[CURMODULE];
}
/*if($mod == 'group') {
    $_G['basescript'] = 'group';
}*/
    
$discuz->cachelist = $cachelist;
$discuz->init();

$tpl = new Template;
$charset = $_G['charset'];
$tpl->setContentType("Content-type: text/html; charset=".$charset);
$tpl->setDir(MOPEN_ROOT.'/templates/');
$tpl->setCompileDir(MOPEN_ROOT.'/templates/cache/');
$tpl->setCompileMode(1);

?>