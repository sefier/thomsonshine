<?php /* Created:2012-01-03 06:01:21 */ ?>
<?php if ($IF["islogin"]) { ?>
<p class="islogin"><?php echo $VAR["uid"]; ?></p>
<?php } ?>
<div class="alert_info"><?php echo $VAR["post_succ"]; ?></div>
<br/><?php include 'log.xml.tpl.php'; ?>

