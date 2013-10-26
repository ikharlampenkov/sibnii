<div style="background-color:#f0f0f0; padding:5px;"><h1>Услуги</h1></div>


{if $action=="add" || $action=="edit"}

    <h1>{$txt}</h1>

    <form action="/admin/?page={$page}&action={$action}{if $action=='edit'}&id={$service.id}{/if}" method="post">
        <table width="100%">
            <tr>
                <td class="ttovar" style="width: 100px;">Название</td>
                <td class="ttovar"><input name="data[title]" value="{$service.title}" /></td>
            </tr>
            <tr>
                <td class="ttovar">Текст</td>
                <td class="ttovar">{$ckeditor}{*<textarea name="data[description]">{$service.description}</textarea>*}</td>
            </tr>
        </table>
        <input id="save" name="save" type="submit" value="Сохранить" />
    </form>

{else}

    {if $service_list!==false}
        <table width="100%">
            {foreach from=$service_list item=service}
                <tr>
                    <td class="ttovar">{$service.title}</td>
                    <td class="tedit"><a href="/admin/?page={$page}&action=edit&id={$service.id}" class="tedit">редактировать</a><br/><br/>
                        <a href="/admin/?page={$page}&action=del&id={$service.id}" class="tdel">удалить</a>
                    </td>
                </tr>
            {/foreach}
        </table>
    {/if}
    <a href="/admin/?page={$page}&action=add">добавить</a>

{/if}