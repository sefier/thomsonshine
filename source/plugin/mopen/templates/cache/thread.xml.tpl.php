<?php /* Created:2011-10-13 19:10:19 */ ?>
<title><?php echo $VAR["navtitle"]; ?></title>
<?php if ($IF["islogin"]) { ?>
	<p class="islogin"><?php echo $VAR["uid"]; ?></p>
<?php } ?>
<div class="pages">
<strong class="currpage"><?php echo $VAR["currpage"]; ?></strong>
<a href="index.php?mocmd=thread&amp;fid=<?php echo $VAR["fid"]; ?>&amp;tid=<?php echo $VAR["tid"]; ?>&amp;page=<?php echo $VAR["totalpage"]; ?>" class="totalpage"><?php echo $VAR["totalpage"]; ?></a>
</div>
<div class="postform">
<?php if ($IF["allowpostreply"]) { ?>	
	<a href="index.php?mocmd=newreplyform&amp;fid=<?php echo $VAR["fid"]; ?>&amp;tid=<?php echo $VAR["tid"]; ?>" class="newreply">reply</a>	
<?php } ?>
<?php if ($IF["allowpost"]) { ?>	
	<a href="index.php?mocmd=newthreadform&amp;fid=<?php echo $VAR["fid"]; ?>" class="newthread">post</a>	
<?php } ?>
</div>
<?php if (count($LOOP["postlist"]) > 0) { foreach ($LOOP["postlist"] as $val1) { ?>
        <table class="threadcontent">
        <em class="author"><?php echo $val1["authoras"]; ?></em>
        <em class="floor"><?php echo $val1["number"]; ?></em>
        <em class="posttime"><?php echo $val1["dbdateline"]; ?></em>
        <h3 class="title"><?php echo $val1["subject"]; ?></h3>
        <!--content start--><div class="content"><?php echo $val1["message"]; ?></div><!--content end-->
        </table>
<?php }} ?>
<br/><?php include 'log.xml.tpl.php'; ?>

