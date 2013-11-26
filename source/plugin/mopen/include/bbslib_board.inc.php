<?php
//output:
// $forum_tree

defined('IN_MOPEN') or exit;

require_once libfile('class/core');
require_once libfile('function/forumlist');

$mopen_log['context'][__LINE__] = '$request_cmd=>'.$request_cmd;
$mopen_log['context'][__LINE__] = '$uid=>'.$_G['uid'];

$sql = !empty($_G['member']['accessmasks']) ?
    "SELECT f.fid, f.fup, f.type, f.name, f.threads, f.posts, f.todayposts, f.lastpost, f.inheritedmod, f.domain,
        f.forumcolumns, f.simple, ff.description, ff.moderators, ff.icon, ff.viewperm, ff.redirect, ff.extra, ff.password, a.allowview,
        hf.favid
        FROM ".DB::table('forum_forum')." f
        LEFT JOIN ".DB::table('forum_forumfield')." ff ON ff.fid=f.fid
        LEFT JOIN ".DB::table('forum_access')." a ON a.uid='$_G[uid]' AND a.fid=f.fid
        LEFT JOIN ".DB::table('home_favorite')." hf ON hf.uid='$_G[uid]' AND hf.id=f.fid AND hf.idtype='fid'
        WHERE f.status='1' ORDER BY f.type, f.displayorder"
    : "SELECT f.fid, f.fup, f.type, f.name, f.threads, f.posts, f.todayposts, f.lastpost, f.inheritedmod, f.domain,
        f.forumcolumns, f.simple, ff.description, ff.moderators, ff.icon, ff.viewperm, ff.redirect, ff.extra, ff.password,
        hf.favid
        FROM ".DB::table('forum_forum')." f
        LEFT JOIN ".DB::table('forum_forumfield')." ff USING(fid)
        LEFT JOIN ".DB::table('home_favorite')." hf ON hf.uid='$_G[uid]' AND hf.id=f.fid AND hf.idtype='fid'
        WHERE f.status='1' ORDER BY f.type, f.displayorder";
    
$query = DB::query($sql);

$forum_root = array(0 => array('fid' => 0, 'child' => array()));
$forum_g = $froum_f = $forum_s = $g_forums = $f_froums = $s_forums = array();
$forum_tree = $forum_tree_g = $forum_tree_f = $forum_tree_s = array();

while($forum = DB::fetch($query)) {	
    if ($forum['type'] != 'group') {
        $forum_icon = $forum['icon'];
        if(forum($forum)) {
            $forum['icon'] = get_forumimg($forum_icon);
        } else {
            continue;
        }
    }
	    
	 switch ($forum['type'])
	 {
	     case   'sub': $forum_s[] = $forum;  break;
	     case 'group': $forum_g[] = $forum;  break;
	     case 'forum': $froum_f[] = $forum;  break;
	 }   
}

foreach($forum_s as $s_forum) {
    mo_insert_forum($froum_f, $s_forum);
}

foreach($froum_f as $f_forum) {
    mo_insert_forum($forum_g, $f_forum);
}

foreach($forum_g as $g_forum) {
    if ($g_forum['child']) {
        mo_insert_forum($forum_root, $g_forum);
    }
}

$forum_tree = $forum_root[0]['child'];
//var_dump($forum_tree, true);

/*foreach($forum_tree as $tree_key=>$g_forums) {
	file_put_contents("./debugfile","group list\n", FILE_APPEND);
	foreach($g_forums as $g_key=>$g_forum) {
		file_put_contents("./debugfile", $g_key."\t".$g_forum."\t", FILE_APPEND); 
	}
	$forum_tree_f = $g_forums['child'];
	foreach($forum_tree_f as $tree_key_f=>$f_forums) {
		file_put_contents("./debugfile","forum list\n", FILE_APPEND);
		foreach($f_forums as $f_key=>$f_forum) {
			file_put_contents("./debugfile", $f_key."\t".$f_forum."\t", FILE_APPEND); 
		}
		$forum_tree_s  = $f_forums['child'];
		foreach($forum_tree_s as $tree_key_s=>$s_forums) {
			file_put_contents("./debugfile","sub list\n", FILE_APPEND);
			foreach($s_forums as $s_key=>$s_forum) {
				file_put_contents("./debugfile", $s_key."\t".$s_forum."\t", FILE_APPEND); 
			}
			file_put_contents("./debugfile","sub list end \n", FILE_APPEND);
		}
		file_put_contents("./debugfile","forum list end \n", FILE_APPEND);
	}
	file_put_contents("./debugfile","group list end \n", FILE_APPEND);
}*/
$uid = $_G['uid'];

/*if($template != null){
	//data ouput
	$html = "";
	if ( !empty($_G['uid']) ) {
		$html .= '<p class="islogin">'.$_G['uid'].'</p>';
	}
	foreach ( $forum_tree  as $g_forums) {
		$html .= '<div class="subarea">';
		$html .= '<h3>'.$g_forums['name'].'</h3>';
		foreach ( $g_forums['child']  as $f_forums) {
			$html .= '<tbody class="editionlist">';
			$html .= '<h2><a href="index.php?mocmd=topic&amp;fid='.$f_forums['fid'].'">'.$f_forums['name'].'</a></h2>';
			$html .= '<em class="topicnum">'.$f_forums['threads'].'</em>/<em class="threadnum">'.$f_forums['posts'].'</em>';
			$html .= '</tbody>';
		}
		$html .= '</div>';
	}
	echo $html;
}else{*/
$mopen_log['context'][__LINE__] = '$postlist=>'.var_export($forum_tree, true);

$tpl->setFile($request_cmd.'.xml.tpl');
$tpl->setVariable('uid', $uid);
$tpl->setBool('islogin', $uid!=0);
$tpl->setArray('subarea', $forum_tree);
//日志回传相关
mo_make_array($mopen_log['context']);
$tpl->setBool('debug', $mopen_log['switch'] != 0);
$tpl->setArray('context', $mopen_log['context']);
$tpl->show();
//}

function mo_insert_forum(&$forum_ups, $forum)
{  
    if ($forum['type'] == 'group' && !isset($forum['child'])) return;
    
    foreach($forum_ups as $id => $forum_up)
    {
        if ($forum_up['fid'] == $forum['fup'])
        {
            $forum_ups[$id]['todayposts'] += $forum['todayposts'];
            $forum_ups[$id]['child'][] = $forum;
        }
    }
}

?>