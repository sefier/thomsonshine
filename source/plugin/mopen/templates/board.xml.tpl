{if:islogin}
	<p class="islogin">{#uid}</p>
{/if}	
{loop:subarea}
<div class="subarea">			
	<h3>{#subarea.name}</h3>				
	{loop:subarea.child}
	<tbody class="editionlist">		
		<h2><a href="index.php?mocmd=topic&amp;fid={#subarea.child.fid}">{#subarea.child.name}</a></h2>	
		<em class="topicnum">{#subarea.child.threads}</em>	
		<em class="threadnum">{#subarea.child.posts}</em>	
	</tbody>
	{/loop}
</div>
{/loop}
<br/>{include:log.xml.tpl}