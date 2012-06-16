<?php /* Smarty version Smarty-3.0.7, created on 2012-06-16 23:56:56
         compiled from "F:/www/sibnii/private/smartytemplates/templates/admin/service.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99084fdcbad8cba8b1-13742162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d51240392328d0153cb03c840276910412aa0a0' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/admin/service.tpl',
      1 => 1311599532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99084fdcbad8cba8b1-13742162',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="background-color:#f0f0f0; padding:5px;"><h1>Услуги</h1></div>


<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

    <h1><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h1>

    <form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ($_smarty_tpl->getVariable('action')->value=='edit'){?>&id=<?php echo $_smarty_tpl->getVariable('service')->value['id'];?>
<?php }?>" method="post">
        <table width="100%">
            <tr>
                <td class="ttovar">Название</td>
                <td class="ttovar"><input name="data[title]" value="<?php echo $_smarty_tpl->getVariable('service')->value['title'];?>
" /></td>
            </tr>
            <tr>
                <td class="ttovar">Текст</td>
                <td class="ttovar"><textarea name="data[description]"><?php echo $_smarty_tpl->getVariable('service')->value['description'];?>
</textarea></td>
            </tr>
        </table>
        <input id="save" name="save" type="submit" value="Сохранить" />
    </form>

<?php }else{ ?>

    <?php if ($_smarty_tpl->getVariable('service_list')->value!==false){?>
        <table width="100%">
            <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('service_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
?>
                <tr>
                    <td class="ttovar"><?php echo $_smarty_tpl->tpl_vars['service']->value['title'];?>
</td>
                    <td class="tedit"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" class="tedit">редактировать</a><br/><br/>
                        <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" class="tdel">удалить</a>
                    </td>
                </tr>
            <?php }} ?>
        </table>
    <?php }?>
    <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">добавить</a>

<?php }?>