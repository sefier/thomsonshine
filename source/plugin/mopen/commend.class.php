<?php

if(!defined('IN_DISCUZ')) {
    exit('Access Denied');
}

define('IN_MOPEN', true);

include('./source/plugin/mopen/conf/mopen_ua.conf.php');

class plugin_mopen {

	function global_header() {

    	$ua = $_SERVER[HTTP_USER_AGENT];
    	foreach (commonders::$mopen_uacommonders as $commonder){
    		if(!preg_match('/UC/is', $ua)){//���ε�UCMobile
	    		if(preg_match('/Nokia|SymbOS|iPhone|iPad|iPod|Android/is', $ua)){//����ƥ���ж��Ƿ��ǳ����Ƽ����ֻ�
		    		if(preg_match('/'.$commonder.'/is', $ua)){//����ƥ��
		    			//file_put_contents("/home/work/logs/charset.txt", CHARSET);
				        switch (CHARSET) {
				            case 'utf-8':
				                return '<script type="text/javascript" src="source/plugin/mopen/js/mopen_utf8.js"></script>';
				            default:
				                return '<script type="text/javascript" src="source/plugin/mopen/js/mopen_gbk.js"></script>';
				        }
		    		}
	    		}
    		}
    	}
    }
}

