<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: seccode.php 27959 2012-02-17 09:52:22Z monkey $
 */
//note secure(��֤��ȫ) @ Discuz! X3.x

if(!defined('IN_MOBILE_API')) {
	exit('Access Denied');
}

$_GET['idhash'] = $_GET['sechash'];
$_GET['mod'] = 'seccode';
include_once 'misc.php';

class mobile_api {

	//note ����ģ��ִ��ǰ��Ҫ���еĴ���
	function common() {		
	}

	//note ����ģ�����ǰ���еĴ���
	function output() {}

}

?>