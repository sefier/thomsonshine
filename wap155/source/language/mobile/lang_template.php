<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_template.php 18458 2010-11-24 03:05:38Z congyushuai $
 */
 //(IN_MOBILE)
$lang = array(
	'waptitle' => 'WAP版',
	'nomobiletype' => '电脑版',
	'no_simplemobiletype' => '标准版',
	'simplemobiletype' => '精简版',
	'reset' => '重填',
	'goback' => '返回上一页',
	'continue' => '继续访问',
	'nextpage' => '下一页',
	'prevpage' => '上一页',

	//noteX 全手机页面通用
	'my_posts' => '我的帖子',

	//noteX forum && viewthread
	'forum_threads' => '帖',
	'forum_posts' => '回',
	'forum_views' => '看',
	'threadtype' => '主题分类',
	'threadsort' => '主题信息',
	'viewnewthread' => '新帖排序',
	'send_threads' => '发帖',
	'post_newthreadpoll' => '发投票',
	'post_newthreadreward' => '发悬赏',
	'post_newthreaddebate' => '发辩论',
	'send_posts' => '回复',
	'other' => '其他',
	'send_pm' => '发消息',
	'new_pm' => '新短消息',
	'digest' => '<span class="xi1">精华</span>',
	'attachlist' => '附件列表',
	'attach_nopermission_login' => '您需要<a href="member.php?mod=logging&action=login">登录</a>才可以下载或查看附件。没有帐号？<a href="member.php?mod={$_G[setting][regname]}" title="注册帐号">{$_G[setting][reglinkname]}</a>',
	'viewimg' => '站外图片点击加载',
	'poll_msg_allwvote_user' => '您需要<a href="member.php?mod=logging&action=login">登录</a>之后方能进行投票',
	'activity_mod' => '请你使用非手机版管理活动',
	'trade_mod' => '请你使用非手机版管理商品',
	'thread_lock' => '锁定',
	'thread_digest' => '精',
	'thread_recommend' => '荐',
	'thread_sticky' => '顶',
	'thread_show_author' => '只看他',
	'thread_show_all' => '看全部',
	'online' => '在线',
	'viewimg' => '打开图片',

	//noteX newthread & newpost
	'join_thread' => '回复',
	'required' => '必填',
	'required_select' => '必选',
	'threadsort_calendar' => '日期格式：2010-12-01',
	'post_poll_options' => '投票选项',
	'unresolved' => '未解决',
	'resolved' => '已解决',
	'send_special_trade_error' => '手机版不支持<strong>商品</strong>发布，请点击上方发帖选择其他方式',
	'send_special_activity_error' => '手机版不支持<strong>活动</strong>发布，请点击上方发帖选择其他方式',

	//noteX 管理主题
	'admin_delthread_confirm' => '您确认要删除？',
	'admin_delpost_confirm' => '您确定要删除此回复？',
	'admin_banpost_confirm' => '您要进行屏蔽操作',
	'admin_warn_confirm' => '您要进行警告操作',
	'admin_close_expire_comment' => '<span class="xg1">选填日期格式：2010-12-01 10:50</span>',
	'admin_threadtopicadmin_error' => '手机版不支持复杂管理操作',
	'topicadmin_mobile_mod' => '手机版主题操作',

	//noteX 论坛管理面板
	'mod_message_goto_admincp' => '需要您使用电脑浏览器进入后台进行高级功能操作',
	'expiry' => '期限<span class="xg2">(0为永久/1为1天)</span>',
	'result' => '查找结果',
	'ban_member' => '禁止',

	//noteX home
	'return_forum' => '返回论坛',
	'reg_username' => '用户名必须为大于3位小于15位',
	'user_mobile_pm_error' => '手机版不支持复杂短消息操作，请返回<a href="home.php?mod=space&do=pm&filter=privatepm">我的短消息</a>',
	'user_mobile_pm_comment' => '短消息发出后将跳回上一页',
	'favorite_description_default' => '手机收藏',
	'favorite_forum_confirm' => '收藏此版块: ',
	'favorite_thread_confirm' => '收藏此主题: ',
	'my_favorites_forums' => '我收藏的版块',
	'my_favorites_thread' => '我收藏的帖子',
	'title_memcp_favorite' => '收藏',
	'favorite' => '收藏',
	'favorite_delete' => '删除收藏',
	
	//noteX group
	'group' => '群',

	//noteX showmessage
	'message_forward_mobile' => '如果没有自动跳转，请点击此链接',
);
?>
