<?php

/**
 * 模块：各类xwb用户操作
 * @author xionghui<xionghui1@staff.sina.com.cn>
 * @since 2010-06-08
 * @copyright Xweibo (C)1996-2099 SINA Inc.
 * @version $Id: xwbSiteInterface.mod.php 551 2011-01-10 03:18:37Z junxiong $
 *
 */
class xwbSiteInterface {
	function xwbSiteInterface(){}
	
	function t(){
		return ;
		echo '<pre>';
		$wb = XWB_plugin::getWB();
		$ret = $wb->getUserShow(11014);
		print_r($ret);
		
		exit;
		$ret = $wb->update('TEST-PUBLIST-MBLOG.'.rand(1111111,99999999), false);
		print_r($ret);
		var_dump($ret['id']);
		
		$line = "\r\n".str_repeat('-', 80)."\r\n";
		XWB_plugin::LOG($line.print_r($ret, 1).$line);
	}
	
	function signer(){
		if( !XWB_plugin::pCfg('is_signature_display') ){
			XWB_plugin::showError('网站管理员关闭了插件功能“新浪微博签名”。请稍后再试。');
		}
		
		$myid = XWB_plugin::getBindInfo('sina_uid');
		$myKeyStr = '';
		if (!empty($myid)){
			$wbApi = XWB_plugin::getWB();
			$wbApi->is_exit_error = false;
			$ret = $wbApi->getUserShow($myid);
			if ( isset($ret['created_at']) ){
				$t = @strtotime($ret['created_at']);
				if( $t === false || $t == '-1' ){
					$ret['created_at'] = str_replace('+0800', '', $ret['created_at']);
					$t = @strtotime($ret['created_at']);
					$t = ( $t === false || $t == '-1' ) ? time() : $t;
				}
				$myKeyStr = substr(md5(date('Ymd', $t)),0,8);
			}
			include XWB_P_ROOT.'/tpl/signer.tpl.php';
		}else{
			XWB_plugin::redirect('xwbSiteInterface.bind', 2);
		}
		
	}
	
	function getTips(){
//		if( !XWB_plugin::pCfg('is_tips_display') ){
//			$this->ajaxOut('99999', '新浪微博资料页功能已经关闭！');
//		}
		
		$view_id = (int)XWB_plugin::V('g:view_id');
		if (empty($view_id)) {$this->ajaxOut('10001', '查看目标ID不能为空.');}
        
		$wbApi  = XWB_plugin::getWB();
        $keys	= $this->_getTockenFromDB($view_id);
        if (empty($keys))  {$this->ajaxOut('10002', '无法从数据库中获取对方绑定信息，可能是未绑定用户，不能查看其信息.');}
        $wbApi->setTempToken($keys['oauth_token'], $keys['oauth_token_secret']);
        $wbApi->is_exit_error = false;

        /* 获取数据库缓存的用户资料 2010-09-25 */
        $data = $this->_getUserInfoFromDB($view_id);
        /* 结束 */

        if ( ! $data || ! isset($data['timestamp']) || intval(XWB_plugin::pCfg('wbx_medal_update_time')) < time() - $data['timestamp']) // 判断是否更新缓存数据 2010-09-09
        {
            $rst = $wbApi->getUserShow($view_id);
            
            if (!is_array($rst) || isset($rst['error']) || empty($rst['id'])){
                    $this->ajaxOut('10003', '无法从接口中用户信息,['.$rst['error_code'].":".$rst['error'].']');
            }

            $data = array(
            'sina_uid'=>$rst['id'].'','sina_name'=>$rst['screen_name'],'location'=>$rst['location'],
            'gender'=>$rst['gender'],'profile_image_url'=>$rst['profile_image_url'],
            'followers_count'=>$rst['followers_count'],'friends_count'=>$rst['friends_count'],'statuses_count'=>$rst['statuses_count'],
            'description'=>$rst['description'],'last_blog'=>$rst['status']['text'],'last_blog_id'=>$rst['status']['id'].'',
            'timestamp'=>time()
            );

            /* 用户资料写入数据库 2010-09-25 */
            $this->_setUserInfoFromDB($view_id, $data);
            /* 结束 */
        }

        $isFriend	= 0;
        $mySinaUid	= XWB_plugin::getBindInfo('sina_uid','');
        if ( !empty($mySinaUid) ){
            if( $mySinaUid == $view_id ){
                $isFriend	= 1;
            }else{
                $isFriend	= $wbApi->existsFriendship($mySinaUid,$view_id);
                $isFriend	= $isFriend['friends']==true ? 1 : 0;
            }
            $data['isFriend'] = $isFriend;
        }
		
		$this->ajaxOut(0,$data);		
	}
	
	function ajaxOut($code, $rst=''){
		echo json_encode(array($code, $rst));exit;
	}
	
	/// 从数据库中获取 OAUTH KEYS 
	function _getTockenFromDB($sina_uid){
		$db = XWB_plugin::getDB();
		$sql = "SELECT * FROM ".XWB_S_TBPRE."xwb_bind_info  WHERE  sina_uid=".$sina_uid." ";
		$r	= $db->fetch_first($sql);
		if (empty($r)) {return false;}
		return array('oauth_token'=>$r['token'],
					 'oauth_token_secret'=>$r['tsecret'],
					 'uid'=>$r['uid'],
					 'sina_uid'=>$r['sina_uid']);
	}

