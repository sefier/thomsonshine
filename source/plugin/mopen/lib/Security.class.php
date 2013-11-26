<?php

defined('IN_MOPEN') or exit;

class security {
	
	var $fkey = null;
	var $fdebug = null;
	        
	function security($filename) {
		$str = file_get_contents($filename);
		if (preg_match_all("/@[^=]*=([^;]*);/is", $str, $matches) > 0) {
			$this->fkey = trim($matches[1][0]);
			$this->fdebug = trim($matches[1][1]);
		}
    }
    
	function allowvisit($key) {
		if(isset($key) && strcasecmp($this->fkey, md5($key)) == 0){
			return true;
		}else{
			return false;
		}
    }
    
    //ÔİÎ´Ê¹ÓÃ
    function allowdebug($key) {
    	if(isset($key) && strcasecmp($this->fdebug, md5($key)) == 0){
			return true;
		}else{
			return false;
		}
    }
}



