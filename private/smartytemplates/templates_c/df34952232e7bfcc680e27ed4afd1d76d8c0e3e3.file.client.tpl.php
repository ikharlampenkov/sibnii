<?php /* Smarty version Smarty-3.0.7, created on 2012-06-16 23:56:55
         compiled from "F:/www/sibnii/private/smartytemplates/templates/admin/client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304974fdcbad7d5b187-74724696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df34952232e7bfcc680e27ed4afd1d76d8c0e3e3' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/admin/client.tpl',
      1 => 1311600955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304974fdcbad7d5b187-74724696',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="background-color:#f0f0f0; padding:5px;"><h1>Клиенты</h1></div>


<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

    <h1><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h1>

    <form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ($_smarty_tpl->getVariable('action')->value=='edit'){?>&id=<?php echo $_smarty_tpl->getVariable('client')->value['id'];?>
<?php }?>" method="post" enctype="multipart/form-data">
        <table width="100%">
            <tr>
                <td class="ttovar">Название</td>
                <td class="ttovar"><input name="data[title]" value="<?php echo $_smarty_tpl->getVariable('client')->value['title'];?>
" /></td>
            </tr>
             <tr>
                <td class="ttovar" >Логотип</td>
                <td class="ttovar" ><?php if (isset($_smarty_tpl->getVariable('client',null,true,false)->value)&&$_smarty_tpl->getVariable('client')->value['logo']){?><img src="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
files/<?php echo $_smarty_tpl->getVariable('client')->value['logo'];?>
" /><br />
                    &nbsp;<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del_img&id=<?php echo $_smarty_tpl->getVariable('client')->value['id'];?>
">удалить</a><br /><?php }?>
                    <input type="file"  name="img" />
                </td>
            </tr>
            <tr>
                <td class="ttovar">Профиль деятельности</td>
                <td class="ttovar"><textarea name="data[description]"><?php echo $_smarty_tpl->getVariable('client')->value['description'];?>
</textarea></td>
            </tr> 
        </table>
        <input id="save" name="save" type="submit" value="Сохранить" />
    </form>

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
                    <td class="ttovar"><?php echo $_smarty_tpl->tpl_vars['client']->value['title'];?>
</td>
                    <td class="tedit"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
" class="tedit">редактировать</a><br/><br/>
                        <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
" class="tdel">удалить</a>
                    </td>
                </tr>
            <?php }} ?>
        </table>
    <?php }?>
    <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">добавить</a>

<?php }?>