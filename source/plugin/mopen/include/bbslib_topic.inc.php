<?php
//TODO: fid,page,tpp
//ouput: 
//		$sublist
//		$threadlist
//		$page
//		$totalpage

defined('IN_MOPEN') or exit;
define('CURSCRIPT', 'forumdisplay');
//define('BINDDOMAIN', 'forumdisplay');

loadforum();

require_once libfile('function/forumlist');
//require_once FROOT.'include/common.inc.php';
//require_once DISCUZ_ROOT.'./include/forum.func.php';

$mopen_log['context'][__LINE__] = '$request_cmd=>'.$request_cmd;
$mopen_log['context'][__LINE__] = '$page=>'.$_G['page'];
$mopen_log['context'][__LINE__] = '$uid=>'.$_G['uid'];
$mopen_log['context'][__LINE__] = '$fid=>'.$_G['fid'];
$mopen_log['context'][__LINE__] = '$tid=>'.$_G['tid'];

if(empty($_G['forum']['fid'])) {
    mo_get_error('forum_nonexistence');
}elseif ($_G['forum']['redirect']) {
	mo_get_error('no_support');
}

$fid = $_G['action']['fid'] = $_G['fid'];
$_G['gp_dateline'] = isset($_G['gp_dateline']) ? intval($_G['gp_dateline']) : 0;
$_G['gp_digest'] = isset($_G['gp_digest']) ? 1 : '';
$_G['gp_archiveid'] = isset($_G['gp_archiveid']) ? intval($_G['gp_archiveid']) : 0;

$_G['forum']['name'] = strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];

//output navtitle
if($_G['forum']['type'] == 'forum') {
	/*if(empty($_G['gp_archiveid'])) {
		$navigation = '<em>&rsaquo;</em> <a href="forum.php">'.$_G['setting']['navs'][2]['navname'].'</a> <em>&rsaquo;</em> <a href="forum.php?mod=forumdisplay&fid='.$_G['forum']['fid'].'">'.$_G['forum']['name'].'</a>';
	} else {
		$navigation = '<em>&rsaquo;</em> <a href="forum.php">'.$_G['setting']['navs'][2]['navname'].'</a> <em>&rsaquo;</em> '.'<a href="forum.php?mod=forumdisplay&fid='.$_G['fid'].'">'.$_G['forum']['name'].'</a> <em>&rsaquo;</em> '.$forumarchive[$_G['gp_archiveid']]['displayname'];
	}*/
	$navtitle = $_G['forum']['name'];
} else {
	$forumup = $_G['forum']['status'] == 3 ? '' : $_G['cache']['forums'][$_G['forum']['fup']]['name'];
	/*if(empty($_G['gp_archiveid'])) {
		$navigation = '<em>&rsaquo;</em> <a href="forum.php">'.$_G['setting']['navs'][2]['navname'].'</a> <em>&rsaquo;</em> <a href="forum.php?mod=forumdisplay&fid='.$_G['forum']['fup'].'">'.$forumup.'</a> <em>&rsaquo;</em> '.$_G['forum']['name'];
	} else {
		$navigation = '<em>&rsaquo;</em> <a href="forum.php">'.$_G['setting']['navs'][2]['navname'].'</a> <em>&rsaquo;</em> <a href="forum.php?mod=forumdisplay&fid='.$_G['forum']['fup'].'">'.$forumup.'</a> <em>&rsaquo;</em> '.'<a href="forum.php?mod=forumdisplay&fid='.$_G['fid'].'">'.$_G['forum']['name'].'</a> <em>&rsaquo;</em> '.$forumarchive[$_G['gp_archiveid']]['displayname'];
	}*/
	$navtitle = $_G['forum']['name'].' - '.strip_tags($forumup);
}

if($_G['forum']['viewperm'] && !forumperm($_G['forum']['viewperm']) && !$_G['forum']['allowview']) {
    mo_get_error('viewperm_none_nopermission');
} elseif($_G['forum']['formulaperm']) {
    mo_formulaperm($_G['forum']['formulaperm']);
}

