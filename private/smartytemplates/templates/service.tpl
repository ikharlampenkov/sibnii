{if $action=="view"}

    <table width="100%">
        <tr>
            <td class="ttovar">Название</td>
            <td class="ttovar">{$service.title}</td>
        </tr>
        <tr>
            <td class="ttovar">Текст</td>
            <td class="ttovar">{$service.description|nl2br}</td>
        </tr>
    </table>

{else}

    {if $service_list!==false}
        <ul>
            {foreach from=$service_list item=service}
                <li><a href="?page={$page}&action=view&id={$service.id}">{$service.title}</a></li>
            {/foreach}
        </ul>
    {/if}

{/if}