<?php /* Smarty version Smarty-3.0.7, created on 2011-07-25 19:48:09
         compiled from "H:/www/sibnii/private/smartytemplates/templates/error_msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34874e2d66099fa8c1-40908622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff3c2c635c16bc535290589ecb529a9f1a6e3680' => 
    array (
      0 => 'H:/www/sibnii/private/smartytemplates/templates/error_msg.tpl',
      1 => 1311597391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34874e2d66099fa8c1-40908622',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('exception')->value){?>
<script>
function closeErrorMsg()
{
 o_errorblock = document.getElementById("errorblock");
 o_errorblock.style.display = "none";
}
</script>
<div style="background-color:#ffffd7; border : 1px solid Black; font-size:12px; color:#000000; width:400px;" id="errorblock">
<div>Сообщение об ошибке: <?php echo $_smarty_tpl->getVariable('e_message')->value;?>
</div>
<div>Код ошибки: <?php echo $_smarty_tpl->getVariable('e_code')->value;?>
</div>
<input type="button" value="Закрыть" onclick="closeErrorMsg();">
</div>
<?php }?>