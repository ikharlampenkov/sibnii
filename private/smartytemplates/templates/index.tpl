<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title>{$title}</title>

    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>

    <script type="text/javascript" src="/js/swfobject.js"></script>
    <script type='text/javascript'>
        swfobject.embedSWF("/images/banner.swf", "swfobject", "562", "141", "9.0.0", false, { link1:"" }, { wmode:"transparent" }, { });

    </script>
    <!--[if lte IE 6]>
    <script src="js/png.js"></script>
    <script>DD_belatedPNG.fix('div, a, img, span');</script>
    <![endif]-->
    <!--[if !IE 7]>
    <style type="text/css">
        #wrap {
            display: table;
            height: 100%
        }
    </style>
    <![endif]-->

    <script language="JavaScript" type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script language="JavaScript" type="text/javascript" src="fancybox/jquery.easing-1.4.pack.js"></script>
    <script language="JavaScript" type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <link href="/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">

        $(document).ready(function () {
            $("a.group_image").fancybox({
                'padding':10,
                'autoScale':false,
                'transitionIn':'elastic',
                'transitionOut':'elastic',
                'speedIn':600,
                'speedOut':200,
                'overlayShow':true,
                'overlayOpacity':0.8,
                'cyclic':true,
                'scrolling':'auto'
            });

        });


    </script>

</head>
<body>
<div id="triangl_fon"></div>
<div id="header">
    <div class="logo"><a href="/"></a></div>

    <div id="mainmenu">
        <ul class="menu">
            <li><a href="?page=content_page&title=about" {if $page!='project' && $page!='service'}class="selected"{/if}>Компания</a>
                <ul>
                    <li><a href="?page=content_page&title=about">О Компании</a></li>
                    <li><a href="?page=content_page&title=naprav">Направления деятельности</a></li>
                    <li><a href="?page=license">Лицензии и допуски СРО</a></li>
                    <li><a href="?page=personal">Руководство</a></li>
                    <li><a href="?page=content_page&title=vacancy">Вакансии</a></li>
                    <li><a href="?page=content_page&title=rekvisite">Реквизиты</a></li>
                    <li><a href="?page=content_page&title=contacts">Контакты</a></li>
                </ul>
            </li>
            <li><a href="?page=service" {if $page=='service'}class="selected"{/if}>Услуги</a></li>
            <li><a href="?page=project" {if $page=='project'}class="selected"{/if}>Проекты</a></li>

        </ul>
    </div>

    <div class="phone">
        <div class="phone1">
            <p class="code">8 (3842)</p> 45-35-86
            <div class="phone_icon"></div>
            <p>телефон для справок</p>
        </div>
        <div class="phone2">
            <p class="code">8 (3842)</p> 45-35-82
            <div class="phone_icon_fax"></div>
            <p>факс</p>
        </div>
        <p class="mail"><a href="mailto:info@sibnii.pro">info@sibnii.pro</a></p>
    </div>
    <div class="swf">
        <div id="swfobject"></div>
    </div>


    <div class="news">
        <h2>Новости</h2>

    {if isset($news_list_main) && $news_list_main != false}
        {foreach from=$news_list_main item=news}
            <div class="item">
                <p class="date">{$news.date|date_format:"%d.%m.%Y"}</p>

                <p class="title">{$news.title}</p>

                <p class="descript"><a href="{$siteurl}?page=news&action=view_news&id={$news.id}">{$news.short_text}</a></p>

                <div class="arr">&rarr;</div>
            </div>
        {/foreach}
    {/if}

    </div>


    <div class="page_title"><h1>{if $page=='project'}Проекты{elseif $page=='service'}Услуги{else}Компания{/if}</h1></div>

</div>

<div id="content">
{if isset($page) && !empty($page)}
{include file="$page.tpl"}
    {else}
{include file="service.tpl"}
{/if}
</div>

{if isset($gallery) && $gallery!==false}

<div id="photo_slider">
    <div class="title">Галерея фотографий</div>
    <div class="slider">
        <div class="arrl"></div>
        <div class="arrr"></div>
        <div id="cont">
            <ul class="items">
                {foreach from=$gallery item=img}
                    <li>
                        <div class="sliderim">
                            <a class="group_image" rel="group" href="{$siteurl}files/{$img.img}" title="{$img.description}">
                                <img class="photo_thumb_img" src="{$siteurl}files/{$img.img_prew}" alt="{$img.description}" border="0" height="120"/>
                            </a>

                        </div>
                    </li>
                {/foreach}
            </ul>
        </div>


    </div>

</div>

    {else}
<div id="clients_slider">
    <div class="clients">Наши клиенты</div>
    <div class="slider">
        <div class="arrl"></div>
        <div class="arrr"></div>
        <div id="cont">
            <ul class="items">
                {if $client_list_main!==false}
                    {foreach from=$client_list_main item=client}
                <li>
                    <div class="sliderim" style="background:url({$siteurl}files/{$client.logo_prew})" title="{$client.title}"></div>
                </li>
                    {/foreach}
                {/if}
            </ul>
        </div>
    </div>
</div>
{/if}


<div class="pad"></div>
<div id="footer">
    <div class="copyr"> &copy; {$smarty.now|date_format:"%Y"}, ООО "СибНИИуглероект"</div>
    <div id="footmenu">
        <ul class="menu">
            <li><a href="?page=content_page&title=contacts" {if $page=='content_page' && $conpage_title=='contacts'}class="selected"{/if}>Контакты</a></li>
            <li><a href="?page=content_page&title=about" {if $page=='content_page' && $conpage_title=='about'}class="selected"{/if}>Компания</a></li>
            <li><a href="?page=service" {if $page=='service'}class="selected"{/if}>Услуги</a></li>
            <li><a href="?page=project" {if $page=='project'}class="selected"{/if}>Проекты</a></li>
        </ul>
    </div>
</div>

</body>
</html>