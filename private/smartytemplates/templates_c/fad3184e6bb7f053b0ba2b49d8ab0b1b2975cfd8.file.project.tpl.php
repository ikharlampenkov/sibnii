<?php /* Smarty version Smarty-3.0.7, created on 2012-09-26 21:18:29
         compiled from "F:/www/sibnii/private/smartytemplates/templates/project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:667550630eb5dfc788-16731567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad3184e6bb7f053b0ba2b49d8ab0b1b2975cfd8' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/project.tpl',
      1 => 1348664985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '667550630eb5dfc788-16731567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('action')->value=="view"){?>

<h2><?php echo $_smarty_tpl->getVariable('project')->value['title'];?>
</h2>

<p>Клиент: <?php echo $_smarty_tpl->getVariable('client')->value['title'];?>
</p>

<p><?php echo $_smarty_tpl->getVariable('project')->value['description'];?>
</p>

    <?php }else{ ?>

    <?php if ($_smarty_tpl->getVariable('project_list')->value!==false){?>
        <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
        <div class="item">

            <p class="date">21.05.2012</p>

            <h2><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=view&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</a></h2>

            <p> Наименование и структура государственного органа, органа местного самоуправления, почтовый адрес, адрес электронной почты (при наличии), </p>

        </div>
        <?php }} ?>
    <?php }?>

<?php }?>