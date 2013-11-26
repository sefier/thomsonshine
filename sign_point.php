<?php
$id = $_GET['uid'];

$link = mysql_connect("localhost", "root", "DAREfor1_lyf_0808");
mysql_query("set names utf8");
mysql_select_db("3g");
$query = 'SELECT *  FROM `count_add_sign` WHERE authorid='.$id;
$result = mysql_query($query);

if(!$result){
	$error_msg = "<center>查询失败，请刷新本页，重新查询。<br/><a href='javascript:window.location.reload(true)'>刷新窗口</a></center>";
	$fail = true;
}
if(mysql_num_rows($result)===0){
	$error_msg = '<center>系统查明，您并没有在5月22日-6月1日有过签到行为，因此，没有给您返还积分的计划。<br/><a href="plugin.php?id=dsu_paulsign:sign">返回签到</a></center>';
	$fail = true;
}

if($fail){
	die($error_msg);
}

$table = '';
$total_point = 0;
while($row = mysql_fetch_assoc($result)){
	$dateline = $row['dateline'];
	$point = $row['point'];
	$total_point += $point;
	$date = date('Y-m-d H:i:s', $dateline);
	$table .= '<tr><td>'.$date.'</td><td class="passed">'.$point.'</td><td>发放完毕</td></tr>';
}
$table .= '<tr><td>总奖励</td><td>'.$total_point.'</td><td><a href="plugin.php?id=dsu_paulsign:sign" style="color:red">返回签到</a></td></tr>';

$out = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
$out .= '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">';
$out .= '<head>';
$out .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>';
$out .= '<meta http-equiv="content-language" content="en"/>';
$out .= '<link rel="stylesheet" type="text/css" href="css/main.css" />';
$out .= '<title>Test3G签到系统故障积分返回简明统计表</title>';
$out .= '</head><body><div id="page"><div id="header"><h1>积分补偿简明统计表</h1></div><div id="content"><h2>统计说明</h2><p>本页面统计了5月22日凌晨4点到6月2日凌晨0点，您的签到记录和获得的相应积分奖励。由于签到系统故障，这段时间用户的应有积分没有入账；现在此故障已修复，返回的积分情况如下表所示。</p><h2>备注</h2><p>本表格列出的积分奖励，已经全部发放完毕，本表仅作您查询使用，并非是您索取积分的凭证。如果对此表格统计的结果存有异议，可到论坛站务区发表您的高见。</p><h2>简明统计表</h2><table class="result"><tr><th>签到时间</th><th>威望</th><th>是否发放</th></tr>';
$out .= $table;
$out .= '</table></div></div></body></html>';
echo $out;