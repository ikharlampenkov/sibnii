<?php /* Smarty version Smarty-3.0.7, created on 2011-07-19 23:42:02
         compiled from "H:/www/eshop/private/smartytemplates/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287394e25b3da627de8-71128662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ac71442ec59b7522cedab4786614a65829cf80f' => 
    array (
      0 => 'H:/www/eshop/private/smartytemplates/templates/index.tpl',
      1 => 1311091914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287394e25b3da627de8-71128662',
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

        <style >
			body {
				font-family:tahoma;
			}
            input {
    width: 99%;
            }

            textarea {
    width: 99%;
    height: 200px;
            }

            #save {
    width: 100px;
            }


        </style>

        <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

    </head>
    <body>
        <?php $_template = new Smarty_Internal_Template("error_msg.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

        <?php if ($_smarty_tpl->getVariable('login')->value==false){?>

            <table width="100%" height="100%" cellpadding="10" cellspacing="10" border="0">
                <tr>
                    <td valign="middle" align="center">

                        <table height="100" width="300" cellpadding="10" cellspacing="0" border="0" style="background-color:#69aefc">
                        <form method="post" style="margin:0px; padding:0px;">
                            <tr><td></td><td style="font-size:26px; color: white;padding-left: 25px;">eSHOP</td></tr>
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

</body>
</html>