    /**
     * 将用户资料写入数据库 2010-09-25
     *
     * @param array $dataset 要写入的数据
     */
    function _setUserInfoFromDB($sina_uid, $dataset)
    {
        $profile = XWB_plugin::O('xwbUserProfile');
        return $profile->set4Tip($sina_uid, 'tipUserInfo', $dataset);
    }

    /**
     * 从数据库中获取用户资料 2010-09-25
     */
    function _getUserInfoFromDB($sina_uid)
    {
        $profile = XWB_plugin::O('xwbUserProfile');
        return $profile->get4Tip($sina_uid, 'tipUserInfo', FALSE);
    }

	function attention(){
		if( !XWB_plugin::pCfg('is_tips_display') ){
			XWB_plugin::deny('网站管理员关闭了插件功能“新浪微博资料页”。请稍后再试。');
		}
		
		$att_id = (int)XWB_plugin::V('g:att_id');
		$wbApi  = XWB_plugin::getWB();
		$wbApi->is_exit_error = false;
		$mySinaUid	= XWB_plugin::getBindInfo('sina_uid','');
		if (empty($mySinaUid)){
			XWB_plugin::deny('你不是绑定用户，不能关注其它用户');
		}
		
		$rst = $wbApi->createFriendship($att_id);
		$url = 'http://t.sina.com.cn/'.$att_id;
		XWB_plugin::redirect($url, 3);
	}
	
	/**
	 * 基础设置
	 */
	function pluginCfg(){
		if (!defined('XWB_S_IS_ADMIN') || !XWB_S_IS_ADMIN){
			XWB_plugin::deny('');
		}
		include XWB_P_ROOT.'/tpl/plugin_cfg_app_set.tpl.php';
	}
	
	
	/**
	 * 写入基础设置
	 */
	function doPluginCfg(){
		if (!defined('XWB_S_IS_ADMIN') || !XWB_S_IS_ADMIN || !XWB_plugin::isRequestBy('POST') ){
			XWB_plugin::deny('');
		}
		
		$set = (array)XWB_plugin::V('p:pluginCfg');
		$newset = array();
		
		$inputCheck = array(
							'is_display_login_button' => array(0,1),
							'is_sync_face' => array(0,1),
							'is_tips_display' => array(0,1),
							'is_signature_display' => array(0,1),
							'is_wbx_display' => array(0,1),
							'wbx_height' => array(75,500),
							'wbx_is_title' => array(0,1),
							'wbx_is_blog' => array(0,1),
							'wbx_is_fans' => array(0,1),
							'wbx_style' => array(1,5),
							'wbx_line' => array(1,7),
							'wbx_medal_update_time' => array(0,999999999),
							'wbx_share_time' => array(0,999999999),
							'wbx_huwb_update_time' => array(0,999999999),
							'is_account_binding' => array(1,1),
							'bind_btn_usernav' => array(0,1),
							);
		
		$newset = $this->_filterInput($set, $inputCheck);
		$newset['wbx_url'] = (string)$set['wbx_url'];
		
		if (!XWB_plugin::setPCfg($newset)){
			$ret = array(0,'设置保存失败，请检查插件目录是否可写。');
		}else{
			$ret = array(1,'应用设置保存成功');
		}
		$this->_oScript('xwbSetTips',$ret);
	}
	
	
	/**
	 * 同步相关设置
	 */
	function pluginCfg4Sync(){
		if (!defined('XWB_S_IS_ADMIN') || !XWB_S_IS_ADMIN){
			XWB_plugin::deny('');
		}
		include XWB_P_ROOT.'/tpl/plugin_cfg_sync_set.tpl.php';
	}
	
	
	/**
	 * 写入同步相关设置
	 */
	function doPluginCfg4Sync(){
		if (!defined('XWB_S_IS_ADMIN') || !XWB_S_IS_ADMIN || !XWB_plugin::isRequestBy('POST')){
			XWB_plugin::deny('');
		}
		
		$set = (array)XWB_plugin::V('p:pluginCfg');
		$newset = array();
		
		$inputCheck = array(
							'is_synctopic_toweibo' => array(0,1),
							'is_syncdoing_toweibo' => array(0,1),
							'is_syncblog_toweibo' => array(0,1),
							'is_syncshare_toweibo' => array(0,1),
							'is_syncarticle_toweibo' => array(0,1),
							'is_upload_image' => array(0,1),
							'wb_addr_display' => array(0,1),
							'is_rebutton_display' => array(0,1),
							'is_syncreply_toweibo' => array(0,1),
							'link_visit_promotion' => array(0,1),
							);
		
		$newset = $this->_filterInput($set, $inputCheck);
		
		if (!XWB_plugin::setPCfg($newset)){
			$ret = array(0,'设置保存失败，请检查插件目录是否可写。');
		}else{
			$ret = array(1,'同步设置保存成功');
		}
		$this->_oScript('xwbSetTips',$ret);
	}
	
	
	function pluginCfg4oc()
    {
        if (!defined('XWB_S_IS_ADMIN') || !XWB_S_IS_ADMIN){
			XWB_plugin::deny('');
		}

        // 处理官方微博数据
        $owbCacheFile = XWB_P_ROOT . '/cache/owbset/owbCache.data.php'; //定义官方微博数据缓存文件路径

        // 缓存文件存在
        if ( is_file($owbCacheFile) )
        {
            require_once $owbCacheFile; //调用官方微博数据缓存文件
        }

        // 缓存文件不存在
        else
        {
            $owbUserRs = array(); //官方微博数据未定义
        }

		include XWB_P_ROOT.'/tpl/plugin_cfg4oc.tpl.php';
    }
    
