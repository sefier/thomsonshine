<title>{#navtitle}</title>
{if:islogin}
	<p class="islogin">{#uid}</p>
{/if}
<div class="pages">
<strong class="currpage">{#currpage}</strong>
<a href="index.php?mocmd=thread&amp;fid={#fid}&amp;tid={#tid}&amp;page={#totalpage}" class="totalpage">{#totalpage}</a>
</div>
<div class="postform">
{if:allowpostreply}	
	<a href="index.php?mocmd=newreplyform&amp;fid={#fid}&amp;tid={#tid}" class="newreply">reply</a>	
{/if}
{if:allowpost}	
	<a href="index.php?mocmd=newthreadform&amp;fid={#fid}" class="newthread">post</a>	
{/if}
</div>
{loop:postlist}
        <table class="threadcontent">
        <em class="author">{#postlist.authoras}</em>
        <em class="floor">{#postlist.number}</em>
        <em class="posttime">{#postlist.dbdateline}</em>
        <h3 class="title">{#postlist.subject}</h3>
        <!--content start--><div class="content">{#postlist.message}</div><!--content end-->
        </table>
{/loop}
<br/>{include:log.xml.tpl}