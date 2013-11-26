<?php /* Created:2012-01-03 06:01:21 */ ?>
<?php if ($IF["debug"]) { ?>
<table class="log">
	<?php if (count($LOOP["context"]) > 0) { foreach ($LOOP["context"] as $val1) { ?>
        <em class="line"><?php echo $val1["key"]; ?></em>: <em class="content"><?php echo $val1["value"]; ?></em><br/>
	<?php }} ?>
</table>
<?php } ?>

