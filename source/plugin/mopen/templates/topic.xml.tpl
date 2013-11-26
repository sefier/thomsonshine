<title>{#navtitle}</title>
{if:islogin}
	<p class="islogin">{#uid}</p>
{/if}
<div class="postform">
{if:allowpost}	
	<a href="index.php?mocmd=newthreadform&amp;fid={#fid}" class="newthread">post</a>	
{/if}
</div>
{loop:sublist}
<div class="subedition">
	<h2><a href="index.php?mocmd=topic&amp;fid={#sublist.fid}">{#sublist.name}</a></h2>		
	<em class="topicnum">{#sublist.threads}</em>/<em class="threadnum">{#sublist.posts}</em>
</div>
{/loop}
{loop:threadlist}
	<div class="topic">
	{if:threadlist.displayorder}
		<a href="index.php?mocmd=thread&amp;fid={#threadlist.fid}&amp;tid={#threadlist.tid}" class="top">{&threadlist.typeid}{#threadlist.subject}</a>		
	{else}	
		<a href="index.php?mocmd=thread&amp;fid={#threadlist.fid}&amp;tid={#threadlist.tid}" class="normal">{&threadlist.typeid}{#threadlist.subject}</a>
	{/if}	
	<p><em class="replynum">{#threadlist.replies}</em>/<em class="viewnum">{#threadlist.views}</em></p>
	<p><em class="lastauthor">{#threadlist.lastposter}</em>/<em class="lastdate">{#threadlist.lastpost}</em></p>
	{if:threadlist.attachment}
		<p><em class="attach">attach</em></p>
	{/if}	
	{if:threadlist.weeknew}
		<p><em class="update">update</em></p>
	{/if}
	</div>
{/loop}
<div class="pages">
<strong class="currpage">{#currpage}</strong>
<a href="index.php?mocmd=topic&amp;fid={#fid}&amp;page={#totalpage}" class="totalpage">{#totalpage}</a>
</div>
<br/>{include:log.xml.tpl}