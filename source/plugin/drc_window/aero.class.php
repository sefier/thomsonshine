<?php

/*
 * Created on 2010-11-23 , By Lee
 *
 * The modules is a open source , but you must be authorized to conduct secondary development
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class plugin_drc_window {

	function global_footer(){
		global $_G;
		$set = $_G['cache']['plugin']['drc_window'];
		$offset = $set['offset'];
		$groups = (array)unserialize($set['groups']);
		$starttime = strtotime($set['starttime']);
		$endtime = strtotime($set['endtime']);
		$timestep = $set['timestep'];
		$now = $_G['timestamp'];
		$times = $set['times'];
		$type = $set['type'];
		$url = $set['url'];
		$code = $set['code'];
		$title = $set['title'];
		$width = $set['width'];
		$height = $set['height'];
		if($offset == 1 && in_array($_G['groupid'], $groups)){
			if($now >= $starttime && $now <= $endtime){
				$new_cookie = 0;
				$window_cookie = getcookie('window_cookie');
				$window_cookie = !empty($window_cookie) ? $window_cookie : 0;
				$lasttime = getcookie('window_lasttime');
				$lasttime = !empty($lasttime) ? $lasttime : 0;
				$new_cookie = $window_cookie +1;
				if($window_cookie < $times && $_G['timestamp'] > ($lasttime + $timestep)){
					dsetcookie('window_cookie', $new_cookie, 86400);
					dsetcookie('window_lasttime', $_G['timestamp'], 86400);
					include template('drc_window:aero');
					return $newwindow;	
				}
			}	
		}
	}
	
}