{if:debug}
<table class="log">
	{loop:context}
        <em class="line">{#context.key}</em>: <em class="content">{#context.value}</em><br/>
	{/loop}
</table>
{/if}