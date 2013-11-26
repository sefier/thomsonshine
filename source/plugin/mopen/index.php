<?php

define('IN_MOPEN', true);
//define('IN_DISCUZ', true);
define('MOPEN_ROOT', dirname(__FILE__).'/');
define('DISCUZ_ROOT', dirname(dirname(dirname(dirname(__FILE__)))).'/');
define('FROOT', '../../');
define('NOROBOT', TRUE);

require('./lib/Template.class.php');
require('./lib/CommmonUtils.inc.php');
require('./lib/Security.class.php');
require('./mopen_message.inc.php');
$security = new security('key.php');

if($security->allowvisit(@$_GET['key'])){
	include('./mopen_flow.php');
	require('./conf/mopen_config.conf.php');
	if(isset($_GET['debug']))
		$mopen_log['switch'] = @$_GET['debug'];
	if(isset($_GET['tpp']))
		$mopen_config['tpp'] = @$_GET['tpp'];
	if(isset($_GET['ppp']))
		$mopen_config['ppp'] = @$_GET['ppp'];
	$request_cmd = $request_cmd?$request_cmd:"board";
	include('./include/bbslib_'.$request_cmd.'.inc.php');
}else{
	echo('bad_request');	
}

?>