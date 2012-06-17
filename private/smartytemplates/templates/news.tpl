{if $action=='view_news'}

<h2>{$news.date|date_format:"%d.%m.%Y"}&nbsp;{$news.title}</h2>

<p>{$news.full_text}</p>

<br/><br/>
<a href="{$siteurl}?page=news">Все новости</a>

    {else}

<h2>Новости</h2>

<div id="news-full">
    {if isset($news_list_full) && $news_list_full != false}
            {foreach from=$news_list_full item=news}
                <div class="item">
                    <p class="date">{$news.date|date_format:"%d.%m.%Y"}</p>

                    <p class="title">{$news.title}</p>

                    <p class="descript"><a href="{$siteurl}?page=news&action=view_news&id={$news.id}">{$news.short_text}</a></p>

                    <div class="arr">&rarr;</div>
                </div>
            {/foreach}
        {/if}
</div>

{/if}