    function doPluginCfg4oc()
    {
    	if (!defined('XWB_S_IS_ADMIN') || !XWB_S_IS_ADMIN || !XWB_plugin::isRequestBy('POST')){
			XWB_plugin::deny('');
		}
    	
        // 获取参数
        $id = trim(XWB_plugin::V('p:id')); //获取用户id参数
        $name = trim(strval(XWB_plugin::V('p:name'))); //获取用户名参数
        if ( ! $id || ! $name) exit(json_encode(array('error_no' => 1, 'error' => '无法获取参数.'))); //参数为空

        // 根据参数获取官方微博数据
        //组织参数
        $params = array(
            'q' => $name,                      //关键字
            'snick' => 1,                   //昵称
            'sdomain' => 0,                 //个性域名
            'sintro' => 0,                  //简介
            'source' => XWB_APP_KEY,        //source访问，不验证
        );


        // 根据参数获取微博数据
        $weiboClient = XWB_plugin::getWB(); //定义微博通讯客户端
        $weiboClient->is_exit_error = false; //忽略通讯错误
        $result = $weiboClient->searchUser($params); //搜索用户

        // 发生通讯错误
        if ( ! is_array($result) || empty($result) || isset($result['error'])) exit(json_encode(array('error_no' => 1, 'error' => "无法从接口中获取用户信息.")));

        // 在搜索结果中寻找符合id参数的元素
        $ocRs = array();
        foreach ($result as $value)
        {
            if ($id == $value['id'])
            {
                $ocRs = $value;
                break;
            }
        }

        if ( empty($ocRs) ) exit(json_encode(array('error_no' => 1, 'error' => "无法从接口中获取用户信息.")));

        // 存在头像地址
        if (isset($ocRs['profile_image_url']))
        {
            $ocRs['local_image_url'] = $ocRs['profile_image_url'];
        }

        // 将官方微博用户数据写入缓存文件
        $ocRelaFile = '/cache/owbset/owbCache.data.php'; //定义官方微博数据缓存文件相对路径
        $ocCacheFile = XWB_P_ROOT . $ocRelaFile; //定义官方微博数据缓存文件路径
        $fileContent = "<?php\r\n\$owbUserRs = " . var_export($ocRs, TRUE) . "\r\n?>"; //组织缓存数据

        // 无法写入
        if ( ! file_put_contents($ocCacheFile, $fileContent))
        {
            exit(json_encode(array('error_no' => 1, 'error' => '请确保拥有权限，无法创建数据缓存文件：' . XWB_P_DIR_NAME . $ocRelaFile)));
        }
        
        echo json_encode($ocRs); //输出json数据
    }

    function ocSearch()
    {
    	
    	
        // 获取参数
        $q = trim(XWB_plugin::V('p:search')); //获取搜索关键字参数
        $page = intval(XWB_plugin::V('p:page'));
        
        if (!$q || !defined('XWB_S_IS_ADMIN') || !XWB_S_IS_ADMIN || !XWB_plugin::isRequestBy('POST')){
        	exit(json_encode(array('error_no' => 1, 'error' => '请输入搜索关键字.'))); //参数为空
        }

        //组织参数
        $params = array(
            'q' => $q,                      //关键字
            'snick' => 1,                   //昵称
            'sdomain' => 0,                 //个性域名
            'sintro' => 0,                  //简介
            'page' => $page ? $page : 1,    //页码
            'source' => XWB_APP_KEY,        //source访问，不验证
        );
        
        
        // 根据参数获取微博数据
        $weiboClient = XWB_plugin::getWB(); //定义微博通讯客户端
        $weiboClient->is_exit_error = false; //忽略通讯错误
        $result = $weiboClient->searchUser($params); //搜索用户

        // 发生通讯错误
        if ( ! is_array($result) || empty($result) || isset($result['error'])) exit(json_encode(array('error_no' => 1, 'error' => "无法从接口中获取用户信息.")));
        
        echo json_encode($result); //输出json数据
    }

	function reg(){
		if( !XWB_plugin::pCfg('is_account_binding') ){
			XWB_plugin::showError('网站管理员关闭了插件功能“新浪微博绑定”。请稍后再试。');
		}
		
		$this->_chkIsWaitingForReg();
		$xwb_user = XWB_plugin::getUser();
		$sina_id = $xwb_user->getInfo('sina_uid');
		$wb = XWB_plugin::getWB();
		
		$sina_user_info = XWB_plugin::pCfg('is_sync_face') ? $wb->getUserShow($sina_id) : '';
		
		include XWB_P_ROOT.'/tpl/register.tpl.php';
	}
	