if($_G['forum']['password']) {
    if($_G['gp_action'] == 'pwverify') {
        if($_G['gp_pw'] != $_G['forum']['password']) {
            mo_get_error('forum_passwd_incorrect');
        } else {
            dsetcookie('fidpw'.$_G['fid'], $_G['gp_pw']);
        }
    } elseif($_G['forum']['password'] != $_G['cookie']['fidpw'.$_G['fid']]) {
        mo_get_error('forum_passwd');
    }
}

$threadtableids = !empty($_G['cache']['threadtableids']) ? $_G['cache']['threadtableids'] : array();
$threadtable = $_G['gp_archiveid'] && in_array($_G['gp_archiveid'], $threadtableids) ? "forum_thread_{$_G['gp_archiveid']}" : 'forum_thread';

if($_G['forum']['autoclose']) {
    $closedby = $_G['forum']['autoclose'] > 0 ? 'dateline' : 'lastpost';
    $_G['forum']['autoclose'] = abs($_G['forum']['autoclose']) * 86400;
}


foreach($_G['cache']['forums'] as $sub) {
	if($sub['type'] == 'sub' && $sub['fup'] == $_G['fid'] && (!$_G['setting']['hideprivate'] || !$sub['viewperm'] || forumperm($sub['viewperm']) || strstr($sub['users'], "\t$_G[uid]\t"))) {
		if(!$sub['status']) {
			continue;
		}
		$subexists = 1;
		$sublist = array();
		$sql = !empty($_G['member']['accessmasks']) ? "SELECT f.fid, f.fup, f.type, f.name, f.threads, f.posts, f.todayposts, f.lastpost, f.domain, ff.description, ff.moderators, ff.icon, ff.viewperm, ff.extra, ff.redirect, a.allowview FROM ".DB::table('forum_forum')." f
						LEFT JOIN ".DB::table('forum_forumfield')." ff ON ff.fid=f.fid
						LEFT JOIN ".DB::table('forum_access')." a ON a.uid='$_G[uid]' AND a.fid=f.fid
						WHERE fup='$_G[fid]' AND status>'0' AND type='sub' ORDER BY f.displayorder"
					: "SELECT f.fid, f.fup, f.type, f.name, f.threads, f.posts, f.todayposts, f.lastpost, f.domain, ff.description, ff.moderators, ff.icon, ff.viewperm, ff.extra, ff.redirect FROM ".DB::table('forum_forum')." f
						LEFT JOIN ".DB::table('forum_forumfield')." ff USING(fid)
						WHERE f.fup='$_G[fid]' AND f.status>'0' AND f.type='sub' ORDER BY f.displayorder";
		$query = DB::query($sql);
		while($sub = DB::fetch($query)) {
			$sub['extra'] = unserialize($sub['extra']);
			if(!is_array($sub['extra'])) {
				$sub['extra'] = array();
			}
			if(forum($sub)) {
				$sub['orderid'] = count($sublist);
				$sublist[] = $sub;
			}
		}
		break;
	}
}

$page = $_G['page'];
$page = $_G['setting']['threadmaxpages'] && $page > $_G['setting']['threadmaxpages'] ? 1 : $page;//当前页
$tpp = $_G['tpp'] = $mopen_config['tpp'];//帖子列表页每页显示条数
$start_limit = ($page - 1) * $mopen_config['tpp'];//帖子列表在数据库中的起始值

$orderby = $_G['gp_orderby'] = isset($_G['cache']['forums'][$_G['fid']]['orderby']) ? $_G['cache']['forums'][$_G['fid']]['orderby'] : 'lastpost';
$ascdesc = $_G['gp_ascdesc'] = isset($_G['cache']['forums'][$_G['fid']]['ascdesc']) ? $_G['cache']['forums'][$_G['fid']]['ascdesc'] : 'DESC';

