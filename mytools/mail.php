<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
define('IN_DISCUZ', true);
if($_REQUEST['p'] != 'sjyyt.com')
  exit;

include_once('../source/class/class_core.php');
include_once('../source/function/function_core.php');

$cachelist = array();
$discuz = C::app();
$discuz->cachelist = $cachelist;
$discuz->init_cron = false;
$discuz->init_setting = false;
$discuz->init_user = false;
$discuz->init_session = false;
$discuz->init_misc = false;
$discuz->init();

if($_POST['address']){
  $result = sendmail($_POST['address'], $_POST['subject'], $_POST['body'], $from = 'webmaster@sjyyt.com');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>管理员发送邮件工具</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="common/css/sign.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <?php if($result === true) { ?>
      <div class="alert alert-success">恭喜，邮件发送成功</div>
      <?php }elseif($result === false){ ?>
      <div class="alert alert-danger">邮件发送失败，请稍后重试</div>
      <?php } ?>
      <form class="form-signin" role="form" method="post">
        <h2 class="form-signin-heading">发送邮件</h2>
        <input type="hidden" name="p" value="sjyyt.com">
        <input type="text" name="address" class="form-control" placeholder="邮件地址" required autofocus>
        <input type="text" name="subject" class="form-control" placeholder="邮件标题" required>
        <textarea name="body" class="form-control"  placeholder="邮件正文" rows="3" rquired></textarea>
        <!-- <input type="text" class="form-control" placeholder="发件地址(默认webmaster)"> -->
        <button name="send" class="btn btn-lg btn-primary btn-block" type="submit">发送</button>
        <!-- <a class="btn btn-lg btn-default btn-block">查看发送记录</a> -->
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
