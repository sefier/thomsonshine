<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: index.php 19135 2010-12-20 02:13:29Z zhengqingpeng $
 */

//快速访问优先
if(!empty($_SERVER['QUERY_STRING']) && is_numeric($_SERVER['QUERY_STRING'])) {
	//short url
	$_ENV['curapp'] = 'home';
	$_GET = array('mod'=>'space', 'uid'=>$_SERVER['QUERY_STRING']);
} else {
	
	$url = '';
	$domain = $_ENV = array();
	$jump = false;
	//二级域名
	@include_once './data/cache/cache_domain.php';
	$_ENV['domain'] = $domain;
	if(empty($_ENV['domain'])) {
		$_ENV['curapp'] = 'forum';
	} else {
		$_ENV['defaultapp'] = array('portal.php' => 'portal', 'forum.php' => 'forum', 'group.php' => 'group', 'home.php' => 'home');
		$_ENV['hostarr'] = explode('.', $_SERVER['HTTP_HOST']);
		$_ENV['domainroot'] = substr($_SERVER['HTTP_HOST'], strpos($_SERVER['HTTP_HOST'], '.')+1);
		//判断是否为应用域名
		if(!empty($_ENV['domain']['app']) && is_array($_ENV['domain']['app']) && in_array($_SERVER['HTTP_HOST'], $_ENV['domain']['app'])) {
			$_ENV['curapp'] = array_search($_SERVER['HTTP_HOST'], $_ENV['domain']['app']);
			//判断是否使用手机入口(IN_MOBILE)
			if($_ENV['curapp'] == 'mobile') {
				$_ENV['curapp'] = 'forum';
				if($_GET['mobile'] != 'no') {
					$_GET['mobile'] = 'yes';
				}
			}
			if($_ENV['curapp'] == 'default' || !isset($_ENV['defaultapp'][$_ENV['curapp'].'.php'])) {
				$_ENV['curapp'] = '';
			}
		} elseif(!empty($_ENV['domain']['root']) && is_array($_ENV['domain']['root']) && in_array($_ENV['domainroot'], $_ENV['domain']['root'])) {
			
			$_G['setting']['holddomain'] = $_ENV['domain']['holddomain'] ? $_ENV['domain']['holddomain'] : array('www');
			//note 判断是否为版块、分区、专题、频道二级域名
			$list = $_ENV['domain']['list'];
			if(isset($list[$_SERVER['HTTP_HOST']])) {
				$domain = $list[$_SERVER['HTTP_HOST']];
				$apphost = $_ENV['domain']['app'][$domain['idtype']] ? $_ENV['domain']['app'][$domain['idtype']] : $_ENV['domain']['app']['default'];
				$apphost = $apphost ? $apphost.'/' : '';
				$domainroot = $apphost ? 'http://'.$apphost : '';
				$id = intval($domain['id']);
				switch($domain['idtype']) {
					case 'subarea':
						$_ENV['curapp'] = 'forum';
						$_GET['gid'] = $id;
						break;
					case 'forum':
						$_ENV['curapp'] = 'forum';
						$_GET['mod'] = 'forumdisplay';
						$_GET['fid'] = $id;
						break;
					case 'topic':
						$_ENV['curapp'] = 'portal';
						$_GET['mod'] = 'topic';
						$_GET['topicid'] = $id;
						break;
					case 'channel':
						$_ENV['curapp'] = 'portal';
						$_GET['mod'] = 'list';
						$_GET['catid'] = $id;
						break;
				}
			} elseif(count($_ENV['hostarr']) > 2 && $_ENV['hostarr'][0] != 'www' && !checkholddomain($_ENV['hostarr'][0])) {
				$_ENV['prefixdomain'] = addslashes($_ENV['hostarr'][0]);
				$_ENV['domainroot'] = addslashes($_ENV['domainroot']);
				require_once './source/class/class_core.php';
				$discuz = & discuz_core::instance();
				$discuz->init_setting = true;
				$discuz->init_user = false;
				$discuz->init_session = false;
				$discuz->init_cron = false;
				$discuz->init_misc = false;
				$discuz->init_memory = false;
				$discuz->init();
				$jump = true;
				$domain = DB::fetch_first("SELECT * FROM ".DB::table('common_domain')." WHERE domain='$_ENV[prefixdomain]' AND domainroot='$_ENV[domainroot]' LIMIT 1");
				$apphost = $_ENV['domain']['app'][$domain['idtype']] ? $_ENV['domain']['app'][$domain['idtype']] : $_ENV['domain']['app']['default'];
				$apphost = $apphost ? $apphost.'/' : '';
				$domainroot = $apphost ? 'http://'.$apphost : '';
				switch($domain['idtype']) {
					case 'home':
						if($_G['setting']['rewritestatus'] && in_array('home_space', $_G['setting']['rewritestatus'])) {
							$url = rewriteoutput('home_space', 1, $apphost, $domain['id']);
						} else {
							$url = $domainroot.'home.php?mod=space&uid='.$domain['id'];
						}
						break;
					case 'group':
						if($_G['setting']['rewritestatus'] && in_array('group_group', $_G['setting']['rewritestatus'])) {
							$url = rewriteoutput('group_group', 1, $apphost, $domain['id']);
						} else {
							$url = $domainroot.'forum.php?mod=group&fid='.$domain['id'].'&page=1';
						}
						break;
				}
			}
		} else {
			$jump = true;
		}
		if(empty($url) && empty($_ENV['curapp'])) {
			if(!empty($_ENV['domain']['defaultindex']) && !$jump) {
				if($_ENV['defaultapp'][$_ENV['domain']['defaultindex']]) {
					$_ENV['curapp'] = $_ENV['defaultapp'][$_ENV['domain']['defaultindex']];
				} else {
					$url = $_ENV['domain']['defaultindex'];
				}
			} else {
				if($jump) {
					$url = empty($_ENV['domain']['app']['default']) ? (!empty($_ENV['domain']['defaultindex']) ? $_ENV['domain']['defaultindex'] : 'forum.php') : 'http://'.$_ENV['domain']['app']['default'];
				} else {
					$_ENV['curapp'] = 'forum';
				}
			}
		}
	}
}
if(!empty($url)) {
	//处理访问推广的URL
	$delimiter = strrpos($url, '?') ? '&' : '?';
	if($_GET['fromuid']) {
		$url .= $delimiter.'fromuid='.$_GET['fromuid'];
	} elseif($_GET['fromuser']) {
		$url .= $delimiter.'fromuser='.$_GET['fromuser'];
	}
	header("HTTP/1.1 301 Moved Permanently");
	header("location: $url");
} else {
	require './'.$_ENV['curapp'].'.php';
}

function checkholddomain($domain) {
	global $_G;

	$domain = strtolower($domain);
	if(preg_match("/^[^a-z]/i", $domain)) return true;
	$holdmainarr = empty($_G['setting']['holddomain']) ? array('www') : explode('|', $_G['setting']['holddomain']);
	$ishold = false;
	foreach ($holdmainarr as $value) {
		if(strpos($value, '*') === false) {
			if(strtolower($value) == $domain) {
				$ishold = true;
				break;
			}
		} else {
			$value = str_replace('*', '.*?', $value);
			if(@preg_match("/$value/i", $domain)) {
				$ishold = true;
				break;
			}
		}
	}
	return $ishold;
}
?>