$thisgid = $_G['forum']['type'] == 'forum' ? $_G['forum']['fup'] : (!empty($_G['cache']['forums'][$_G['forum']['fup']]['fup']) ? $_G['cache']['forums'][$_G['forum']['fup']]['fup'] : 0);
$forumstickycount = $stickycount = $stickytids = 0;
if($_G['setting']['globalstick'] && $_G['forum']['allowglobalstick']) {
    $stickytids = $_G['cache']['globalstick']['global']['tids'].(empty($_G['cache']['globalstick']['categories'][$thisgid]['count']) ? '' : ','.$_G['cache']['globalstick']['categories'][$thisgid]['tids']);
    
    $stickytids = trim($stickytids, ', ');
    if ($stickytids === ''){
         $stickytids = '0';
    }
    
    if($_G['forum']['status'] != 3) {
        $stickycount = $_G['cache']['globalstick']['global']['count'];
        if(!empty($_G['cache']['globalstick']['categories'][$thisgid])) {
            $stickycount += $_G['cache']['globalstick']['categories'][$thisgid]['count'];
        }
    }
}    

$forumstickytids = array();
loadcache('forumstick');
    
$_G['cache']['forumstick'][$_G['fid']] = isset($_G['cache']['forumstick'][$_G['fid']]) ? $_G['cache']['forumstick'][$_G['fid']] : array();
$forumstickycount = count($_G['cache']['forumstick'][$_G['fid']]);
if ($forumstickycount) {
    foreach($_G['cache']['forumstick'][$_G['fid']] as $forumstickthread) {
       $forumstickytids[] = $forumstickthread['tid'];
    }
    if(!empty($forumstickytids)) {
        $forumstickytids = dimplode($forumstickytids);
        $stickytids .= ", $forumstickytids";
     }
     $query = DB::query("SELECT t.* FROM ".DB::table($threadtable)." t
        WHERE t.tid IN ($stickytids) AND (t.displayorder IN (1, 2, 3, 4))
        ORDER BY displayorder DESC, $_G[gp_orderby] $_G[gp_ascdesc]
        LIMIT $start_limit, $_G[tpp]");
} else {
     $forumstickycount = DB::result_first("SELECT COUNT(*) FROM ".DB::table($threadtable)." t WHERE t.fid='{$_G['fid']}' AND t.displayorder='1'");
     $query = DB::query("SELECT t.* FROM ".DB::table($threadtable)." t
         WHERE (t.fid='{$_G['fid']}' AND t.displayorder='1') OR (t.tid IN ($stickytids) AND (t.displayorder IN (2, 3, 4)))
         ORDER BY displayorder DESC, $_G[gp_orderby] $_G[gp_ascdesc]
         LIMIT $start_limit, $_G[tpp]");
}
$stickycount += $forumstickycount;//置顶帖数
    
$_G['forum_threadcount'] = $stickycount;//置顶帖数
    
$sql = "SELECT COUNT(*) FROM ".DB::table($threadtable)." t WHERE t.fid='{$_G['fid']}' AND t.displayorder='0'";

$threadcount = $_G['forum_threadcount'] = $stickycount + DB::result_first($sql);//帖子总数

/*$sql = "SELECT t.* FROM ".DB::table($threadtable)." t 
    WHERE t.fid='{$_G['fid']}' AND t.displayorder='0'
    ORDER BY t.displayorder DESC, t.$_G[gp_orderby] $_G[gp_ascdesc]
    LIMIT $start_limit, $_G[tpp]";
$query = DB::query($sql);*/

$threadlist = $threadids = array();
$displayorderadd = !$filterbool && $stickycount ? 't.displayorder IN (0, 1)' : 't.displayorder IN (0, 1, 2, 3, 4)';

if(($start_limit && $start_limit > $stickycount) || !$stickycount || $filterbool) {
	$querysticky = '';
	$sql = "SELECT t.* FROM ".DB::table($threadtable)." t 
		WHERE t.fid='$fid' $filteradd AND $displayorderadd
		ORDER BY t.displayorder DESC, t.$orderby $ascdesc
		LIMIT ".($filterbool ? $start_limit : $start_limit - $stickycount).", $tpp";

	$query = DB::query($sql);
} else {
	$sql = "SELECT t.* FROM ".DB::table($threadtable)." t 
		WHERE t.tid IN ($stickytids) AND t.displayorder IN (2, 3, 4)
		ORDER BY displayorder DESC, $orderby $ascdesc
		LIMIT $start_limit, ".($stickycount - $start_limit < $tpp ? $stickycount - $start_limit : $tpp);

	$querysticky = DB::query($sql);

	if($tpp - $stickycount + $start_limit > 0) {
		$sql = "SELECT t.* FROM ".DB::table($threadtable)." t 
			WHERE t.fid='$fid' $filteradd AND $displayorderadd
			ORDER BY displayorder DESC, $orderby $ascdesc
			LIMIT ".($tpp - $stickycount + $start_limit);

	$query = DB::query($sql);		
	} else {
		$query = '';
	}
}

$_G['forum_threadlist'] = $threadids = array();
while(($querysticky && $thread = DB::fetch($querysticky)) || ($query && $thread = DB::fetch($query))) {
	
    $thread['typeid'] = $thread['typeid'] && !empty($forum['threadtypes']['prefix']) && isset($forum['threadtypes']['types'][$thread['typeid']]) ?
        '<em>[<a href="forumdisplay.php?fid='.$fid.'&amp;filter=type&amp;typeid='.$thread['typeid'].'">'.$forum['threadtypes']['types'][$thread['typeid']].'</a>]</em>' : '';
        	
    $thread['moved'] = $thread['heatlevel'] = 0;
    if($_G['forum']['status'] != 3 && ($thread['closed'] || ($_G['forum']['autoclose'] && TIMESTAMP - $thread[$closedby] > $_G['forum']['autoclose']))) {
        $thread['new'] = 0;
        if($thread['isgroup'] == 1) {
            $thread['folder'] = 'common';
            $grouptids[] = $thread['closed'];
        } else {
            if($thread['closed'] > 1) {
                $thread['moved'] = $thread['tid'];
                //$thread['replies'] = '-';
                //$thread['views'] = '-';
            }
            $thread['folder'] = 'lock';
        }
    } elseif($_G['forum']['status'] == 3 && $thread['closed'] == 1) {
        $thread['folder'] = 'lock';
    } else {
        $thread['folder'] = 'common';
        if(empty($_G['cookie']['oldtopics']) || strpos($_G['cookie']['oldtopics'], 'D'.$thread['tid'].'D') === FALSE) {
            $thread['new'] = 1;
            $thread['folder'] = 'new';
        } else {
            $thread['new'] = 0;
        }
        $thread['weeknew'] = $thread['new'] && TIMESTAMP - 604800 <= $thread['dateline'];
        if($thread['replies'] > $thread['views']) {
            $thread['views'] = $thread['replies'];
        }
        if($_G['setting']['heatthread']['iconlevels']) {
            foreach($_G['setting']['heatthread']['iconlevels'] as $k => $i) {
                if($thread['heats'] > $i) {
                    $thread['heatlevel'] = $k + 1;
                    break;
                }
            }
        }
    }
    
    $posttableid = $thread['posttableid'];
    $thread['posttable'] = $posttableid ? "forum_post_$posttableid" : 'forum_post';

    $threadids[] = $thread['tid'];
    $_G['forum_threadlist'][] = $thread;

    $threadlist[] = $thread;
    unset($thread);
}

$_G['group']['allowpost'] = (!$_G['forum']['postperm'] && $_G['group']['allowpost']) || ($_G['forum']['postperm'] && forumperm($_G['forum']['postperm'])) || (isset($_G['forum']['allowpost']) && $_G['forum']['allowpost'] == 1 && $_G['group']['allowpost']);
$_G['group']['allowpost'] = isset($_G['forum']['allowpost']) && $_G['forum']['allowpost'] == -1 ?  false : $_G['group']['allowpost'];
$allowpost = $_G['group']['allowpost'];

$totalpage = @floor($threadcount / $tpp);
if ( $totalpage * $tpp < $threadcount || $totalpage == 0 ) {
    $totalpage += 1;
}
$currpage = $page > $totalpage? $totalpage : $page;
$uid = $_G['uid'];

/*if($template != null){
	//data ouput
	$html = "";
	$html .= '<title>'.$navtitle.'</title>';
	if ( !empty($_G['uid']) ) {
		$html .= '<p class="islogin">'.$_G['uid'].'</p>';
	}
	
	$html .= '<div class="postform">';
	if ( $allowpost ) {
		$html .= '<a href="index.php?mocmd=newthreadform&amp;fid='.$fid.'" class="newthread">post</a>';
	}
	$html .= '</div>';
	
	foreach ( $sublist  as $sub) {
		$html .= '<div class="subedition">';
		$html .= '<h2><a href="index.php?mocmd=topic&amp;fid='.$sub['fid'].'">'.$sub['name'].'</a></h2>';
		$html .= '<em class="topicnum">'.$sub['threads'].'</em>/<em class="threadnum">'.$sub['posts'].'</em>';
		$html .= '</div>';
	}
	
	foreach ( $threadlist  as $key => &$thread) {
		//$thread['typeid'] = strip_tags($thread['typeid']);
		$thread['lastpost'] = dgmdate($thread['lastpost'], 'u');
		$html .= '<div class="topic">';
		if ( $thread['displayorder'] != 0 ) {
			$html .= '<a href="index.php?mocmd=thread&amp;fid='.$thread['fid'].'&amp;tid='.$thread['tid'].'" class="top">'.strip_tags($thread['typeid']).$thread['subject'].'</a>';		
		}
		else {
			$html .= '<a href="index.php?mocmd=thread&amp;fid='.$thread['fid'].'&amp;tid='.$thread['tid'].'" class="normal">'.strip_tags($thread['typeid']).$thread['subject'].'</a>';
		}
		$html .= '<p><em class="replynum">'.$thread['replies'].'</em>/<em class="viewnum">'.$thread['views'].'</em></p>';
		$html .= '<p><em class="lastauthor">'.$thread['lastposter'].'</em>/<em class="lastdate">'.gmdate("Y-m-d H:i",$thread['lastpost']).'</em></p>';
		if ( !empty($thread['attachment']) ) {
			$html .= '<p><em class="attach">attach</em></p>';
		}
		if ( !empty($thread['update']) ) {
			$html .= '<p><em class="update">update</em></p>';
		}
		$html .= '</div>';
	}
	
	$html .= '<div class="pages">';
	$html .= '<strong class="currpage">'.$currpage.'</strong>';
	$html .= '<a href="index.php?mocmd=topic&amp;fid='.$fid.'&amp;page='.$totalpage.'" class="totalpage">'.$totalpage.'</a>';
	$html .= '</div>';
	
	echo $html;
}else{*/

foreach ( $threadlist  as $key => &$thread) {
	//$thread['typeid'] = strip_tags($thread['typeid']);
	$timeoffset = $_G['member']['timeoffset'];
	$thread['lastpost'] = gmdate("Y-m-d H:i",$thread['lastpost'] +  $timeoffset * 3600);
}

$mopen_log['context'][__LINE__] = '$sublist=>'.var_export($sublist, true);
$mopen_log['context'][__LINE__] = '$threadlist=>'.var_export($threadlist, true);

$tpl->setFile($request_cmd.'.xml.tpl');
$tpl->setVariable('navtitle', $navtitle);
$tpl->setVariable('uid', $uid);
$tpl->setBool('islogin', $uid!=0);
$tpl->setVariable('fid', $fid);
$tpl->setBool('allowpost', $allowpost!=0);
//$tpl->setVar('subexit', $sublist!=0);
$tpl->setArray('sublist', $sublist);
$tpl->setArray('threadlist', $threadlist);
$tpl->setVariable('currpage', $currpage);
$tpl->setVariable('totalpage', $totalpage);
//日志回传相关
mo_make_array($mopen_log['context']);
$tpl->setBool('debug', $mopen_log['switch'] != 0);
$tpl->setArray('context', $mopen_log['context']);
$tpl->show();
//}

?>