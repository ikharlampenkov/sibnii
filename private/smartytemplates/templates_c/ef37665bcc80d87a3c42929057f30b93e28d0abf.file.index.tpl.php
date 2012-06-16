<?php /* Smarty version Smarty-3.0.7, created on 2011-09-18 22:00:26
         compiled from "F:/www/sibnii/private/smartytemplates/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10464e76078a37a299-71292976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef37665bcc80d87a3c42929057f30b93e28d0abf' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/index.tpl',
      1 => 1311613393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10464e76078a37a299-71292976',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>

    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"></meta>
        <meta name="DESCRIPTION" content="<?php echo $_smarty_tpl->getVariable('description')->value;?>
"></meta>
        <meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
"></meta>
        <meta name="author-corporate" content=""></meta>
        <meta name="publisher-email" content=""></meta>

        <style>
            body { margin: 0px; padding: 0px; font-family: tahoma; }
        </style>

        <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

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
                <?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
                    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                <?php }else{ ?>
                    <?php $_template = new Smarty_Internal_Template("service.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>   
                <?php }?>
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

        <?php if ($_smarty_tpl->getVariable('login')->value==false){?>

            <table width="100%" height="100%" cellpadding="10" cellspacing="10" border="0">
                <tr>
                    <td valign="middle" align="center">

                        <table height="100" width="300" cellpadding="10" cellspacing="0" border="0" style="background-color:#69aefc">
                            <form method="post" style="margin:0px; padding:0px;">
                                <tr><td></td><td style="font-size:26px; color: white;padding-left: 25px;"></td></tr>
                                <tr><td style="color:white">Логин: </td><td><input name="login" type="text" style="width:190px;border:10px;font-size: 16px;"></td></tr>
                                <tr><td style="color:white">Пароль:</td><td><input name="psw" type="password" style="width:190px;border:10px;font-size: 16px;"></td></tr>
                                <tr><td>&nbsp;</td><td><input type="submit" value="Войти" style="width:190px;font-size: 16px;"></td></tr>     
                                <tr><td></td><td><?php if (isset($_smarty_tpl->getVariable('login_fail',null,true,false)->value)){?><div style="color:white; font-weight:bold; font-size:12px;">Невервный логин и пароль.</div><?php }?></td></tr>

                            </form>
                        </table>


                    </td>
                </tr>
            </table>

        <?php }else{ ?>

        <?php }?>

    </dody>
</html>