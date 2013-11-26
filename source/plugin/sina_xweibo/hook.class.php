<?php
/**
 * 本文件为新浪微博插件和Discuz! X的对接文件
 * 类型为符合Discuz!X插件规范的hook
 * 本文件For Discuz! X1.5
 * @author yaoying
 * @author junxiong
 * @since 2010-09-08
 * @version $Id: hook.class.php 545 2011-01-07 05:22:34Z yaoying $
 */

/**
 * 总钩子类
 *
 */
class plugin_sina_xweibo{
	
	//允许运行插件的模块。以 CURSCRIPT => CURMODUULE 进行定义
	var $allowModuleRun = array( 
									'forum' => array('post','viewthread'),
									//'member' => array('logging', 'register'),
									'portal' => array('portalcp'),
									'home' => array('spacecp', 'space'),
								);
	
	//在论坛目录下的xwb插件目录名称
	var $xwb_p_rootname = 'xwb';
	
	//当前的请求方式（POST还是GET还是其它方式），大写
	var $_requestMethod = null;
	
	//标识是否允许Xweibo运行。
	//默认不允许，需要强制在方法_start_xweibo中传入true才允许运行
	var $_allowXweiboRun = false;
	
	//debug_backtrace信息，用于检测插件是在哪个钩子被启动的。
	var $_debug_traceinfo = array();
	
	//插件设置
	var $_config = array();
	
	var $_configImported = false;
	
	/**
	 * 临时改变设置，不允许快速跳转
	 */
	function disableQuickForward(){
		global $_G;
		$msgforwardSet = (array)@unserialize($_G['setting']['msgforward']);
		$msgforwardSet['refreshtime'] = 3;  //只能是大于0的整数
		$msgforwardSet['quick'] = 0;
		$GLOBALS['_G']['setting']['msgforward'] = serialize($msgforwardSet);
	}
	
	/**
	 * 获取请求方法
	 * @return string 返回英文大写的请求方法
	 */
	function getRequestMethod(){
		if( null == $this->_requestMethod ){
			$this->_requestMethod = isset($_SERVER['REQUEST_METHOD']) ? strtoupper($_SERVER['REQUEST_METHOD']) : '';
		}
		return $this->_requestMethod;
	}
	
	/**
	 * 初始化插件运行环境。
	 * 若允许插件运行、或者已经初始化，则返回true；否则返回false，表示不可以运行插件。
	 * 除非特殊情况，否则在使用新浪微博相关钩子前，请自行运行一遍该方法。并根据返回的bool值作相应的判断处理。
	 * 不能够将该方法放入__construct方法中！否则将引起大面积的无意义资源消耗！
	 * @param boolen $force 是否强制运行插件。一般需要传入true
	 * @return boolen
	 */
	function _start_xweibo( $force = false ){
		if( true === $force ){
			$this->_allowXweiboRun = true;
		}
		
		//已经运行过初始化插件环境了
		if( defined('IS_IN_XWB_PLUGIN') ){
			return true;
		}
		
		/*
		 * 插件内部没有允许xweibo运行，不允许运行
		 * 此情况出现在没有显著在类方法内允许插件运行
		 * 或者已经运行过初始化插件环境，但因为不符合要求而失败，被禁止运行
		 */
		if( true !== $this->_allowXweiboRun ){
			return false;
		}
		
		//插件目录不存在，禁止运行
		$xwb_start_file = DISCUZ_ROOT.'./'. $this->xwb_p_rootname .'/plugin.env.php';
		if( !is_file($xwb_start_file) ){
			$this->_allowXweiboRun = false;
			return false;
		}
		
		//初始化插件环境
		require_once $xwb_start_file;
		
		//第一次从此处启动插件的debug信息存储（开发时使用）
		//$this->_debug_traceinfo = debug_backtrace();
		//register_shutdown_function(array(&$this, '_showXweiboIsStart'));
		
		return true;
		
	}
	
