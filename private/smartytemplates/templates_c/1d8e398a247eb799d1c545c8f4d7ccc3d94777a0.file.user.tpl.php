<?php /* Smarty version Smarty-3.0.7, created on 2012-06-16 23:56:54
         compiled from "F:/www/sibnii/private/smartytemplates/templates/admin/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116934fdcbad68f0bc1-44713392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d8e398a247eb799d1c545c8f4d7ccc3d94777a0' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/admin/user.tpl',
      1 => 1311598153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116934fdcbad68f0bc1-44713392',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="background-color:#f0f0f0; padding:5px;"><h1>ПОЛЬЗОВАТЕЛИ</h1></div>


<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

    <h1><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h1>

    <form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ($_smarty_tpl->getVariable('action')->value=="edit"){?>&login=<?php echo $_smarty_tpl->getVariable('user')->value['login'];?>
<?php }?>" method="post">
        <table width="100%">
            <tr>
                <td class="ttovar"  width="200">Логин</td>
                <td class="ttovar" ><input name="data[login]" value="<?php echo $_smarty_tpl->getVariable('user')->value['login'];?>
"  /></td>
            </tr>
            <tr>
                <td class="ttovar" >Пароль</td>
                <td class="ttovar"><input name="data[password]" value="<?php echo $_smarty_tpl->getVariable('user')->value['password'];?>
" /></td>
            </tr>
            <tr>
                <td class="ttovar" >Роль</td>
                <td class="ttovar"><select name="data[role]" >
                        <?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('role_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
" <?php if (isset($_smarty_tpl->getVariable('user',null,true,false)->value)&&$_smarty_tpl->getVariable('user')->value['role']==$_smarty_tpl->tpl_vars['role']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</option>
                        <?php }} ?>
                    </select>
                </td>
            </tr>
        </table>
        <input id="save" name="save" type="submit" value="Сохранить" />
    </form>

<?php }else{ ?>

    <?php if ($_smarty_tpl->getVariable('user_list')->value!==false){?>
        <table width="100%">
        <tr>
                    <td class="ttovar" align="center" colspan="3"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">добавить</a></td></tr>
            <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
?>
                <tr>
                    <td class="ttovar" ><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
</td>
                    <td class="ttovar" ><?php echo $_smarty_tpl->tpl_vars['user']->value['role'];?>
</td>
                    <td class="tedit" ><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&login=<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
">редактировать</a><br />
                                       <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&login=<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
" onclick="return confirmDelete('<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
');" style="color: #830000">удалить</a> </td>
                </tr>
            <?php }} ?>
        </table>
    <?php }?>

    

<?php }?>