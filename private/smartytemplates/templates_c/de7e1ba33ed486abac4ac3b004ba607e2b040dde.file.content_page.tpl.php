<?php /* Smarty version Smarty-3.0.7, created on 2012-06-17 23:22:49
         compiled from "F:/www/sibnii/private/smartytemplates/templates/content_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58964fde04594e2f98-72444402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de7e1ba33ed486abac4ac3b004ba607e2b040dde' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/content_page.tpl',
      1 => 1339943641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58964fde04594e2f98-72444402',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2><?php echo $_smarty_tpl->getVariable('conpage')->value['title'];?>
</h2>

<p><?php echo nl2br($_smarty_tpl->getVariable('conpage')->value['content']);?>
</p>