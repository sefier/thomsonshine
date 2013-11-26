<?php

//请勿使用Windows自带的记事本打开此文件！详情：http://bbs.x.weibo.com/forum/viewthread.php?tid=63
//用户配置文件 安装程序自动生成于 2011-02-11 08:51:04 
define('XWB_APP_KEY',			'3931622974');
define('XWB_APP_SECRET_KEY',	'0710234d4861ce65b2b33b1b0eb0a91c');

//是否记录新浪微博API的通讯？是为true，默认为false。
define('XWB_DEV_LOG_ALL_RESPOND'	,false);

//session操作器类型。可选值有'NATIVE'（session原生操作）、'SIMULATOR'（session模拟器操作）
define('XWB_P_SESSION_OPERATOR', 'NATIVE');

//session存储器类型。可选值有'DB'（session存储在db中）、''（即为空，跟随php.ini设置）
//请注意，XWB_P_SESSION_OPERATOR常量设置为'SIMULATOR'时，则必须指定session存储器类型
define('XWB_P_SESSION_STORAGE_TYPE', '');

/*（默认不起作用）
手动配置插件所在论坛的完整访问地址，末尾加“/”
设置该值后，还需要设置下面的XWB_S_BASEURL常量
例子：http://www.sina.com.cn/bbs/ ， http://bbs.x.weibo.com/forum/
*/
//define('XWB_S_SITEURL', 'http://www.sina.com.cn/bbs/');

/*（默认不起作用）
手动配置插件所在论坛的域名（即上面常量XWB_S_SITEURL中的域名），末尾不要加“/”
例子：http://www.sina.com.cn ， http://bbs.x.weibo.com
*/
//define('XWB_S_BASEURL', 'http://www.sina.com.cn');


?>