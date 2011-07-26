<html>

    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"></meta>
        <meta name="DESCRIPTION" content="{$description}"></meta>
        <meta name="keywords" content="{$keywords}"></meta>
        <meta name="author-corporate" content=""></meta>
        <meta name="publisher-email" content=""></meta>

        <style>
            body { margin: 0px; padding: 0px; font-family: tahoma; }
        </style>

        <title>{$title}</title>

    </head>

    <body>

        <div style="position:absolute; top:40px; left: 40px; z-index:100;"><img src="/i/logo.jpg" /></div>
        <div style="position:absolute; top:50px; right:50px;">О КОМПАНИИ / УСЛУГИ / ГАЛЛЕРЕЯ ПРОЕКТОВ</div>

        <div style="background-color: #efeeee; width:100%; height: 69px; position:absolute; bottom:5%;z-index: -1000">
            <table width="100%" height="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="text-align:center; font-size:18px; width: 300px;">НАШИ КЛИЕНТЫ:</td>
                    <td width="39"><img src="/i/left.gif"></td>
                    <td align="center"><img src="/i/kru.gif"></td>
                    <td align="center"><img src="/i/sds.gif"></td>
                    <td align="center"><img src="/i/ugmk.gif"></td>
                    <td width="39"><img src="/i/right.gif"></td>
                    <td width="20%">&nbsp;</td>
                </tr>
            </table>
        </div>

        <div style="width:100%; height: 32px; position:absolute; bottom:0px;">КОНТАКТЫ О КОМПАНИИ <a href="?page=service">УСЛУГИ</a> <a href="?page=project">ГАЛЛЕРЕЯ ПРОЕКТОВ</a> <a href="?page=client">Клиенты</a> <a href="?page=project&is_complite=1">Выполненные работы</a> <a href="?page=project&is_complite=0">Текущие работы</a> </div>

        <div style="background-image: url('/i/fon2.gif'); width:100%; height: 100%; background-position: right top; background-repeat: no-repeat">


            <div style="position:absolute; top:350px; left: 30px; font-size: 100%">
                {if isset($page) && !empty($page)}
                    {include file="$page.tpl"}
                {else}
                    {include file="service.tpl"}
                {/if}
                {*
                <ul>
                <li>Выполнение проектной документации по разработке месторождений твердых полезных ископаемых.</li>
                <li>Проекты ликвидации и консервации горных выработок.</li>
                <li>Проекты переработки минерального сырья.</li>
                <li>Проектирование автомобильных и железных дорог и их хозяйств.</li>
                <li>Проектирование промышленных и гражданских объектов (все разделы проектной документации).</li>
                <li>Проектирование объектов инфраструктуры.</li>
                <li>Проекты охраны окружающей среды.</li>
                <li>Функции генерального проектировщика.</li>
                <li>Авторский надзор за строительством.</li>
                </ul>
                *}
            </div>

            <div style="position:absolute; top:150px; right: 40px; z-index:100;"><img src="/i/phone.gif"></div>

            <div style="position:absolute; top:248px; left: 0px; z-index:100; background-image: url('/i/leftblock.gif'); width:188px; height: 41px; color: white; font-size: 18px;padding-left: 40px;padding-top: 16px;">УСЛУГИ</div>

            <div style="position:absolute; top:100px; width:1000; height: 212px; right: 177px;">

                <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/ cabs/flash/swflash. cab#version=9,0,29,0" width="800" height="212">
                    <PARAM name="movie" value="/i/flash.swf">
                    <PARAM name="quality" value="high">
                    <EMBED src="/i/flash.swf"
                           QUALITY="best" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"
                           TYPE="application/x-shockwave-flash" width="800" height="212" wmode="transparent">
                    </EMBED>
                </OBJECT>

            </div>



        </div>

    </dody>
</html>