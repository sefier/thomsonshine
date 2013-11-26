<?php /* Created:2011-10-15 20:10:46 */ ?>
<?php if ($IF["islogin"]) { ?>
<p class="islogin"><?php echo $VAR["uid"]; ?></p>
<?php } ?>
<div class="alert_info"><?php echo $VAR["post_succ"]; ?></div>
<br/><?php include 'log.xml.tpl.php'; ?>

