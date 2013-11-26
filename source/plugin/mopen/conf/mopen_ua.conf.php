<?php

defined('IN_MOPEN') or exit;

class commonders{
	
	//给出的设备类型列表，暂未使用
	 static $mopen_phone = array(
		'Nokia',
		'SymbOS',
		'iPhone',
		'iPad',
		'iPod',
		'Android',
	);
	
	//给出的自推荐UA列表
	 static $mopen_uacommonders = array(
		'WebKit'   => 'WebKit',
		'Safari'   => 'WebKit',
		'Skyfire'  => 'WebKit',
		'Chrome'   => 'WebKit',
		'UCmobile' => 'WebKit',
		'Presto'   => 'Presto',
		'Opera'    => 'Presto',
		'Gecko'    => 'Gecko',
		'Mozilla'  => 'Gecko',
		'Firefox'  => 'Gecko',				
		'Trident'  => 'IE',
		'UCWeb'    => 'UCWeb',
	);
};
	
?>