	function doReg(){
		global $_G;
		if( !XWB_plugin::pCfg('is_account_binding')  || !XWB_plugin::isRequestBy('POST') ){
			XWB_plugin::showError('网站管理员关闭了插件功能“新浪微博绑定”。请稍后再试。');
		}
		
		
		$this->_chkIsWaitingForReg();
		$usernameS	= trim( (string)(XWB_plugin::V('p:siteRegName')) );
		$emailS		= trim( (string)(XWB_plugin::V('p:siteRegEmail')) );
		$regPwdS	= trim( (string)(XWB_plugin::V('p:regPwd')) );
		
		//转换成论坛编码，方便进行UC和论坛的注册数据库操作
		$username	= XWB_plugin::convertEncoding($usernameS, "UTF8", XWB_S_CHARSET);
		$email		= XWB_plugin::convertEncoding($emailS, "UTF8", XWB_S_CHARSET);
		$password = $regPwdS;
		
		$uid = 0;
		if (empty($username))				{$uid = -102;}
		if (empty($email))	{$uid = -101;}
		if (empty($password))	{$uid = -103;}
		
		$db	 = XWB_plugin::getDB();
		
		if (empty($uid)){
			$wbApi	= XWB_plugin::getWB();
			$uInfo	= $wbApi->verifyCredentials();
			
			//验证微博帐号是否已经在当前站点中绑定，防止用户通过多个浏览器恶意注册用户
			$bInfo = $db->fetch_first("SELECT * FROM ".XWB_S_TBPRE."xwb_bind_info  WHERE  sina_uid='".$uInfo['id']."'");
			if ( !empty($bInfo) && is_array($bInfo) ){
				$uid = -201;
			}else{
				$regInstance = XWB_plugin::O('xwbSiteUserRegister');
				$uid = $regInstance->reg($username, $email, $password);
			}
			unset($bInfo);
		}
		
		$msg = '';
		
		if ($uid<1){
			$msg = $this->_getRegTip($uid);
		}else{
			$sess = XWB_plugin::getUser();
			$sess->setInfo('sina_uid', $uInfo['id']);
			$last_key = $sess->getOAuthKey(true);
			
			$inData = array();
			$inData['uid'] 		= $uid;
			$inData['sina_uid'] = $uInfo['id'];
			$inData['token']	= $last_key['oauth_token'];
			$inData['tsecret']	= $last_key['oauth_token_secret'];
			$inData['profile']	= '[]';
			$sqlF = array();
			$sqlV = array();
			foreach ($inData as $k=>$v){
				$sqlF[] = "`".$k."`";
				$sqlV[] = "'".mysql_escape_string($v)."'";
			}
			
			$sql = "INSERT INTO ".XWB_S_TBPRE."xwb_bind_info  (".implode(",",$sqlF).") VALUES (".implode(",",$sqlV).") ;";
			$rst = $db->query($sql, 'UNBUFFERED');
			
			require_once XWB_P_ROOT. '/lib/xwbSite.inc.php';
			xwb_setSiteUserLogin($uid);
			
			if( XWB_plugin::pCfg('is_sync_face') ){
				//同步新浪头像（放到脚本结束时进行）
				$faceSync = XWB_plugin::N('sinaFaceSync');
				register_shutdown_function(array(&$faceSync, 'sync4DX'), $uid);
			}
			
			dsetcookie('sina_bind_status'. $uid, 1, 604800);
			dsetcookie('xwb_tips_type','',0);
			$sess->setInfo('waiting_site_reg', '0');
			
			$displayWindow = 0;
			$msg = "已为你创建了" . XWB_S_TITLE .  "论坛的帐号，并与你的新浪微博帐号进行绑定。下次你可以继续使用新浪微博帐号登录使用" . XWB_S_TITLE . "论坛。";
			
			if( $_G['setting']['regverify'] == 1 ){
				$displayWindow = 1;
				$msg .= '<br /><em>你的帐号 '. htmlspecialchars($usernameS). ' 处于非激活状态，请收取邮件激活你的帐号</em>'.
						'<br />如果你没有收到我们发送的系统邮件，请进入个人中心点击“重新验证 Email”或在“密码和安全问题”中更换另外一个 Email 地址。注意：在完成激活之前，根据管理员设置，你将只能以待验证会员的身份访问论坛。';
				$msg .= "<br />邮箱:  <em>".htmlspecialchars($emailS)."</em>  ";
			}elseif( $_G['setting']['regverify'] == 2  || $_G['setting']['regverify'] == 3 ){
				$displayWindow = 1;
				$msg .= '<br /><em>请等待管理员审核你的帐号 '. htmlspecialchars($usernameS). '</em><br />在完成审核之前，根据管理员设置，你将只能以待验证会员的身份访问论坛，你可能不能进行发帖等操作。审核成功后，上述限制将自动取消。';
			}else{
				$msg .= "<br />帐号:  <em>".htmlspecialchars($usernameS)."</em>  ";
			}
			
			//反向绑定统计上报
			$sess->appendStat('bind', array( 'uid' => $uInfo['id'], 'type' => 2 ));
			
		}
		$this->_oScript('xwbSetTips',array($uid,$msg, $displayWindow));
	}
	
