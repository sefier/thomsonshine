<?php

defined('IN_MOPEN') or exit;

//全局配置变量
$mopen_config = array(
	'tpp' => 20,	//帖子列表页默认显示条数
	'ppp' => 20,	//帖子内容页默认显示条数
);
	
//日志相关全局变量
$addTimeFormat = date("YmdH",$_SERVER['REQUEST_TIME']);
$mopen_log = array(
		'log_config' => array(
	    // 日志级别配置，0x07 = LOG_LEVEL_FATAL|LOG_LEVEL_WARNING|LOG_LEVEL_NOTICE
	    'intLevel'			=> 0x10,
	     // 日志文件路径，wf日志为bingo.log.wf
	     'strLogFile'		=> MOPEN_ROOT.'./logs/'.$addTimeFormat.'.log',
	     // 0表示无限
	     'intMaxFileSize'    => 0,
	     // 特殊日志路径，根据需要自行配置
	     'arrSelfLogFiles'	=> array(),
	     ),
	 	'switch' => '0',   //是否开启远程调试功能，默认关闭
	 	'context' => array(), //用于存储Log的内容
);
// 导出给CLogger使用
$GLOBALS['LOG'] = $mopen_log;

?>