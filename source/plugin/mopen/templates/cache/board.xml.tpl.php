<?php /* Created:2011-10-13 17:10:00 */ ?>
<?php if ($IF["islogin"]) { ?>
	<p class="islogin"><?php echo $VAR["uid"]; ?></p>
<?php } ?>	
<?php if (count($LOOP["subarea"]) > 0) { foreach ($LOOP["subarea"] as $val1) { ?>
<div class="subarea">			
	<h3><?php echo $val1["name"]; ?></h3>				
	<?php if (count($val1["child"]) > 0) { foreach ($val1["child"] as $val2) { ?>
	<tbody class="editionlist">		
		<h2><a href="index.php?mocmd=topic&amp;fid=<?php echo $val2["fid"]; ?>"><?php echo $val2["name"]; ?></a></h2>	
		<em class="topicnum"><?php echo $val2["threads"]; ?></em>	
		<em class="threadnum"><?php echo $val2["posts"]; ?></em>	
	</tbody>
	<?php }} ?>
</div>
<?php }} ?>
<br/><?php include 'log.xml.tpl.php'; ?>

