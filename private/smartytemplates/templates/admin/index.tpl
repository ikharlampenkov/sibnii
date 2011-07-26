<html>

    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"></meta>
        <meta name="DESCRIPTION" content="{$description}"></meta>
        <meta name="keywords" content="{$keywords}"></meta>
        <meta name="author-corporate" content=""></meta>
        <meta name="publisher-email" content=""></meta>

        <style>
            body { margin: 0px; padding: 0px; font-family: tahoma; }

            h1 {

			font-size: 20px;
			font-weight: normal;
            }

            body {
				font-family:tahoma;
            }
            tr {
   vertical-align: top;
            }

            input {
    width: 100%;
            }

            textarea {
    width: 100%;
    height: 200px;
            }

            #save {
    width: 100px;
            }

            .menu {
            	color: #69aefc;
            	font-weight: bold;
            }
            .menu:hover {
			color: #69aefc;
            	font-weight: bold;
			text-decoration: none;
            }
            .rmenu {
			color: #1465c0;
            }
            .rmenu:hover {
			 #1465c0;
			text-decoration: none;
            }

            .tedit {
			background-color:#ebf4ff; padding: 10px; width:100px;
            }
            .tdel {
			background-color:#ebf4ff; padding: 10px; width:50px;
            }
            a.tdel {
			color: #830000;
            }
            a.tedit {
			color: #1465c0;
            }
            .ttovar {
			background-color:#f7f7f7; padding: 10px;
            }
            .ttovarred {
			background-color:#ffdede; padding: 10px;
            }


            a { color:#1465c0}

        </style>

        {*<script type="text/javascript" language="javascript" src="/js/jquery.min.js" ></script>
        <script type="text/javascript" language="javascript" src="/js/main.js" ></script>*}

        <title>{$title}</title>

    </head>

    <body>

        {include file="error_msg.tpl"}

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

                <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0" align="center">
                    <tr>
                        <td valign="top" height="40">

                            <table width="100%" height="40" cellpadding="0" cellspacing="0" border="0" style="background-color:#69aefc">
                                <tr>
                                    <td style="font-size:26px; color: white;padding-left: 25px;" valign="middle">административная панель управения</td>
                                    <td width="300" valign="middle" style="color:white">

                                        Пользователь: {$user} &nbsp; / &nbsp; <a href="{$siteurl}?logout" style="color:black">Выйти</a>

                                    </td>
                                </tr>
                            </table>


                        </td>
                    </tr>
                    <tr>
                        <td>

                            <table border="0" cellpadding="20" width="100%">
                                <tr>
                                    <td width="230">

                                        <table border="0" cellpadding="10" cellspacing="10" width="100%" height="100%" style="background-color:#f0f0f0">
                                            <tr><td><h1>Меню:</h1></td></tr>
                                            <tr><td><a href="?page=content_page" class="menu">Контентные страницы</a></td></tr>
                                            <tr><td><a href="?page=user" class="menu">Пользователи</a></td></tr>
                                            <tr><td><a href="?page=client" class="menu">Клиенты</a></td></tr>
                                            <tr><td><a href="?page=service" class="menu">Услуги</a></td></tr>
                                            <tr><td><a href="?page=project" class="menu">Проекты</a></td></tr>
                                            <tr><td><a href="?page=license" class="menu">Лицензии</a></td></tr>
                                            <tr><td><a href="?page=personal" class="menu">Сотрудники</a></td></tr>
                                            <tr><td><a href="?page=news" class="menu">Новости и события</a></td></tr>
                                        </table>

                                    </td>
                                    <td>
                                        {if isset($page) && !empty($page)}
                                            {include file="admin/$page.tpl"}
                                        {else}
                                            {include file="admin/service.tpl"}
                                        {/if}
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>

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

    </body>
</html>