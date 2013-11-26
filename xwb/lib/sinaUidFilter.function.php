<?php
/**
 * 过滤已经绑定到新浪微博的discuz!帐号
 * @version $Id: sinaUidFilter.function.php 380 2010-12-09 10:24:49Z yaoying $
 * @param int|array $uid 要过滤的uid号码。传参前，请自行保证是int。此处不作检查
 * @return array
 */
function sinaUidFilter($uid) {
	$sina_uid = array();
	if( empty($uid) ){
		return $sina_uid;
	}
	
	$db = XWB_plugin::getDB();
	$tablepre = XWB_S_TBPRE;	
	$sql = 'SELECT uid,sina_uid FROM ' . $tablepre . 'xwb_bind_info WHERE `uid` IN(' . implode(',', (array)$uid). ')';
	$rs = $db->query($sql);
	while ($row = $db->fetch_array($rs)) {
		$sina_uid[$row['uid']] = $row['sina_uid'];
	}
	return $sina_uid;
}
