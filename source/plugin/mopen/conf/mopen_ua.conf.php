<?php

defined('IN_MOPEN') or exit;

class commonders{
	
	//�������豸�����б���δʹ��
	 static $mopen_phone = array(
		'Nokia',
		'SymbOS',
		'iPhone',
		'iPad',
		'iPod',
		'Android',
	);
	
	//���������Ƽ�UA�б�
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