	/**
	 * 在未登录论坛帐号，但已登录新浪微博帐号的绑定页面进行用户账户验证和绑定
	 */
	function doBindAtNotLog(){
		if( !XWB_plugin::pCfg('is_account_binding')  || !XWB_plugin::isRequestBy('POST') ){
			XWB_plugin::showError('网站管理员关闭了插件功能“新浪微博绑定”。请稍后再试。');
		}
		
		$this->_chkIsWaitingForReg();
		$usernameS	= trim( (string)(XWB_plugin::V('p:siteBindName')) );
		$password	= trim( (string)(XWB_plugin::V('p:bindPwd')) );
		$questionid	= (int)(XWB_plugin::V('p:questionid'));
		$questionanswerS	= trim( (string)(XWB_plugin::V('p:questionanswer')) );
		
		$username	= XWB_plugin::convertEncoding($usernameS, "UTF8", XWB_S_CHARSET);
		if( !empty($questionanswerS) ){
			$questionanswer		= XWB_plugin::convertEncoding($questionanswerS, "UTF8", XWB_S_CHARSET);
		}else{
			$questionanswer = '';
		}
		
		$uid = 0;
		//第1关：数据输入验证关
		if (empty($username))				{$uid = -102;}
		if (empty($password))				{$uid = -103;}
		
		$msg = '';
		//第2关：用户身份验证关
		if( $uid == 0  ){
			$verify = XWB_plugin::O('siteUserVerifier');
			$verifyresult = $verify->verify ( $username, $password, $questionid, $questionanswer );
			$uid = $verifyresult[0];
		}
		
		if( $uid > 0 ){
			$wbApi	= XWB_plugin::getWB();
			$uInfo	= $wbApi->verifyCredentials();
			
			$db	 = XWB_plugin::getDB();
			//第3关：验证微博帐号是否已经在当前站点中绑定，防止用户通过多个浏览器恶意注册用户
			$bInfo = $db->fetch_first("SELECT * FROM ".XWB_S_TBPRE."xwb_bind_info  WHERE sina_uid='".$uInfo['id']."' or uid='".$uid ."'");
			if ( !empty($bInfo) && is_array($bInfo) ){
				$uid = -201;
			}else{
				$sess = XWB_plugin::getUser();
				$sess->setInfo('sina_uid', $uInfo['id']);
				$last_key = $sess->getOAuthKey(true);
			
				$inData = array();
				$inData['uid'] 		= $uid;
				$inData['sina_uid'] = $uInfo['id'];
				$inData['token']	= $last_key['oauth_token'];
				$inData['tsecret']	= $last_key['oauth_token_secret'];
				$inData['profile']	= '[]';
				$sqlF = array();
				$sqlV = array();
				foreach ($inData as $k=>$v){
					$sqlF[] = "`".$k."`";
					$sqlV[] = "'".mysql_escape_string($v)."'";
				}
			
				$sql = "INSERT INTO ".XWB_S_TBPRE."xwb_bind_info  (".implode(",",$sqlF).") VALUES (".implode(",",$sqlV).") ;";
				$rst = $db->query($sql, 'UNBUFFERED');
			
				require_once XWB_P_ROOT. '/lib/xwbSite.inc.php';
				xwb_setSiteUserLogin($uid);
				
				dsetcookie('sina_bind_status'. $uid, 1, 604800);
				dsetcookie('xwb_tips_type','',0);
				$sess->setInfo('waiting_site_reg', '0');
			
				$msg = "绑定论坛帐号成功。下次你可以继续使用新浪微博帐号登录使用" . XWB_S_TITLE . "论坛。";
				$msg.="<br>绑定帐号:  <em>".htmlspecialchars($usernameS)."</em>  ";
				
				//正向绑定（在未登录论坛帐号已登录新浪微博帐号的绑定页面）统计上报
				$sess->appendStat('bind', array( 'uid' => $uInfo['id'], 'type' => 1 ));
				
			}
		}
		
		if( $uid <= 0 ){
			$msg = $this->_getBindTip($uid);
		}
		$displayWindow = 0;
		$this->_oScript('xwbSetTips',array($uid, $msg, $displayWindow));
		
	}
	
	
	function _getRegTip( $code ){
		$tips = array(
			'-1' => '用户名太长或太短',
			'-2' => '用户名包含敏感字符',
			'-3' => '此账户已被使用',
			'-4' => '邮箱格式错误或已被使用',
			'-5' => '邮箱格式错误或已被使用',
			'-6' => '邮箱格式错误或已被使用',

			'-101' => '用户邮箱不能为空',
			'-102' => '用户帐号不能为空',
			'-103' => '密码不能为空',
			'-104' => '密码不一致',
		
			'-1001' => '24 小时注册次数超限，请稍后重试',
			'-1002' => 'IP 注册间隔超限，请稍后重试',
			'-1003' => '特殊 IP 注册限制（每 72 小时将至多只允许注册一个帐号），请稍后重试',
		
			'-201' => '微博帐号已绑定',
		);
		
		$code = (string)$code;
		return isset($tips[$code]) ? $tips[$code] : '未知错误';
	}
	
	
	function _getBindTip( $code ){
		$tips = array(
			'-1' => '用户不存在',
			'-2' => '密码错误',
			'-3' => '安全提问错误',
			'-4' => '用户在论坛未激活',
		
			'-102' => '用户帐号不能为空',
			'-103' => '密码不能为空',
			
			'-201' => '微博帐号已绑定',
		);
		
		$code = (string)$code;
		return isset($tips[$code]) ? $tips[$code] : '未知错误';
	}
	
