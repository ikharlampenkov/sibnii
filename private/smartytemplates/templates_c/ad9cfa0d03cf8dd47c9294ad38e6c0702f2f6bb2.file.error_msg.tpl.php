<?php /* Smarty version Smarty-3.0.7, created on 2012-06-16 23:56:46
         compiled from "F:/www/sibnii/private/smartytemplates/templates/error_msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45904fdcbacebd68e2-31080965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad9cfa0d03cf8dd47c9294ad38e6c0702f2f6bb2' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/error_msg.tpl',
      1 => 1311597391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45904fdcbacebd68e2-31080965',
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