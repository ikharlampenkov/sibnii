<h2>Лицензии</h2>

{if $license_list!==false}
<table>
	{foreach from=$license_list item=license}
		{if $license.id == 1}
			<tr><td>{$license.description}</td></tr>
		{/if}
	{/foreach}
	<tr><td>
	{foreach from=$license_list item=license}
		{if $license.id != 1}
			<div style="float: left;display: block;width: 45%; margin: 15px; /*border: 1px dotted blue;*/">
				{if $license.img_prew}
					<a href="{$siteurl}files/{$license.img}" target="_blank">
					<img style="float: left; margin: 5px 15px 5px 0; cursor: zoom;" src="{$siteurl}files/{$license.img_prew}" alt="Щелкните для увеличения" border="0" />
					</a>
				{else}&nbsp;{/if}
				<br /><div style="padding: 10px;">{$license.description}</div>
			</div>
		{/if}
	{/foreach}
	</td></tr>
</table>
{/if}