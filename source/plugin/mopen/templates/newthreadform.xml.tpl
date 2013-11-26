{if:islogin}
<p class="islogin">{#uid}</p>
{/if}
<a href="index.php?mocmd=newthread" class="posturl">newthreadurl</a>
<input type="hidden" name="fid" id="fid" value="{#fid}"/>
<input type="hidden" name="formhash" id="formhash" value="{#formhash}"/>
{if:typeselect}
	<div class="typeid">
	<select name="typeid" id="typeid">
	{loop:typename}
		<option value="{#typename.key}">{#typename.value}</option>
	{/loop}
	</select>
	</div>
{/if}
<br/>{include:log.xml.tpl}