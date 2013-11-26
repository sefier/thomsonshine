<?php
if($_GET['p'] !='iamtmx203')
exit;
error_reporting(E_ALL);
ini_set('display_errors', true);
$db = mysqli_connect('localhost', 'root', 'AnLuTmx203SEU' ,'forum_new');

$result = mysqli_query($db, 'SELECT COUNT(*) AS total,`emailstatus` FROM `pre_common_member` WHERE `regdate`>'.strtotime(date('Y-m-d')).' GROUP BY `emailstatus`');
$data = array(0, 0);
while($row = mysqli_fetch_assoc($result)){
  $data[$row['emailstatus']] = $row['total'];
}
mysqli_close($db);

file_put_contents('/home/forum/reg.log', date('Y-m-d H:i:s').'--'.$data[0].'/'.$data[1]."/".($data[0]+$data[1])."<br>", FILE_APPEND);
readfile('/home/forum/reg.log');
