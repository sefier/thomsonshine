<?php /* Created:2011-10-15 20:10:07 */ ?>
<?php if ($IF["islogin"]) { ?>
<p class="islogin"><?php echo $VAR["uid"]; ?></p>
<?php } ?>
<a href="index.php?mocmd=newreply" class="posturl">newreplyurl</a>
<input type="hidden" name="fid" id="fid" value="<?php echo $VAR["fid"]; ?>"/>
<input type="hidden" name="tid" id="tid" value="<?php echo $VAR["tid"]; ?>"/>
<input type="hidden" name="formhash" id="formhash" value="<?php echo $VAR["formhash"]; ?>"/>
<br/><?php include 'log.xml.tpl.php'; ?>

