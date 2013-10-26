<?php /* Smarty version Smarty-3.0.7, created on 2012-09-26 20:28:00
         compiled from "F:/www/sibnii/private/smartytemplates/templates/service.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15920506302e0be5060-57511502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c4f091c2967bd4aa59704e1a582827821972801' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/service.tpl',
      1 => 1348664985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15920506302e0be5060-57511502',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('action')->value=="view"){?>

<h2><?php echo $_smarty_tpl->getVariable('service')->value['title'];?>
</h2>

<p><?php echo $_smarty_tpl->getVariable('service')->value['description'];?>
</p>


    <?php if ($_smarty_tpl->getVariable('project_list')->value!==false){?>
        <h4>Проекты</h4>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
                <li><a href="?page=project&action=view&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</a></li>
            <?php }} ?>
        </ul>
    <?php }?>

    <?php if ($_smarty_tpl->getVariable('client_list')->value!==false){?>
        <h4>Клиенты</h4>

        <table width="100%">
            <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('client_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
?>
                <tr>
                    <td><?php if ($_smarty_tpl->tpl_vars['client']->value['logo_prew']){?><img src="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
files/<?php echo $_smarty_tpl->tpl_vars['client']->value['logo_prew'];?>
"/><?php }else{ ?>&nbsp;<?php }?></td>
                    <td class="ttovar"><a href="?page=client&action=view&id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['title'];?>
</a></td>
                </tr>
            <?php }} ?>
        </table>
    <?php }?>

<?php }else{ ?>

    <?php if ($_smarty_tpl->getVariable('service_list')->value!==false){?>
        <ul class="list_serv">
            <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('service_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
?>
                <li><a href="?page=service&action=view&id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['title'];?>
</a></li>
            <?php }} ?>
        </ul>
    <?php }?>

<?php }?>