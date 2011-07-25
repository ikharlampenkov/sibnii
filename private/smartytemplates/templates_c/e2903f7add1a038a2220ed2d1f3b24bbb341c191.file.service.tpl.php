<?php /* Smarty version Smarty-3.0.7, created on 2011-07-25 23:25:33
         compiled from "H:/www/sibnii/private/smartytemplates/templates/service.tpl" */ ?>
<?php /*%%SmartyHeaderCode:321884e2d98fd326062-95751989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2903f7add1a038a2220ed2d1f3b24bbb341c191' => 
    array (
      0 => 'H:/www/sibnii/private/smartytemplates/templates/service.tpl',
      1 => 1311611130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321884e2d98fd326062-95751989',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('action')->value=="view"){?>

    <table width="100%">
        <tr>
            <td class="ttovar">Название</td>
            <td class="ttovar"><?php echo $_smarty_tpl->getVariable('service')->value['title'];?>
</td>
        </tr>
        <tr>
            <td class="ttovar">Текст</td>
            <td class="ttovar"><?php echo nl2br($_smarty_tpl->getVariable('service')->value['description']);?>
</td>
        </tr>
    </table>

<?php }else{ ?>

    <?php if ($_smarty_tpl->getVariable('service_list')->value!==false){?>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('service_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
?>
                <li><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=view&id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['title'];?>
</a></li>
            <?php }} ?>
        </ul>
    <?php }?>

<?php }?>