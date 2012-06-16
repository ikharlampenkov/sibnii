<?php /* Smarty version Smarty-3.0.7, created on 2012-06-16 23:57:07
         compiled from "F:/www/sibnii/private/smartytemplates/templates/client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182594fdcbae38b85b6-04583752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f4e1fc400373ca6ad1bdb5f682ebd18e496f75' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/client.tpl',
      1 => 1311613322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182594fdcbae38b85b6-04583752',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('action')->value=='view'){?>

    <table width="100%">
        <tr>
            <td width="110"><?php if (isset($_smarty_tpl->getVariable('client',null,true,false)->value)&&$_smarty_tpl->getVariable('client')->value['logo']){?><img src="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
files/<?php echo $_smarty_tpl->getVariable('client')->value['logo_prew'];?>
" /><?php }?></td>
            <td ><?php echo $_smarty_tpl->getVariable('client')->value['title'];?>
</td>
        </tr>
    </table> 

        <div><?php echo nl2br($_smarty_tpl->getVariable('client')->value['description']);?>
</div>  
        
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

<?php }else{ ?>

    <?php if ($_smarty_tpl->getVariable('client_list')->value!==false){?>
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
                    <td class="ttovar"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=view&id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['title'];?>
</a></td>
                </tr>
            <?php }} ?>
        </table>
    <?php }?>

<?php }?>