	function _oScript($func,$ret){
		echo '<script>';
		echo "parent.".$func."(".json_encode($ret).");";
		echo '</script>';
		exit;
	}
	
	/// 检查是否 等待注册并绑定用户
	function _chkIsWaitingForReg(){
		$sess = XWB_plugin::getUser ();
		$isReg = $sess->getInfo ( 'waiting_site_reg' );
		if ( XWB_S_UID || empty ( $isReg )) {
			$sess->clearToken();
			$this->_oScript ( 'parent.XWBcontrol.close', 'reg' );
		}
	}

    // 获取活跃用户数据
    function _getHuwbUsers($limit, $friendIds = array())
    {
        $huwbUserRs = array();

        if (XWB_S_UID <= 0) return $huwbUserRs;

        // 处理活跃用户微博数据
        $huwbCacheFile = XWB_P_ROOT . '/cache/owbset/huwbCache.data.php'; //定义活跃用户微博数据缓存文件路径

        // 缓存文件存在
        if (is_file($huwbCacheFile) && intval(XWB_plugin::pCfg('wbx_huwb_update_time'))*60*60 > time() - filemtime($huwbCacheFile))
        {
            require_once $huwbCacheFile; //调用活跃用户数据缓存文件
            $huwbUserRs = array_slice($huwbUserRs, 0, $limit);
        }

        // 缓存文件不存在
        else
        {
            $xwbDBHandler = XWB_plugin::getDB(); //定义数据库管理器

            // 查询已绑定新浪微博的好友
            $sql = "SELECT main.fuid AS uid,main.fusername AS username,bind.sina_uid FROM " . XWB_S_TBPRE . "home_friend main," . XWB_S_TBPRE . "xwb_bind_info bind WHERE main.uid='" . XWB_S_UID . "' AND main.fuid = bind.uid ORDER BY main.num DESC, main.dateline DESC LIMIT 0," . $limit;
            $result = $this->_dbToArray($xwbDBHandler->query($sql)); //执行查询，结果返回数据源

            // 好友数小于上限
            if( $limit > count($result) ) {
                // 查询在一星期内发帖数最多的已绑定新浪微博的用户（查询论坛活跃用户）
                $sql = "SELECT m.uid,m.username,n.sina_uid FROM " . XWB_S_TBPRE . "common_member m," . XWB_S_TBPRE . "common_member_count mc," . XWB_S_TBPRE . "common_member_status ms," . XWB_S_TBPRE . "xwb_bind_info n WHERE mc.uid=m.uid AND ms.uid=m.uid AND n.uid=m.uid AND n.uid!='" . XWB_S_UID . "' AND ms.lastpost>'" . (time()-7*24*60*60*3) . "' ORDER BY mc.posts DESC LIMIT 0," . $limit; //定义查询字符串
                $memberRs = $this->_dbToArray($xwbDBHandler->query($sql)); //执行查询，结果返回数据源
                $result = array_merge($result, $memberRs); // 合并数据集
            }

            // 处理查询数据
            loaducenter(); //载入UCenter配置
            foreach($result as $row)
            {
                if ( in_array($row['sina_uid'], $friendIds) || in_array($row['uid'], $huwbUserRs) ) continue; //若会员已存在则忽略
                $huwbUserRs[$row['uid']] = $row; //数据集赋值
            }

            // 写入缓存文件
            $fileContent = "<?php\r\n\$huwbUserRs = " . var_export($huwbUserRs, TRUE) . "\r\n?>";
            if ( !file_put_contents($huwbCacheFile, $fileContent)) $this->_showBindError('file');
        }

        // 判断是否关注
        foreach($huwbUserRs as $key => $row)
        {
            $huwbUserRs[$key]['avatar'] = avatar($row['uid'], 'small'); //定义用户论坛头像
            $huwbUserRs[$key]['friends'] = in_array($row['sina_uid'], $friendIds);
        }
        
        return $huwbUserRs;
    }
	
