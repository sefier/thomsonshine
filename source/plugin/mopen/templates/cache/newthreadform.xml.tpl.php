<?php /* Created:2011-12-02 00:12:26 */ ?>
<?php if ($IF["islogin"]) { ?>
<p class="islogin"><?php echo $VAR["uid"]; ?></p>
<?php } ?>
<a href="index.php?mocmd=newthread" class="posturl">newthreadurl</a>
<input type="hidden" name="fid" id="fid" value="<?php echo $VAR["fid"]; ?>"/>
<input type="hidden" name="formhash" id="formhash" value="<?php echo $VAR["formhash"]; ?>"/>
<?php if ($IF["typeselect"]) { ?>
	<div class="typeid">
	<select name="typeid" id="typeid">
	<?php if (count($LOOP["typename"]) > 0) { foreach ($LOOP["typename"] as $val1) { ?>
		<option value="<?php echo $val1["key"]; ?>"><?php echo $val1["value"]; ?></option>
	<?php }} ?>
	</select>
	</div>
<?php } ?>
<br/><?php include 'log.xml.tpl.php'; ?>

