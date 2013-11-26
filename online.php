<html>
<head>
<meta http-equiv="refresh" content="10">
<meta http-equiv="content-type" content="text/html;charset=gb2312">
</head>
<body>
<?php
$a = file_get_contents("http://www.test3g.com/forum.php?mod=forumdisplay&fid=28&page=1");
if(strlen($a) > 20000){
	echo date("Y-m-d H:i:s").'<span style="color:green"> 网站运行正常</span>，技术指数:'.strlen($a);
}
else
{
	echo date("Y-m-d H:i:s").'<span style="color:red"> 网站疑似故障！</span>"."技术指数:'.strlen($a);
	echo <<<ALERT
<script type="text/javascript">
alert("网站无法访问，请检查！");
</script>
ALERT
;
}	
?>
</body>
</html>