	// 找开绑定设置或者绑定提示页面
	function bind(){
		if( !XWB_plugin::pCfg('is_account_binding') ){
			XWB_plugin::showError('网站管理员关闭了插件功能“新浪微博绑定”。请稍后再试。');
		}

        $isBind = XWB_plugin::isUserBinded(); //获取绑定关系
        $xwbUserHandler = XWB_plugin::getUser(); //定义微博用户管理器
		
		// 已登录论坛并已绑定新浪微博
        if ( XWB_S_UID > 0 && $isBind )
        {
            $weiboClient = XWB_plugin::getWB(); //定义微博通讯客户端
            $weiboClient->is_exit_error = FALSE; //忽略通讯错误
            $owbUserRs = $huwbUserRs = array(); //定义官方微博数据集和活跃用户数据集

            // 处理新浪用户数据
            $sinaId = $xwbUserHandler->getInfo('sina_uid'); //获取用户绑定的新浪用户ID
            $sinaUserInfo = $weiboClient->getUserShow($sinaId); //根据新浪用户ID获取新浪用户信息
            if( !$sinaUserInfo || isset($sinaUserInfo['error_code']) || isset($sinaUserInfo['error']) ) $this->_showBindError('api'); //API发生通讯错误
            $friendIds = ($isBind && $sinaId) ? $weiboClient->getFriendIds($sinaId) : array('ids' => array()); //获取当前会员已关注的用户
            if( !$friendIds || isset($friendIds['error_code']) || isset($friendIds['error']) ) $this->_showBindError('api'); //API发生通讯错误

            // 处理设置数据
            $screenName = $sinaUserInfo['screen_name'];
            $domain = $sinaUserInfo['id'];
            $userProfileHandler = XWB_plugin::O('xwbUserProfile'); //定义用户资料管理器
            $userSetting = $userProfileHandler->get('bind_setting', 1); //获取当前论坛登录用户的用户设置资料

            // 处理官方微博数据
            $owbCacheFile = XWB_P_ROOT . '/cache/owbset/owbCache.data.php'; //定义官方微博数据缓存文件路径

            // 缓存文件存在
            if ( is_file($owbCacheFile) )
            {
                require_once $owbCacheFile; //调用官方微博数据缓存文件
                $friendship = isset($owbUserRs['id']) ? in_array($owbUserRs['id'], $friendIds['ids']) : false;
            }
            else
            {
                $owbUserRs = array(); //官方微博数据未定义
            }

            // 处理活跃用户数据
            $huwbUserRs = $this->_getHuwbUsers(2, $friendIds['ids']);

            //获取用户绑定信息
			$profile = XWB_plugin::O('xwbUserProfile');
			$userPorfile = $profile->get();
			include XWB_P_ROOT.'/tpl/xwb_bind.tpl.php';
        }
        
        // 未登录论坛
        else
        {
            if ( XWB_S_UID > 0  ) $huwbUserRs = $this->_getHuwbUsers(4); //已登录论坛未绑定新浪微博，获取活跃用户数据
            $xwbUserHandler->logReferer(); //记录referer
            include XWB_P_ROOT.'/tpl/xwb_ubind.tpl.php';
        }
	}

	/**
	 * 解除绑定
	 */
	function unbind() {
		if( XWB_S_UID < 1 || !XWB_plugin::pCfg('is_account_binding') ){
			XWB_plugin::showError('网站管理员关闭了插件功能“新浪微博绑定”。请稍后再试。');
		}
		
		$db = XWB_plugin::getDb();
		$sql = 'DELETE FROM ' . XWB_S_TBPRE . 'xwb_bind_info WHERE `uid`=' . XWB_S_UID;
		$db->query($sql);
		$sess = XWB_plugin::getUser();
		$sess->clearInfo();
		dsetcookie('sina_bind_status'. XWB_S_UID, 2, 604800);
		echo json_encode(array('ok'=>1));
	}

	
	/**
	 * 用户设置同步选项
	 */
	function setUserProfileBind(){
		if( XWB_S_UID < 1 ){
			XWB_plugin::showError('你尚未登录。');
		}elseif( !XWB_plugin::pCfg('is_account_binding')  || !XWB_plugin::isRequestBy('POST') ){
			XWB_plugin::showError('网站管理员关闭了插件功能“新浪微博绑定”。请稍后再试。');
		}
		
		$set = (array)XWB_plugin::V('p:set');
		$newset = array();
		
		$inputCheck = array(
							/* 默认同步主题打勾 */
							'topic2weibo_checked' => array(0,1),
							/* 默认同步日志打勾 */
							'blog2weibo_checked' => array(0,1),
							/* 默认同步门户文章打勾  */
							'article2weibo_checked' => array(0,1),
							/* 允许同步分享 */
							'share2weibo' => array(0,1),
							/* 允许同步记录 */
							'doing2weibo' => array(0,1),
							);
		
		$newset = $this->_filterInput($set, $inputCheck);
		
		$profile = XWB_plugin::O('xwbUserProfile');
		$profile->set($newset);
		echo '<script>parent.showMsg(\'success\');</script>';
	}
	
    /**
     * 获取转发帖子内容
     */
    function share()
    {
        if( ! XWB_plugin::pCfg('is_rebutton_display')){
        	XWB_plugin::showError('网站管理员关闭了插件功能“新浪微博分享”。请稍后再试。');
        }

        /* 获取用户信息 */
        $rst = $this->_getUserInfo();
        if (isset($rst['error_no']) && 0 < $rst['error_no']) $this->_showTip($rst['error']);

        /* 获取主题ID */
		$tid = intval(XWB_plugin::V('g:tid'));
		if (empty($tid)) $this->_showTip('错误:查看帖子ID不能为空.', $rst);

        /* 获取主题信息 */
        $xp_publish = XWB_plugin::N('xwb_plugins_publish');
        $shareData = $xp_publish->forShare($tid);
        if (empty($shareData)) $this->_showTip('错误:无法获取主题信息.', $rst);

        /* 销毁 SESSION['forshare'] 变量*/
        $sess = XWB_plugin::getUser();
        $sess->delInfo('forshare');

        /* 写入 SESSION，防止外部转发 */
        $sess->setInfo('forshare', 1);

        include XWB_P_ROOT.'/tpl/share.tpl.php';
    }

