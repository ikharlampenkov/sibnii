<div style="background-color:#f0f0f0; padding:5px;"><h1>Новости и события</h1></div>

{if $action=='view_news'}

    <div>{$news.date|date_format:"%d.%m.%Y"}&nbsp;{$news.title}</div><br />
    <div>{$news.full_text}</div>

    <br/><br/>
    <a href="{$siteurl}?page=news" >Все новости</a>

{else}

    {foreach from=$news_list_full item=news}
        <div>{$news.date|date_format:"%d.%m.%Y"}&nbsp;{if !isset($news_category)}<b>{$news.category_title}</b>&nbsp;{/if}{$news.title}</div>
        <div>{$news.short_text}</div>
    {if $news.full_text}<a href="{$siteurl}?page=news&action=view_news&id={$news.id}&category={$news.news_category_id}">подробнее...</a><br/>{/if}
    <br/>
{/foreach}

{/if}