<?php /* Created:2011-10-13 17:10:06 */ ?>
<title><?php echo $VAR["navtitle"]; ?></title>
<?php if ($IF["islogin"]) { ?>
	<p class="islogin"><?php echo $VAR["uid"]; ?></p>
<?php } ?>
<div class="postform">
<?php if ($IF["allowpost"]) { ?>	
	<a href="index.php?mocmd=newthreadform&amp;fid=<?php echo $VAR["fid"]; ?>" class="newthread">post</a>	
<?php } ?>
</div>
<?php if (count($LOOP["sublist"]) > 0) { foreach ($LOOP["sublist"] as $val1) { ?>
<div class="subedition">
	<h2><a href="index.php?mocmd=topic&amp;fid=<?php echo $val1["fid"]; ?>"><?php echo $val1["name"]; ?></a></h2>		
	<em class="topicnum"><?php echo $val1["threads"]; ?></em>/<em class="threadnum"><?php echo $val1["posts"]; ?></em>
</div>
<?php }} ?>
<?php if (count($LOOP["threadlist"]) > 0) { foreach ($LOOP["threadlist"] as $val1) { ?>
	<div class="topic">
	<?php if ($val1["displayorder"]) { ?>
		<a href="index.php?mocmd=thread&amp;fid=<?php echo $val1["fid"]; ?>&amp;tid=<?php echo $val1["tid"]; ?>" class="top"><?php echo strip_tags($val1["typeid"]); ?><?php echo $val1["subject"]; ?></a>		
	<?php } else { ?>	
		<a href="index.php?mocmd=thread&amp;fid=<?php echo $val1["fid"]; ?>&amp;tid=<?php echo $val1["tid"]; ?>" class="normal"><?php echo strip_tags($val1["typeid"]); ?><?php echo $val1["subject"]; ?></a>
	<?php } ?>	
	<p><em class="replynum"><?php echo $val1["replies"]; ?></em>/<em class="viewnum"><?php echo $val1["views"]; ?></em></p>
	<p><em class="lastauthor"><?php echo $val1["lastposter"]; ?></em>/<em class="lastdate"><?php echo $val1["lastpost"]; ?></em></p>
	<?php if ($val1["attachment"]) { ?>
		<p><em class="attach">attach</em></p>
	<?php } ?>	
	<?php if ($val1["weeknew"]) { ?>
		<p><em class="update">update</em></p>
	<?php } ?>
	</div>
<?php }} ?>
<div class="pages">
<strong class="currpage"><?php echo $VAR["currpage"]; ?></strong>
<a href="index.php?mocmd=topic&amp;fid=<?php echo $VAR["fid"]; ?>&amp;page=<?php echo $VAR["totalpage"]; ?>" class="totalpage"><?php echo $VAR["totalpage"]; ?></a>
</div>
<br/><?php include 'log.xml.tpl.php'; ?>

