<div style="background-color:#f0f0f0; padding:5px;"><h1>Клиенты</h1></div>


{if $action=="add" || $action=="edit"}

    <h1>{$txt}</h1>

    <form action="/admin/?page={$page}&action={$action}{if $action=='edit'}&id={$client.id}{/if}" method="post" enctype="multipart/form-data">
        <table width="100%">
            <tr>
                <td class="ttovar" style="width: 100px;">Название</td>
                <td class="ttovar"><input name="data[title]" value="{$client.title}" /></td>
            </tr>
             <tr>
                <td class="ttovar" >Логотип</td>
                <td class="ttovar" >{if isset($client) && $client.logo}<img src="{$siteurl}files/{$client.logo}" /><br />
                    &nbsp;<a href="/admin/?page={$page}&action=del_img&id={$client.id}">удалить</a><br />{/if}
                    <input type="file"  name="img" />
                </td>
            </tr>
            <tr>
                <td class="ttovar">Профиль деятельности</td>
                <td class="ttovar">{$ckeditor}{*<textarea name="data[description]">{$client.description}</textarea>*}</td>
            </tr>
        </table>
        <input id="save" name="save" type="submit" value="Сохранить" />
    </form>

{else}

    {if $client_list!==false}
        <table width="100%">
            {foreach from=$client_list item=client}
                <tr>
                    <td class="ttovar">{if $client.logo_prew}<img src="{$siteurl}files/{$client.logo_prew}"/>{else}&nbsp;{/if}</td>
                    <td class="ttovar">{$client.title}</td>
                    <td class="tedit"><a href="/admin/?page={$page}&action=edit&id={$client.id}" class="tedit">редактировать</a><br/><br/>
                        <a href="/admin/?page={$page}&action=del&id={$client.id}" class="tdel">удалить</a>
                    </td>
                </tr>
            {/foreach}
        </table>
    {/if}
    <a href="/admin/?page={$page}&action=add">добавить</a>

{/if}