{if:islogin}
<p class="islogin">{#uid}</p>
{/if}
<a href="index.php?mocmd=newreply" class="posturl">newreplyurl</a>
<input type="hidden" name="fid" id="fid" value="{#fid}"/>
<input type="hidden" name="tid" id="tid" value="{#tid}"/>
<input type="hidden" name="formhash" id="formhash" value="{#formhash}"/>
<br/>{include:log.xml.tpl}