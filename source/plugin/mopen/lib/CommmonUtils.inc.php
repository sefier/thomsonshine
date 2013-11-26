<?php

defined('IN_MOPEN') or exit;

function mo_regurl_replace($strContent,$urlReplace) {
	$arrUrlParts = parse_url($urlReplace);
	$strPathPre = substr($arrUrlParts['path'],0,strrpos($arrUrlParts['path'],'/'));
	$strHost = $arrUrlParts['scheme'].'://'.$arrUrlParts['host'];
	if ( !empty($arrUrlParts['port']) ) {
		$strHost .= ":".$arrUrlParts['port'];
	}
	$strContent = preg_replace('/href\s*=(\'|")(?!\/)(?!http)(?!#)(.*?)\\1([^<]*)>/s','href=$1'.$strHost."$strPathPre/".'$2$1$3>',$strContent);
	$strContent = preg_replace('/href\s*=(\'|")\/(.*?)\\1([^<]*)>/s','href=$1'.$strHost.'/$2$1$3>',$strContent);
	$strContent = preg_replace('/src\s*=(\'|")(?!\/)(?!http)(?!#)(.*?)\\1([^<]*)>/s','src=$1'.$strHost."$strPathPre/".'$2$1$3>',$strContent);
	$strContent = preg_replace('/src\s*=(\'|")\/(.*?)\\1([^<]*)>/s','src=$1'.$strHost.'/$2$1$3>',$strContent);
	return $strContent;
}

//TODO: 模板暂不支持foreach($arr as $key => $value)，后续升级
function mo_make_array(&$array){
	foreach ( $array as $key => &$value) {
		$value = array('key' => $key, 'value' => $value);
	}
}

?>