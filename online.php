<html>
<head>
<meta http-equiv="refresh" content="10">
<meta http-equiv="content-type" content="text/html;charset=gb2312">
</head>
<body>
<?php
$a = file_get_contents("http://www.test3g.com/forum.php?mod=forumdisplay&fid=28&page=1");
if(strlen($a) > 20000){
	echo date("Y-m-d H:i:s").'<span style="color:green"> ��վ��������</span>������ָ��:'.strlen($a);
}
else
{
	echo date("Y-m-d H:i:s").'<span style="color:red"> ��վ���ƹ��ϣ�</span>"."����ָ��:'.strlen($a);
	echo <<<ALERT
<script type="text/javascript">
alert("��վ�޷����ʣ����飡");
</script>
ALERT
;
}	
?>
</body>
</html>