	/**
	 * 显示xweibo插件第一次启动的信息（开发时使用）
	 */
	function _showXweiboIsStart(){
		//file_put_contents( 'R:/debug_'.date("Y-m-d-H-i-s") , var_export($this->_debug_traceinfo, true) );
		return '';
		echo '<div class="wp cl">
					<div class="notice">新浪微博插件曾经被初始化。初始化信息：
						<br />'. nl2br(print_r($this->_debug_traceinfo, true)).'
					</div>
				</div>';
	}
	
	
	/**
	 * 检测当前的页面模块(CURSCRIPT下的CURMODUULE)是否允许运行插件
	 * 此方法主要给方法名为“global xxx”调用方法“_start_xweibo”使用，因为“global xxx”是最早调用的
	 * @return bool
	 */
	function isModuleAllowXweiboRun(){
		global $_G;
		
		$curscript = strtolower(CURSCRIPT);
		$curmodule = strtolower(CURMODULE);
		
		//整体运行模块禁止
		if( !isset($this->allowModuleRun[$curscript]) || !in_array( $curmodule, $this->allowModuleRun[$curscript] )  ){
			return false;
		}
		
		//部分特殊模块的特定区域禁止
		
		if( 'home' == $curscript && 'space' == $curmodule ){
			//个人空间中仅允许个人资料页面、日志显示页面、相册页面运行
			if( !isset($_G['gp_do']) || !in_array($_G['gp_do'], array('profile', 'blog', 'album') )  ){
				return false;
			}
			
		}elseif( 'home' == $curscript && 'spacecp' == $curmodule ){
			//家园设置仅允许2个地方运行（签名档和发表日志）
			if(  ( !isset($_G['gp_op']) || 'bbs' != $_G['gp_op'] )  && (!isset($_G['gp_ac']) ||  !in_array($_G['gp_ac'], array('blog', 'doing', 'share'))  ) ){
				return false;
			}
			
		}elseif( 'portal' == $curscript && 'portalcp' == $curmodule ){
			//家园设置仅允许2个地方运行（签名档和发表日志）
			if( !isset($_G['gp_ac']) ||  !in_array($_G['gp_ac'], array('article') ) ){
				return false;
			}
		}
		
		return true;
	}
	
	
	/**
	 * 在footer那里输出js脚本
	 * 只有插件启动了才能运行
	 * @return string
	 */
	function global_footer(){
		global $_G;

		$return = '';
		if( true != $this->_start_xweibo( $this->isModuleAllowXweiboRun() ) ){
			//$return .= '<div class="wp cl"><div class="notice"><font color="red">没有输出新浪微博插件Footer-Javascript。</font></div></div>';
			return $return;
		}
		
		$return = $this->_get_global_footer_content();
		//$return .= '<div class="wp cl"><div class="notice">已经输出新浪微博插件Footer-Javascript。</div></div>';
		
		return $return;
		
	}
	
	
	/**
	 * 获取footer脚本内容
	 */
	function _get_global_footer_content(){
		global $_G;
		$return = '';
		include dirname(__FILE__).'/template/global_footer.htm';
		return $return;
	}
	
	
	/**
	 * （v1.0修正版暂时屏蔽，待站长自行修改启用）
	 * 在没有登录的情况下，在header那里输出登录微博的连接
	 * 为了减少不必要的消耗，此处不需要启动插件
	 * 
	 * @return string
	 */
	function global_header(){
		
		if( 1 !== $this->pCfg('is_display_login_button') ){
			return '';
		}
		
		global $_G;
		if ( !$_G['uid'] && ( !isset($_G['gp_mod']) || !in_array($_G['gp_mod'], array('logging', 'register') ) ) ) {
            return <<< EOT
            <script type="text/javascript">
                var node = document.getElementById("qmenu");
                var insertedNode = document.createElement("a");
                insertedNode.href = 'xwb.php?m=xwbAuth.login';
                insertedNode.style.display = 'inline';
                insertedNode.style.styleFloat = 'right';
                insertedNode.style.cssFloat = 'right';
                insertedNode.style.lineHeight = '26px';
                insertedNode.style.margin = '4px 10px 0 0';
                insertedNode.style.padding = '0';
                insertedNode.innerHTML = '<img src="{$this->xwb_p_rootname}/images/bgimg/loginHeader_24.png" title="&#29992;&#26032;&#28010;&#24494;&#21338;&#36830;&#25509;" onerror="this.onerror=null;this.src=\'static/image/common/none.gif\'" />';
                node.parentNode.insertBefore(insertedNode, node.nextSibling);
            </script>
EOT;
		}else{
			return '';
		}
		
	}
	
	/**
	 * 登陆后在顶部右上角，未绑定时显示绑定按钮
	 */
	function global_usernav_extra1(){
		global $_G;
		if( !$_G['uid'] || !$this->pCfg('bind_btn_usernav') ){
			return '';
		}
		
		//进行绑定查询
		$bind_status = 2;  //2未绑定状态、1绑定状态（无法使用0，因为表示清除该cookies）
		$bind_status_cookiename = 'sina_bind_status'. $_G['uid'];
		if( !isset($_G['cookie'][$bind_status_cookiename]) ){
			//echo 'running db check';  //@todo 用于检测cookies是否起作用
			$sina_uid = DB::result_first('SELECT `sina_uid` FROM '. DB::table('xwb_bind_info'). ' WHERE `uid` = '. $_G['uid'] );
			if( (int)$sina_uid > 0 ){
				$bind_status = 1;
			}
			dsetcookie($bind_status_cookiename, $bind_status, 604800);
		}elseif( $_G['cookie'][$bind_status_cookiename] == 1 ){
			$bind_status = 1;
		}
		
		if(1 == $bind_status){
			return '';
		}else{
			//DX的旧版本伪静态存在问题，故进行hack，强制增加一个/以使得伪静态正则替换失效
			return '<span class="pipe">|</span><a href="'. $_G['siteurl']. '/home.php?mod=spacecp&ac=plugin&id=sina_xweibo:home_binding" target="_blank"><img style="vertical-align:-5px;" src="xwb/images/bgimg/sina_bind_btn.png" /></a>&nbsp;';
		}
		
	}
	
	
	/**
	 * 获取“新浪微博登录”按钮
	 */
	function _get_sinalogin_button(){
		//用新浪微博连接
		return '<a href="xwb.php?m=xwbAuth.login"><img src="'. $this->xwb_p_rootname. '/images/bgimg/sina_login_btn.gif" onerror="this.onerror=null;this.src=\'static/image/common/none.gif\'" /></a>';
	}
	
