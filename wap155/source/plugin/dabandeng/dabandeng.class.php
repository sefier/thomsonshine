<?php

if(!defined('IN_DISCUZ')) {
    exit('Access Denied');
}

class plugin_dabandeng {
    function global_header() {
        switch (CHARSET) {
            case 'utf-8':
                return '<script type="text/javascript" src="source/plugin/dabandeng/dabandengdetect_utf8.js"></script>';
            case 'big5':
                return '<script type="text/javascript" src="source/plugin/dabandeng/dabandengdetect_big5.js"></script>';
            default:
                return '<script type="text/javascript" src="source/plugin/dabandeng/dabandengdetect_gbk.js"></script>';
        }
    }
}
