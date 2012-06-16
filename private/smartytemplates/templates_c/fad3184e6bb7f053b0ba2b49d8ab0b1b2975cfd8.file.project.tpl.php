<?php /* Smarty version Smarty-3.0.7, created on 2012-06-16 23:57:05
         compiled from "F:/www/sibnii/private/smartytemplates/templates/project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216374fdcbae1444757-64735169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad3184e6bb7f053b0ba2b49d8ab0b1b2975cfd8' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/project.tpl',
      1 => 1311613208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216374fdcbae1444757-64735169',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('action')->value=="view"){?>

    <h1><?php echo $_smarty_tpl->getVariable('project')->value['title'];?>
</h1>

    <div>Клиент: <?php echo $_smarty_tpl->getVariable('client')->value['title'];?>
</div><br/>

    <div><?php echo nl2br($_smarty_tpl->getVariable('project')->value['description']);?>
</div>


    

    <?php if ($_smarty_tpl->getVariable('service_list')->value!==false){?>
        <h4>Услуги</h4>
        
        <ul>
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

    

    <?php if ($_smarty_tpl->getVariable('gallery')->value!==false){?>
        <h4>Галлерея проекта</h4>
        
        <table width="100%">
            <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gallery')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
?>
                <tr>
                    <td><img src="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
files/<?php echo $_smarty_tpl->tpl_vars['img']->value['img_prew'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['img']->value['description'];?>
"/></td>
                </tr>
            <?php }} ?>
        </table>
    <?php }?>   

<?php }else{ ?>

    <?php if ($_smarty_tpl->getVariable('project_list')->value!==false){?>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
                <li><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=view&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</a></li>
            <?php }} ?>
        </ul>
    <?php }?>

<?php }?>