	/**
	 * 获取新浪官方的转发链接
	 * @param string $msg 转发信息，默认为空，表示由新浪转发服务器根据网页内容决定
	 * @param string $pic 转发图片，默认为空，表示由新浪转发服务器根据网页内容决定
	 */
	function _get_sina_share_link( $msg = '', $pic= '' ){
		$msg = (addslashes((string)$msg));
		$pic = (addslashes($pic));
		return "javascript:void((function(s,d,e,r,l,p,t,z,c) {var%20f='http://v.t.sina.com.cn/share/share.php?appkey=". XWB_APP_KEY. "',u=z||d.location,p=['&url=',e(u),'& title=',e(t||d.title),'&source=',e(r),'&sourceUrl=',e(l),'& content=',c||'gb2312','&pic=',e(p||'')].join('');function%20a() {if(!window.open([f,p].join(''),'mb', ['toolbar=0,status=0,resizable=1,width=440,height=430,left=',(s.width- 440)/2,',top=',(s.height-430)/2].join('')))u.href=[f,p].join('');}; if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else%20a();}) (screen,document,encodeURIComponent,'','','{$pic}','{$msg}','',''));";
	}
	
	/**
	 * 获取插件一个或者多个设置
	 * 用于在插件框架没有启动时，读取相应的设置值
	 * @param mixed $key
	 */
	function pCfg( $key = null ){
		//插件已经初始化过，就使用插件的方法获取设置值
		if(defined('IS_IN_XWB_PLUGIN')){
			return XWB_plugin::pCfg($key);
		}
		
		//否则就自己读取插件的设置
		if( false == $this->_configImported ){
			$configFile = DISCUZ_ROOT.'./'. $this->xwb_p_rootname .'/set.data.php';
			if( file_exists($configFile) ){
				require $configFile;
				$this->_config = (array)$__XWB_SET;
			}
			$this->_configImported = true;
		}
		if( null !== $key ){
			return isset($this->_config[$key]) ? $this->_config[$key] : null;
		}else{
			return $this->_config;
		}
	}
	
}






/**
 * 发帖和回帖的截获钩子类
 * @author yaoying
 *
 */
class plugin_sina_xweibo_forum extends plugin_sina_xweibo{

    var $viewthread_sidetop_return; // 勋章HTML
    var $viewthread_imicons_return; // 状态页图标HTML
    var $viewthread_subject = '';
    var $_parsed_postlist = false;

    /**
     * 初始化
     *
     */
    function plugin_sina_xweibo_forum()
    {
        $this->viewthread_sidetop_return = array();
        $this->viewthread_imicons_return = array();
    }

	/**
	 * 发帖回帖截获钩子：（前奏）临时改变设置，不允许快速跳转
	 * 在class_core.php后运行
	 */
	function post_sync_to_weibo_aftersubmit(){
		if( $this->_checkIsForumPost() < 1 ){
			return null;
		}
		$this->disableQuickForward();
	}
	
	
	/**
	 * 发帖回帖截获钩子：（正式）截获pid和tid，用于同步帖子内容到新浪微博
	 * 在showmessage模板运行前运行
	 */
	function post_sync_to_weibo_aftersubmit_output(){
		global $_G;
		$checkResult = $this->_checkIsForumPost();
		if( $checkResult < 1 ){
			return null;
		}
		
		//假如是发主题贴
		if( 1 === $checkResult ){
			require XWB_plugin::hackFile('newthread');
			return null;
			
		//假如是发回复
		}elseif( 2 === $checkResult ){
			require XWB_plugin::hackFile('newreply');
			return null;
		}
		
		//上述都不是，则什么都没有发生
		return null;
		
	}
	
	/**
	 * 发帖回帖截获钩子检查：是否在进行帖子发表操作？是否可以启动插件？用户是否在绑定？
	 * @return integer 检查结果。0：没有进行任何操作或者检查不通过；1：发主题；2：发回复
	 */
	function _checkIsForumPost(){
		global $_G;
		static $result = -999;
		if( $result >= 0 ){
			return $result;
		}
		
		if( !$_G['uid'] || 'POST' != $this->getRequestMethod() || true != $this->_start_xweibo(true) || !XWB_plugin::isUserBinded() ){
			$result = 0;
		}elseif( $_G['gp_action'] == 'newthread' && (submitcheck('topicsubmit', 0, $GLOBALS['seccodecheck'], $GLOBALS['secqaacheck']) ) && XWB_plugin::pCfg('is_synctopic_toweibo') ){
			$result = 1;
		}elseif(  $_G['gp_action'] == 'reply' && (submitcheck('replysubmit', 0, $GLOBALS['seccodecheck'], $GLOBALS['secqaacheck']) ) && XWB_plugin::pCfg('is_syncreply_toweibo') ){
			$result = 2;
		}else{
			$result = 0;
		}
		return $result;
		
	}
	
