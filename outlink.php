<?php

/**
 *   
 *   
 */

//如果不是手机营业厅
if($_GET['p'] != 'sjyyt.com')
  exit;

include_once('../source/class/class_core.php');
include_once('../source/function/function_core.php');

@set_time_limit(0);

$cachelist = array();
$discuz = C::app();

$discuz->cachelist = $cachelist;
$discuz->init_cron = false;
$discuz->init_setting = false;
$discuz->init_user = false;
$discuz->init_session = false;
$discuz->init_misc = false;
@header('Content-Type: text/html; charset=gbk');

$discuz->init();
//ÅäÖÃ
$config = array(
  'dbcharset' => $_G['config']['db']['1']['dbcharset'],
  'charset' => $_G['config']['output']['charset'],
  'tablepre' => $_G['config']['db']['1']['tablepre']
);
$theurl = 'position_fix_x2.5.php';
if($_GET['op'] == 'check') {
  $num = DB::result_first("SELECT count(*) FROM ".DB::table('forum_post')." WHERE first=1 AND position>1");
  if(intval($num)) {
    $msg = '¹²²é³ö '.$num.' ¸ö³ö´íÖ÷Ìâ£¬<a href="'.$threurl.'?op=fix">ÂíÉÏÐÞ¸´</a>';
  } else {
    $msg = 'ÔÚÄúµÄÂÛÌ³ÖÐÃ»ÓÐ·¢ÏÖ³ö´íÖ÷Ìâ¡£';
  }
  show_msg($msg);
} elseif($_GET['op'] == 'fix') {
  $fixed = false;
  $num = intval($_GET['num']) ? intval($_GET['num']) : 0;
  $error = intval($_GET['error']) ? intval($_GET['error']) : 0;
  $limit = intval($_GET['limit']) ? intval($_GET['limit']) : 10;
  $query = DB::query("SELECT pid, tid, position FROM ".DB::table('forum_post')." WHERE first=1 AND position>1 ORDER BY tid DESC LIMIT $error, $limit");
  while($row = DB::fetch($query)) {
    $pos = 1;
    $firstpost = DB::fetch_first("SELECT * FROM ".DB::table('forum_post')." WHERE tid=$row[tid] AND first=1 ORDER BY position ASC");
    if(empty($firstpost) || $firstpost['position'] == 1) {
      $error++;
      continue;
    }
    $maxposition = C::t('forum_post')->fetch_maxposition_by_tid(0, $row['tid']);
    C::t('forum_post')->increase_position_by_tid(0, $row['tid'], $maxposition);
    $pquery = DB::query("SELECT tid, pid, position FROM ".DB::table('forum_post')." WHERE tid=$row[tid] ORDER BY first DESC, pid asc");
    while($post = DB::fetch($pquery)) {
      C::t('forum_post')->update('tid:'.$post['tid'], $post['pid'], array('position' => $pos));
      $pos ++;
    }
    C::t('forum_thread')->update($row['tid'], array('maxposition' => $pos - 1));
    $fixed = true;
  }
  if($fixed) {
    $num = $limit + $num;
    show_msg('ÒÑ¾­ÐÞ¸´ '.$num.' ¸öÖ÷Ìâ£¬ÐÞ¸´½øÐÐÖÐ£¬ÇëÉÔºó¡£¡£¡£', $theurl.'?op=fix&limit='.$limit.'&num='.$num.'&error='.$error, 2000);
  } else {
    $_GET['op'] = 'end';
    $error && $errormsg = '<br>ÓÐ'.$error.'¸öÖ÷ÌâÎÞ·¨ÐÞ¸´£¬¿ÉÒÔºöÂÔ¡£';
    show_msg('ÐÞ¸´Íê³É.'.$errormsg);
  }
} else {
  $_GET['op'] = 'start';
  show_msg('±¾³ÌÐòÖ»Õë¶ÔÉý¼¶Discuz!X2.5ºó³öÏÖµÄÖ÷ÌâÌûÎ»ÖÃ´íÎóµÄÖ÷Ìâ½øÐÐ¼ì²éºÍÐÞ¸´¡£<br><a href="'.$theurl.'?op=check">¼ì²é³ö´íÖ÷Ìâ</a><br>Èç¹ûÊý¾ÝÌ«´ó¿ÉÒÔ²»¼ì²é&nbsp;&nbsp;<a href="'.$theurl.'?op=fix">Ö±½ÓÐÞ¸´</a>');
}
//ÏÔÊ¾
function show_msg($message, $url_forward='', $time = 1) {

  if($url_forward) {
    $url_forward = $_GET['from'] ? $url_forward.'&from='.rawurlencode($_GET['from']) : $url_forward;
    $message = "<a href=\"$url_forward\">$message (Ìø×ªÖÐ...)</a><script>setTimeout(\"window.location.href ='$url_forward';\", $time);</script>";
  }

  show_header();
  print<<<END
  <table>
  <tr><td>$message</td></tr>
  </table>
END;
  show_footer();
  exit();
}


//Ò³ÃæÍ·²¿
function show_header() {
  global $config;

  $nowarr = array($_GET['op'] => ' class="current"');

  print<<<END
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
  <title> Discuz!X2.5Ö÷ÌâÌû´íÎ»ÐÞ¸´³ÌÐò </title>
  <style type="text/css">
  * {font-size:12px; font-family: Verdana, Arial, Helvetica, sans-serif; line-height: 1.5em; word-break: break-all; }
  body { text-align:center; margin: 0; padding: 0; background: #F5FBFF; }
  .bodydiv { margin: 40px auto 0; width:720px; text-align:left; border: solid #86B9D6; border-width: 5px 1px 1px; background: #FFF; }
  h1 { font-size: 18px; margin: 1px 0 0; line-height: 50px; height: 50px; background: #E8F7FC; color: #5086A5; padding-left: 10px; }
  #menu {width: 100%; margin: 10px auto; text-align: center; }
  #menu td { height: 30px; line-height: 30px; color: #999; border-bottom: 3px solid #EEE; }
  .current { font-weight: bold; color: #090 !important; border-bottom-color: #F90 !important; }
  input { border: 1px solid #B2C9D3; padding: 5px; background: #F5FCFF; }
  #footer { font-size: 10px; line-height: 40px; background: #E8F7FC; text-align: center; height: 38px; overflow: hidden; color: #5086A5; margin-top: 20px; }
  </style>
  </head>
  <body>
  <div class="bodydiv">
  <h1>Ö÷ÌâÌû´íÎ»ÐÞ¸´³ÌÐò</h1>
  <div style="width:90%;margin:0 auto;">
  <table id="menu">
  <tr>
  <td{$nowarr[start]}>¿ªÊ¼</td>
  <td{$nowarr[check]}>¼ì²é</td>
  <td{$nowarr[fix]}>ÐÞ¸´</td>
  <td{$nowarr[end]}>ÐÞ¸´Íê³É</td>
  </tr>
  </table>
  <br>
END;
}

function show_footer() {
  print<<<END
  </div>
  <div id="footer">&copy; Comsenz Inc. 2001-2012 http://www.comsenz.com</div>
  </div>
  <br>
  </body>
  </html>
END;
}

?>