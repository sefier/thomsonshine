<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: favthread.php 27451 2012-02-01 05:48:47Z monkey $
 */

if(!defined('IN_MOBILE_API')) {
	exit('Access Denied');
}

$_GET['mod'] = 'spacecp';
$_GET['ac'] = 'favorite';
$_GET['type'] = 'thread';
include_once 'home.php';

class mobile_api {

	function common() {
	}

	function output() {
		$variable = array();
		mobile_core::result(mobile_core::variable($variable));
	}

}

?>