	/**
	 * 发主题帖界面显示复选框“同步到微博”
	 * @return string
	 */
	function post_middle_output(){
		global $_G;
		$return = '';
		
		if(  !$_G['uid'] || $_G['gp_action'] !== 'newthread' || 'GET' != $this->getRequestMethod() || false == $this->_start_xweibo(true) || !XWB_plugin::pCfg('is_synctopic_toweibo') ){
			return $return;
		}
		
		$lang['xwb_sycn_to_sina'] = XWB_plugin::L('xwb_sycn_to_sina');
		$lang['xwb_sycn_open'] = XWB_plugin::L('xwb_sycn_open');
		
		$p = XWB_plugin::O('xwbUserProfile');
		$html_checked = (int)($p->get('topic2weibo_checked',1));
		
		include template('sina_xweibo:post_newthread');
		return $return;
	}
	
	
	/**
	 * 分享到按钮位置
	 * @return string
	 */
	function viewthread_useraction_output(){
		
		global $_G;
		$return = '';
		if( false == $this->_start_xweibo(true) || !XWB_plugin::pCfg('is_rebutton_display') ){
			return $return;
		}
		
		$this->_parse_postlist_in_viewthread();
		if( XWB_S_UID < 1 || !XWB_plugin::isUserBinded() ){
			//没有绑定状态下，调用sina自己的转发按钮
			$link = $this->_get_sina_share_link( $this->viewthread_subject );
		}else{
			$tid = isset($_G['gp_tid']) ? (int)$_G['gp_tid'] : 0; 
			$link = XWB_plugin::baseUrl(). XWB_plugin::URL('xwbSiteInterface.share', array('tid' => $tid) );
			$link = "javascript:void( window.open('". urlencode($link). "', '', 'toolbar=0,status=0,resizable=1,width=680,height=500') );";
		}
		include template('sina_xweibo:share_button_viewthread');
		
		return $return;
}
	
	
	/**
	 * 勋章显示和资料页
	 * @return array $return
	 */
	function viewthread_sidetop_output()
    {
		if ( false == $this->_start_xweibo(true) ){
			return array();
		}

        $this->_parse_postlist_in_viewthread();
        return $this->viewthread_sidetop_return;
	}

    /**
     * 状态页图标
     * @return array $return
     */
    function viewthread_imicons_output()
    {
        if ( false == $this->_start_xweibo(true) ){
        	return array();
        }
        
		$this->_parse_postlist_in_viewthread();
        return $this->viewthread_imicons_return;
    }

    /**
     * 解析$GLOBALS['postlist']
     * 
     */
    function _parse_postlist_in_viewthread()
    {
    	global $_G;
        if ( empty($GLOBALS['postlist']) || !is_array($GLOBALS['postlist']) || true === $this->_parsed_postlist )
        {
            return $this->_parsed_postlist;
        }
        
        require XWB_plugin::hackFile('viewthread');
        
        foreach ($GLOBALS['postlist'] as $pid => $onePost)
        {
            $this->viewthread_sidetop_return[] = $this->_html_sidetop($onePost, $sina_uid);
            $this->viewthread_imicons_return[] = $this->_html_imicons($onePost, $sina_uid);
        }
        
        if ( ! empty($_G['gp_viewpid']))
        {
            global $post;
            $post['signature'] = isset($post['signature']) ? XWB_plugin::F('xwb_format_signature', $post['signature']) : '';
        }
        
        $this->_parsed_postlist = true;
        return true;
        
    }

    /**
     * 返回勋章HTML字符串
     * @return string $str
     */
    function _html_sidetop($post, $sina_uid)
    {
    	
    	global $_G;
    	
    	if( !XWB_plugin::pCfg('is_tips_display') ){
    		return '';
    	}
    	
        if (isset($sina_uid[$post['authorid']]))
        {
            return '<a href="http://t.sina.com.cn/' . $sina_uid[$post['authorid']] . '" target="_blank" class="xwb-plugin-medal-sinawb"><img onmouseout="XWBcontrol.TipPanel.setHideTimer();" onmouseover="XWBcontrol.TipPanel.showLayer(this, \'' . $sina_uid[$post['authorid']] . '\');" src="' . XWB_plugin::getPluginUrl('images/bgimg/icon_on.gif') . '" /></a>';
        }
        else
        {
        	if( $_G['uid'] > 0 && $post['authorid'] == $_G['uid'] ){
        		return '<a href="home.php?mod=spacecp&ac=plugin&id=sina_xweibo:home_binding" ><img src="' . XWB_plugin::getPluginUrl('images/bgimg/icon_off.gif') . '" class="xwb-plugin-medal-sinawb"  title="' . XWB_plugin::L('xwb_bind_my_sina_mblog') . '" /></a>';
        	}else{
        		return '<img src="' . XWB_plugin::getPluginUrl('images/bgimg/icon_off.gif') . '" class="xwb-plugin-medal-sinawb"  title="' . XWB_plugin::L('xwb_off_bind_sinamblog') . '" />';
        	}
        }
    }

