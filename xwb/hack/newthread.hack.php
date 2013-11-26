<?php
/*
 * @version $Id: newthread.hack.php 599 2011-01-24 06:17:40Z yaoying $
 */
if( !defined('IS_IN_XWB_PLUGIN') ){
	exit('Access Denied!');
}
global $_G;

$tid = isset($GLOBALS['tid'])  ? (int)$GLOBALS['tid'] : 0;
$pid = isset($GLOBALS['pid'])  ? (int)$GLOBALS['pid'] : 0;

if( $tid >= 1 && $pid >= 1 ){
	if (XWB_plugin::V('p:syn')) {
		$xp_publish = XWB_plugin::N('xwb_plugins_publish');
		register_shutdown_function(array(&$xp_publish, 'thread'), (int)$tid, (int)$pid, (string)$GLOBALS['subject'], (string)$GLOBALS['message']);
	}		
}