    /**
     * 帖子转发
     */
    function doShare()
    {
        if( ! XWB_plugin::pCfg('is_rebutton_display')  || !XWB_plugin::isRequestBy('POST')){
        	XWB_plugin::showError('网站管理员关闭了插件功能“新浪微博分享”。请稍后再试。');
        }

        $sess = XWB_plugin::getUser();
        
        /* 判断是否外部转发 */
        
        if ( 1 != $sess->getInfo('forshare')) XWB_plugin::showError('禁止外部转发');

        /* 销毁 SESSION['forshare'] 变量*/
        $sess->delInfo('forshare');
        
        /* 判断转发时间间隔 */
        $shareTime = intval(XWB_plugin::pCfg('wbx_share_time'));
        if ($shareTime >= time() - intval($sess->getInfo('sharetime'))) XWB_plugin::showError("转发过快，转发间隔为 {$shareTime} 秒");
        
        /* 获取用户信息 */
        $rst = $this->_getUserInfo();
        if (isset($rst['error_no']) && 0 < $rst['error_no']) $this->_showTip($rst['error']);

        /* 获取传递信息 */
        $message = trim(strval(XWB_plugin::V('p:message')));
        $pic = trim(strval(XWB_plugin::V('p:share_pic')));
		if (empty($message)) $this->_showTip('错误:转发信息不能为空.', $rst);

        /* 转发主题 */
        $xp_publish = XWB_plugin::N('xwb_plugins_publish');
        $ret = $xp_publish->sendShare($message, $pic);

        /* 写入 SESSION 发布时间 */
        $sess->setInfo('sharetime', time());

        /* 错误处理 */
        if ($ret === false || $ret === null) $this->_showTip('错误:系统错误!', $rst);
        if (isset($ret['error_code']) && isset($ret['error']))
        {
            $error_code_se = substr($ret['error'], 0, 5);
            if ('400' == $ret['error_code'] && '40025' == $error_code_se)
                $ret['error'] = '错误:不能发布相同的微博!';
            else
                $ret['error'] = '错误:系统错误!';
            $this->_showTip($ret['error'], $rst);
        }

        $this->_showTip('转发成功！', $rst);
    }

    /**
     * 获取用户信息
     * @return array $rst 用户信息
     */
    function _getUserInfo()
    {
        /* 获取绑定信息 */
		$sina_id = XWB_plugin::getBindInfo('sina_uid');
        if ( ! $sina_id)
            return array('error_no' => '10001', 'error' => '错误:用户未绑定.');

        /* 获取用户资料 */
        $wbApi = XWB_plugin::getWB();
        $keys = $this->_getTockenFromDB($sina_id);
        if (empty($keys))
            return array('error_no' => '10002', 'error' => '错误:无法获取绑定信息.');

        $wbApi->setTempToken($keys['oauth_token'], $keys['oauth_token_secret']);
        $wbApi->is_exit_error = false;
        $rst = $wbApi->getUserShow($sina_id);

        if ( ! is_array($rst) || isset($rst['error']) || empty($rst['id']))
            return array('error_no' => '10003', 'error' => "错误:无法从接口中获取用户信息.");

        return $rst;
    }

    /**
     * 显示信息
     * @param string $tipMsg 显示信息
     * @param array $rst 用户信息
     */
    function _showTip($tipMsg, $rst = array())
    {
        include XWB_P_ROOT.'/tpl/share_msg.tpl.php';
        exit;
    }

    /**
     * 输出错误
     * @param string $errMsg 错误信息
     */
    function _showErr($errMsg)
    {
        header('Content-Type: text/html;charset=utf-8');
        exit($errMsg);
    }

    /**
     * 数据源转数组
     * @param resource $result 数据源
     * @return array $rs 转换后的数组
     */
    function _dbToArray(&$result)
    {
        $rs = array(); //返回数据集

        if ( is_resource($result) )
        {
            $xwbDBHandler = XWB_plugin::getDB(); //定义数据库管理器

            // 处理查询数据
            while ($row = $xwbDBHandler->fetch_array($result))
                $rs[] = $row; //数据集赋值
        }
        return $rs; // 返回数据
    }

    /**
     * 显示绑定时的错误信息
     * @param string $errorType 错误类型
     */
    function _showBindError($errorType = 'api')
    {
        $isBind = XWB_plugin::isUserBinded(); //获取绑定关系
        include XWB_P_ROOT.'/tpl/xwb_bind_error.tpl.php';
        exit;
    }
 
    /**
     * 对从网页发送的数据进行检测和过滤
     * @param array $source 需要检查的数据源
     * @param array $rule 规则定义集合，键值和数据源一致
     * @param $clear 是否清除规则外的数据
     */
    function _filterInput( $source, $rule, $clear = true ){
    	$pureSource = array();
    	foreach ( $rule as $key => $value ){
			if (!isset($source[$key])|| !is_scalar($source[$key]) || (int)$source[$key] < $value[0] || (int)$source[$key] > $value[1] ){
				$pureSource[$key] = $value[0];
			}else{
				$pureSource[$key] = (int)$source[$key];
			}
		}
		
		return (true === $clear) ? $pureSource : array_merge($source, $pureSource);
    }
   
}


?>