    /**
     * 返回状态页图标HTML字符串
     * @return string $str
     */
    function _html_imicons($post, $sina_uid)
    {
        global $_G;
        
        if (isset($sina_uid[$post['authorid']]))
        {
            return '<a href="http://t.sina.com.cn/' . $sina_uid[$post['authorid']] . '" target="_blank"><img src="' . XWB_plugin::getPluginUrl('images/bgimg/icon_on.gif') . '" title="' . XWB_plugin::L('xwb_his_sina_mblog',  $post['author']) . '" /></a>';
        }
        else
        {
            if( $_G['uid'] > 0 && $post['authorid'] == $_G['uid'] ){
        		return '<a href="home.php?mod=spacecp&ac=plugin&id=sina_xweibo:home_binding" ><img src="' . XWB_plugin::getPluginUrl('images/bgimg/icon_off.gif') . '"  title="' . XWB_plugin::L('xwb_bind_my_sina_mblog') . '" /></a>';
        	}else{
        		return '<img src="' . XWB_plugin::getPluginUrl('images/bgimg/icon_off.gif') . '" title="' . XWB_plugin::L('xwb_off_bind_sinamblog') . '" />';
        	}
        }
    }
}


/**
 * 
 * ‘群组’钩子
 *
 */
class plugin_sina_xweibo_group extends plugin_sina_xweibo_forum{
	
}



/**
 * “家园"钩子
 *
 */
class plugin_sina_xweibo_home extends plugin_sina_xweibo{
	
	/**
	 * 新浪微博签名工具
	 */
	function spacecp_profile_bottom_output(){
		
		global $_G;
		
		$return = '';
		
		//不允许签名中带img(暂时忽略该设置)，不开启签名或者开启过短，均将不允许使用新浪签名
		if ( !$_G['uid'] || 'bbs'!= $GLOBALS['_G']['gp_op'] || /* !$_G['group']['allowsigimgcode'] || */ $_G['group']['maxsigsize'] < 30 ){
			return $return;
		}
		
		if( 'GET' != $this->getRequestMethod() || false == $this->_start_xweibo(true) || !XWB_plugin::pCfg('is_signature_display') ){
			return $return;
		}

        $return = <<< EOT
        <script type="text/javascript">
            var node = document.getElementById("signhtmlpreview");
            var insertedNode = document.createElement("div");
            insertedNode.className = 'sina-sign-btn';
            insertedNode.onclick = function(){XWBcontrol.openSigner();};
            node.parentNode.insertBefore(insertedNode, node.nextSibling);
        </script>
EOT;
		return $return;
		
	}
	
	/**
	 * 日志发表截获钩子：（前奏）临时改变设置，不允许快速跳转
	 * 在class_core.php后运行
	 */
	function spacecp_blog_sync_to_weibo_aftersubmit(){
		global $_G;
		if( 0 == $this->_checkIsBlogPost() ){
			return null;
		}
		$this->disableQuickForward();
	}
	
	/**
	 * 日志发表截获钩子：日志同步到微博
	 */
	function spacecp_blog_sync_to_weibo_aftersubmit_output(){
		global $_G;
		switch ($this->_checkIsBlogPost()){
			case 1:
				require XWB_plugin::hackFile('newblog');
				break;
			case 2:
				require XWB_plugin::hackFile('newcomment2blog');
				break;
			default:
				break;
		}
		
		
	}
	
	/**
	 * 日志发表截获钩子检查：是否是在进行日志发表操作、是否可以启动插件、用户是否在绑定状态？
	 * @return integer 检查结果：0：不通过；1：发表日志操作；2：评论日志操作
	 */
	function _checkIsBlogPost(){
		global $_G;
		static $result = -999;
		if( $result >= 0 ){
			return $result;
		}
		
		if( !in_array($_G['gp_ac'], array('blog', 'comment')) || !$_G['uid'] || 'POST' != $this->getRequestMethod() || false == $this->_start_xweibo(true) || !XWB_plugin::isUserBinded() ){
			$result = 0;
		}elseif(submitcheck('blogsubmit', 0, $GLOBALS['seccodecheck'], $$GLOBALS['secqaacheck']) && XWB_plugin::pCfg('is_syncblog_toweibo')) {
			$result = 1;
		}elseif( isset($_G['gp_idtype']) && $_G['gp_idtype'] == 'blogid' && submitcheck('commentsubmit', 0, $GLOBALS['seccodecheck'], $$GLOBALS['secqaacheck']) && XWB_plugin::pCfg('is_syncreply_toweibo')){
			$result = 2;
		}else{
			$result = 0;
		}
		
		return $result;
	}
	
