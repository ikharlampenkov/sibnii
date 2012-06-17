{if $action=="view"}

<h2>{$project.title}</h2>

<p>Клиент: {$client.title}</p>

<p>{$project.description|nl2br}</p>


{*
    {if $service_list!==false}
    <h4>Услуги</h4>

    <ul>
        {foreach from=$service_list item=service}
            <li><a href="?page=service&action=view&id={$service.id}">{$service.title}</a></li>
        {/foreach}
    </ul>
    {/if}
*}

    {else}

    {if $project_list!==false}
        {foreach from=$project_list item=project}
        <div class="item">

            <p class="date">21.05.2012</p>

            <h2><a href="?page={$page}&action=view&id={$project.id}">{$project.title}</a></h2>

            <p> Наименование и структура государственного органа, органа местного самоуправления, почтовый адрес, адрес электронной почты (при наличии), </p>

        </div>
        {/foreach}
    {/if}

{/if}