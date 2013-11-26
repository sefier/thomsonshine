<?php

/*
 * Created on 2011-1-2 by Lee (bbs.7drc.com)
 *
 * This is a freeware, But you have no right to modify or distribute
 * If you want to be authorized, please contact us
 */

if (!defined('IN_DISCUZ')) {
	exit ('Access Denied');
}
class plugin_drc_feed {
	var $offset;
	var $groups;
	var $forumlists;
	function plugin_drc_feed() {
		global $_G;
		$set = $_G['cache']['plugin']['drc_feed'];
		$this->offset = $set['offset'];
		$this->groups = (array) unserialize($set['groups']);
		$this->forumlists = (array) unserialize($set['forumlists']);
	}
}

class plugin_drc_feed_forum extends plugin_drc_feed {

	function viewthread_postbottom_output() {
		global $_G, $postlist;
		if ($this->offset == 1 && in_array($_G['groupid'], $this->groups) && in_array($_G['fid'], $this->forumlists)) {
			$shownotice = $feedlist = $feedlists = array ();
			foreach ($postlist as $post) {
				if ($post['first']) {
					$theuid = $post['authorid'];
				}
			}
			require_once libfile('function/feed');
			$query = DB :: query("SELECT * FROM " . DB :: table('home_feed') . " WHERE uid='$theuid' ORDER BY dateline DESC LIMIT 5");
			while ($feedlist = DB :: fetch($query)) {
				$feedlist = mkfeed($feedlist);
				$feedlist['new'] = $feedlist['dateline'] + 68400 * 3 > $_G['timestamp'] ? 1 : 0;
				$feedlist['dateline'] = dgmdate($feedlist['dateline'], 'u');
				$feedlists[] = $feedlist;
			}
			include template('drc_feed:notice');
			return $shownotice;
		}else{
			return array();
		}

	}
}
?>