	/**
	 * 日志发表同步按钮
	 */
	function spacecp_middle_output(){
		global $_G;
		$return = '';
		
		if( 'blog' != $_G['gp_ac'] || !$_G['uid'] || 'GET' != $this->getRequestMethod() || false == $this->_start_xweibo(true) || !XWB_plugin::pCfg('is_syncblog_toweibo') ){
			return $return;
		}

		$lang['xwb_sycn_to_sina'] = XWB_plugin::L('xwb_sycn_to_sina');
		$lang['xwb_sycn_open'] = XWB_plugin::L('xwb_sycn_open');
		
		$p = XWB_plugin::O('xwbUserProfile');
		$html_checked = (int)($p->get('blog2weibo_checked',1));
		
		include template('sina_xweibo:spacecp_newblog');
		return $return;
		
	}
	
	/**
	 * 记录发表截获（前奏）：不允许快速跳转
	 */
	function spacecp_home_doing_aftersubmit(){
		global $_G;
		if( 0 == $this->_checkIsDoingPost() ){
			return null;
		}
		$_G['gp_spacenote'] = 1;
		$_G['gp_quickforward'] = 0;
		$_G['setting']['msgforward']['quick'] = 0;
	}
	
	/**
	 * 记录发表截获：同步记录到微博
	 */
	function spacecp_home_doing_aftersubmit_output(){
		global $_G;
		switch ($this->_checkIsDoingPost()){
			case 1:
				require XWB_plugin::hackFile('newdoing');
				break;
			case 2:
				require XWB_plugin::hackFile('newcomment2doing');
				break;
			default:
				break;
		}
	}
	
	/**
	 * 记录发表截获钩子检查：是否是在进行记录发表操作、是否可以启动插件、用户是否在绑定状态
	 * @return integer 检查结果。0：检查失败；1：发表记录；2：对记录进行评论
	 */
	function _checkIsDoingPost(){
		global $_G;
		static $result = -999;
		if( $result >= 0 ){
			return $result;
		}
		
		if( !$_G['uid'] || 'POST' != $this->getRequestMethod() 
			|| 'doing' != $_G['gp_ac'] || false == $this->_start_xweibo(true) || !XWB_plugin::isUserBinded() ){
			$result = 0;
		}elseif( submitcheck('addsubmit') && XWB_plugin::pCfg('is_syncdoing_toweibo') ){
			$result = 1;
		}elseif( submitcheck('commentsubmit') && XWB_plugin::pCfg('is_syncreply_toweibo') ){
			$result = 2;
		}else{
			$result = 0;
		}
		return $result;
	}
	
	/**
	 * 分享发表截获（前奏）：不允许快速跳转
	 */
	function spacecp_home_share_aftersubmit(){
		if( $this->_checkIsSharePost() < 1 ){
			return null;
		}
		$this->disableQuickForward();
	}
	
	/**
	 * 分享发表截获：同步分享到微博
	 */
	function spacecp_home_share_aftersubmit_output(){
		switch ($this->_checkIsSharePost()){
			case 1:
				require XWB_plugin::hackFile('newshare');
				break;
			case 2:
				require XWB_plugin::hackFile('newcomment2share');
				break;
			default:
				break;
		}
		
	}
	
	/**
	 * 分享发表截获钩子检查：是否是在进行分享发表操作、是否可以启动插件、用户是否在绑定状态
	 * @return integer 检查结果。0：检查失败；1：发表分享；2：对分享评论
	 */
	function _checkIsSharePost(){
		global $_G;
		static $result = -999;
		if( $result >= 0 ){
			return $result;
		}
		
		if( !$_G['uid'] || 'POST' != $this->getRequestMethod() 
			|| !in_array($_G['gp_ac'], array('share', 'comment')) || false == $this->_start_xweibo(true) || !XWB_plugin::isUserBinded() ){
			$result = 0;
		}elseif( submitcheck('sharesubmit') && XWB_plugin::pCfg('is_syncshare_toweibo') ){
			$result = 1;
		}elseif( isset($_G['gp_idtype']) && $_G['gp_idtype'] == 'sid' && submitcheck('commentsubmit', 0, $GLOBALS['seccodecheck'], $$GLOBALS['secqaacheck']) && XWB_plugin::pCfg('is_syncreply_toweibo')){
			$result = 2;
		}else{
			$result = 0;
		}
		return $result;
	}
	
}




/**
 * “个人资料页"钩子
 *
 */
class plugin_sina_xweibo_home_profile extends plugin_sina_xweibo{
	
