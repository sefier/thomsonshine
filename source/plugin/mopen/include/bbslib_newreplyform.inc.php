<?php

defined('IN_MOPEN') or exit;
define('CURSCRIPT', 'post');
define('NOROBOT', TRUE);

//require_once FROOT.'include/common.inc.php';
//require_once DISCUZ_ROOT.'./include/post.func.php';
require_once (DISCUZ_ROOT.'source/function/function_core.php');
loadforum();

$mopen_log['context'][__LINE__] = '$request_cmd=>'.$request_cmd;
$mopen_log['context'][__LINE__] = '$uid=>'.$_G['uid'];
$mopen_log['context'][__LINE__] = '$fid=>'.$_G['fid'];
$mopen_log['context'][__LINE__] = '$tid=>'.$_G['tid'];

$uid = $_G['uid'];
$fid = $_G['fid'];
$tid = $_G['tid'];
$formhash = formhash();
//$typeselect = isset($_G['forum']['threadtypes']['types']) && is_array($_G['forum']['threadtypes']['types']);
//$typename = $_G['forum']['threadtypes']['types'];
//mo_make_array($typename);

/*if($template != null){
//data ouput
$html = "";
if ( !empty($_G['uid']) ) {
	$html .= '<p class="islogin">'.$_G['uid'].'</p>';
}
//$html .= '<div class="postform">';
$html .= '<a href="index.php?mocmd=newreply" class="posturl">newreplyurl</a>';
$html .= '<input type="hidden" name="fid" id="fid" value="'.$_G['fid'].'"/>';
$html .= '<input type="hidden" name="tid" id="tid" value="'.$_G['tid'].'"/>';
$html .= '<input type="hidden" name="formhash" id="formhash" value="'.formhash().'"/>';

if ( isset($_G['forum']['threadtypes']['types']) && is_array($_G['forum']['threadtypes']['types']) ) {
	$html .= '<div class="typeid">';
	$html .= '<select name="typeid" id="typeid">';
	foreach ( $_G['forum']['threadtypes']['types'] as $typeid=>$typename) {
		$html .= '<option value="'.$typeid.'">'.strip_tags($typename).'</option>';
	}
	$html .= '</select>';
	$html .= '</div>';
}
//$html .= '</div>';
echo $html;

}else{*/

$tpl->setFile($request_cmd.'.xml.tpl');
$tpl->setVariable('uid', $uid);
$tpl->setVariable('fid', $fid);
$tpl->setVariable('tid', $tid);
$tpl->setBool('islogin', $uid!=0);
$tpl->setVariable('formhash', $formhash);
//$tpl->setVar('typeselect', $typeselect!=0);
//$tpl->setVar('typename', $typename);
//日志回传相关
mo_make_array($mopen_log['context']);
$tpl->setBool('debug', $mopen_log['switch'] != 0);
$tpl->setArray('context', $mopen_log['context']);
$tpl->show();

//}
?>