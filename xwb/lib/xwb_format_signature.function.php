<?php

/**
 * 新浪微博签名替换函数
 * @version $Id: xwb_format_signature.function.php 375 2010-12-08 06:06:11Z yaoying $
 * @param string $s
 */
function xwb_format_signature($s) {
	
	$p = "#&lt;-sina_sign,(\d+),([a-z0-9]+),(\d+)-&gt;#sim";
	$rp = '<a href="http://t.sina.com.cn/\1" target="_blank"><img border="0" src="http://service.t.sina.com.cn/widget/qmd/\1/\2/\3.png"/></a>';
	//$p = XWB_plugin::convertEncoding($p,'UTF8', XWB_S_CHARSET);
	//$rp= XWB_plugin::convertEncoding($rp,'UTF8', XWB_S_CHARSET);
	if (! empty ( $s ) && preg_match ( $p, $s, $m )) {
		return preg_replace ( $p, $rp, $s );
	}
	return $s;
}