	/**
	 * 显示“是否已经绑定到新浪微博”
	 * @return string
	 */
	function space_profile_baseinfo_top_output(){
		global $_G;
		
		$return = '';
		
		if( empty($GLOBALS['space']) || true != $this->_start_xweibo(true) ){
			return $return;
		}
		
		$uid = isset($_G['gp_uid']) ? (int)$_G['gp_uid'] : 0;
		if( $uid < 1 ){
			return $return;
		}
		
		require XWB_plugin::hackFile('space');
		
		$setting['is_wbx_display'] = XWB_plugin::pCfg("is_wbx_display");
		$PluginUrl['icon_on'] = XWB_plugin::getPluginUrl('images/bgimg/icon_on.gif');
		$PluginUrl['icon_off'] = XWB_plugin::getPluginUrl('images/bgimg/icon_off.gif');
		
		$lang['xwb_off_bind_sinamblog'] = XWB_plugin::L('xwb_off_bind_sinamblog');
		$lang['xwb_have_bind_sinamblog'] = XWB_plugin::L('xwb_his_sina_mblog', $GLOBALS['space']['username']);
        $lang['xwb_bind_my_sina_mblog'] = XWB_plugin::L('xwb_bind_my_sina_mblog');
		
		include template('sina_xweibo:home_space_profile');
		
		return $return;
	}
	
}



/**
 * “member"钩子
 *
 */
class plugin_sina_xweibo_member extends plugin_sina_xweibo{
	
	/**
	 * 注册钩子
	 * @return string
	 */
	function register_side_output(){
		global $_G;
		//已有新浪微博账号，可直接登录
		if ( !$_G['uid'] ) {
			return '<div>'. $this->_get_sinalogin_button(). '<div style="color:gray;padding-top:5px;">&#19968;&#27493;&#25630;&#23450;</div></div>';
		}else{
			return '';
		}
	}
	
	
	/**
	 * 登录钩子
	 * @return string
	 */
	function logging_side_output(){
		global $_G;
		//已有新浪微博账号，可直接登录
		if ( !$_G['uid'] ) {
			return '<div style="padding-top:5px;">'. $this->_get_sinalogin_button(). '<div style="color:gray;padding-top:5px;">&#19968;&#27493;&#25630;&#23450;</div></div>';
		}else{
			return '';
		}
	}
	
	
}


/**
 * 门户钩子
 *
 */
class plugin_sina_xweibo_portal extends plugin_sina_xweibo{
	
	/**
	 * 发表文章页面钩子：同步按钮显示
	 */
	function portalcp_bottom_output(){
		global $_G;
		$return = '';
		
		if( 'article' != $_G['gp_ac'] || !$_G['uid'] || 'GET' != $this->getRequestMethod() || false == $this->_start_xweibo(true) || !XWB_plugin::pCfg('is_syncarticle_toweibo') ){
			return $return;
		}

		$lang['xwb_sycn_to_sina'] = XWB_plugin::L('xwb_sycn_to_sina');
		$lang['xwb_sycn_open'] = XWB_plugin::L('xwb_sycn_open');
		
		$p = XWB_plugin::O('xwbUserProfile');
		$html_checked = (int)($p->get('article2weibo_checked',1));
		
		include template('sina_xweibo:portalcp_newarticle');
		return $return;
	}
	
	/**
	 * 发表文章截获钩子（前奏）：不允许快速跳转
	 */
	function portalcp_article_sync_to_weibo_aftersubmit(){
		if( $this->_checkIsArticlePost() < 1 ){
			return null;
		}
		$this->disableQuickForward();
		
	}
	
	/**
	 * 发表文章截获钩子：同步到微博
	 */
	function portalcp_article_sync_to_weibo_aftersubmit_output(){
		global $_G;
		switch ($this->_checkIsArticlePost()){
			case 1:
				require XWB_plugin::hackFile('newarticle');
				break;
			default:
				break;
		}
	}
	
	/**
	 * 门户文章发表截获钩子检查：是否是在进行文章发表操作、是否可以启动插件、用户是否在绑定状态
	 * @return integer 检查结果。0：检查失败；1：发表文章
	 */
	function _checkIsArticlePost(){
		global $_G;
		static $result = -999;
		if( $result >= 0 ){
			return $result;
		}
		
		if( !in_array($_G['gp_ac'], array('article')) || !$_G['uid'] || 'POST' != $this->getRequestMethod() || false == $this->_start_xweibo(true) || !XWB_plugin::isUserBinded() ){
			$result = 0;
		}elseif(submitcheck('articlesubmit', 0, $GLOBALS['seccodecheck'], $$GLOBALS['secqaacheck']) && XWB_plugin::pCfg('is_syncarticle_toweibo') ){
			$result = 1;
		}else{
			$result = 0;
		}
		
		return $result;
	}
	
	
}

/**
 * 日志页面
 *
 */
class plugin_sina_xweibo_home_blog extends plugin_sina_xweibo{
	/**
	 * 在日志显示页面显示转发按钮
	 */
	function space_blog_op_extra_output(){
		global $blog;
		$return = '';
		if( !$this->pCfg('is_rebutton_display') || false == $this->_start_xweibo(true) ){
			return $return;
		}else{
			$subject = isset($blog['subject']) ? $blog['subject'] : '';
			$link = $this->_get_sina_share_link($subject);
			include template('sina_xweibo:share_button_blog');
			return $return;
		}
	}
	
}


/**
 * 相册页面
 *
 */
class plugin_sina_xweibo_home_album extends plugin_sina_xweibo{
	/**
	 * 通用的转发按钮代码
	 * @param string $type 类型，可选值'album'，'albumpic' 
	 */
	function _get_share_button_album( $type = 'album' ){
		global $album;
		$return = '';
		
		if( !$this->pCfg('is_rebutton_display') || false == $this->_start_xweibo(true) ){
			return $return;
		}else{
			$albumname = isset($album['albumname']) ? (string)$album['albumname'] : '';
			$albumUsername = isset($album['username']) ? (string)$album['username'] : '';
			$link = $this->_get_sina_share_link( $albumUsername. ' - '. $albumname, $this->_pic_get_url($type) );
			include template('sina_xweibo:share_button_blog');
			return $return;
		}
	}

	
	/**
	 * 在相册专辑显示页面显示转发按钮
	 */
	function space_album_op_extra_output(){
		return $this->_get_share_button_album('album');
	}
	
	
	/**
	 * 在图片显示页面显示转发按钮
	 */
	function space_albumpic_op_extra_output(){
		return $this->_get_share_button_album('albumpic');
	}
	
	/**
	 * 获取图片地址
	 * @param string $type 类型，可选值'album'，'albumpic' 
	 */
	function _pic_get_url( $type = 'album' ){
		global $album, $pic, $_G;
		$pic_url = '';
		if( $type == 'album' ){
			require_once libfile('function/home');
			$pic_url = isset($album['pic']) & isset($album['picflag']) ? pic_cover_get($album['pic'], $album['picflag']) : '';
		}elseif( $type == 'albumpic' ){
			$pic_url = isset($pic['pic']) ? (string)$pic['pic'] : '';
		}
		return ( 0 === strpos($pic_url, 'http') || 0 === strpos($pic_url, 'ftp') ) ? $pic_url : ($_G['siteurl']. $pic_url);
	}
	
	
}

/**
 * 家园－分享页面
 *
 */
class plugin_sina_xweibo_home_share extends plugin_sina_xweibo{
	
	function space_share_bottom_output(){
		global $_G;
		$return = '';
		if( !$_G['uid'] || isset($_G['cookie']['disable_bindtip_share']) || false == $this->_start_xweibo(true) ){
			return $return;
		}
		
		if( XWB_plugin::isUserBinded() ){
			$p = XWB_plugin::O('xwbUserProfile');
			$share2weibo = (int)($p->get('share2weibo',0));
		}else{
			$share2weibo = -1;
		}
		
		$lang['xwb_want_to_share2weibo'] = XWB_plugin::L('xwb_want_to_share2weibo');
		$lang['xwb_allow_share2weibo'] = XWB_plugin::L('xwb_allow_share2weibo');
		include template('sina_xweibo:home_share_bindtip');
		return $return;
	}
	
}

/**
 * 家园－记录页面
 *
 */
class plugin_sina_xweibo_home_doing extends plugin_sina_xweibo{

	function space_doing_bottom_output(){
		global $_G;
		$return = '';
		if( !$_G['uid'] || isset($_G['cookie']['disable_bindtip_do']) || false == $this->_start_xweibo(true) ){
			return $return;
		}
		
		if( XWB_plugin::isUserBinded() ){
			$p = XWB_plugin::O('xwbUserProfile');
			$doing2weibo = (int)($p->get('doing2weibo',0));
		}else{
			$doing2weibo = -1;
		}

		$lang['xwb_want_to_doing2weibo'] = XWB_plugin::L('xwb_want_to_doing2weibo');
		$lang['xwb_allow_doing2weibo'] = XWB_plugin::L('xwb_allow_doing2weibo');
		include template('sina_xweibo:home_doing_bindtip_doing');
		return $return;
	}
	
}


/**
 * 家园－主页页面（记录）
 *
 */
class plugin_sina_xweibo_home_home extends plugin_sina_xweibo{

	function space_home_top_output(){
		global $_G;
		$return = '';
		if( !$_G['uid'] || isset($_G['cookie']['disable_bindtip_do']) || false == $this->_start_xweibo(true) ){
			return $return;
		}
		
		if( XWB_plugin::isUserBinded() ){
			$p = XWB_plugin::O('xwbUserProfile');
			$doing2weibo = (int)($p->get('doing2weibo',0));
		}else{
			$doing2weibo = -1;
		}
		
		$lang['xwb_want_to_doing2weibo'] = XWB_plugin::L('xwb_want_to_doing2weibo');
		$lang['xwb_allow_doing2weibo'] = XWB_plugin::L('xwb_allow_doing2weibo');
		include template('sina_xweibo:home_doing_bindtip_home');
		return $return;
	}
	
}