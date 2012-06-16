<?php /* Smarty version Smarty-3.0.7, created on 2012-06-16 23:56:57
         compiled from "F:/www/sibnii/private/smartytemplates/templates/admin/project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248754fdcbad9c344b5-15344838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78dd0596aad5ead44dca598bbdb5949a428c7947' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/admin/project.tpl',
      1 => 1311608820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248754fdcbad9c344b5-15344838',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="background-color:#f0f0f0; padding:5px;"><h1>Проекты</h1></div>


<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

    <h1><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h1>

    <form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ($_smarty_tpl->getVariable('action')->value=='edit'){?>&id=<?php echo $_smarty_tpl->getVariable('project')->value['id'];?>
<?php }?>" method="post">
        <table width="100%">
            <tr>
                <td class="ttovar">Название</td>
                <td class="ttovar"><input name="data[title]" value="<?php echo $_smarty_tpl->getVariable('project')->value['title'];?>
" /></td>
            </tr>
            <tr>
                <td class="ttovar" >Клиент</td>
                <td class="ttovar" ><select name="data[client_id]">
                        <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('client_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
" <?php if (isset($_smarty_tpl->getVariable('project',null,true,false)->value)&&$_smarty_tpl->tpl_vars['client']->value['id']==$_smarty_tpl->getVariable('project')->value['client_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['client']->value['title'];?>
</option>
                        <?php }} ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="ttovar">Текст</td>
                <td class="ttovar"><textarea name="data[description]"><?php echo $_smarty_tpl->getVariable('project')->value['description'];?>
</textarea></td>
            </tr>
            <tr>
                <td class="ttovar">Завершeн</td>
                <td class="ttovar"><input type="checkbox" name="data[is_complite]" <?php if (isset($_smarty_tpl->getVariable('project',null,true,false)->value)&&$_smarty_tpl->getVariable('project')->value['is_complite']){?>checked="checked"<?php }?> style="width:14px;" /></td>
            </tr>
        </table>
        <input id="save" name="save" type="submit" value="Сохранить" />
    </form>
            
<?php }elseif($_smarty_tpl->getVariable('action')->value=='service'){?> 
    
    <h1>Услуги проекта <?php echo $_smarty_tpl->getVariable('project')->value['title'];?>
</h1>
    
    <form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('project')->value['id'];?>
" method="post">
    <?php if ($_smarty_tpl->getVariable('service_list')->value!==false){?>
        <table width="100%">
            <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('service_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
?>
                <tr>
                    <td><input type="checkbox" name="data[project][<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
]" <?php if (in_array($_smarty_tpl->tpl_vars['service']->value['id'],$_smarty_tpl->getVariable('service_array')->value)){?>checked="checked"<?php }?> style="width:14px;" /></td>
                    <td class="ttovar"><?php echo $_smarty_tpl->tpl_vars['service']->value['title'];?>
</td>
                </tr>
            <?php }} ?>
        </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
    <?php }?>
    </form>

<?php }elseif($_smarty_tpl->getVariable('action')->value=='photo_view'){?>  
    
    <h1>Галлерея проекта <?php echo $_smarty_tpl->getVariable('project')->value['title'];?>
</h1>
    
    <?php if ($_smarty_tpl->getVariable('subaction')->value=="add"||$_smarty_tpl->getVariable('subaction')->value=="edit"){?>

    <h1><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h1>

    <form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=photo_view&id=<?php echo $_smarty_tpl->getVariable('project')->value['id'];?>
&subaction=<?php echo $_smarty_tpl->getVariable('subaction')->value;?>
<?php if ($_smarty_tpl->getVariable('subaction')->value=='edit'){?>&img_id=<?php echo $_smarty_tpl->getVariable('img')->value['id'];?>
<?php }?>" method="post" enctype="multipart/form-data">
        <table width="100%">
            <tr>
                <td class="ttovar">Описание</td>
                <td class="ttovar"><input name="data[description]" value="<?php echo $_smarty_tpl->getVariable('img')->value['description'];?>
" /></td>
            </tr>
             <tr>
                <td class="ttovar" >Логотип</td>
                <td class="ttovar" ><?php if (isset($_smarty_tpl->getVariable('img',null,true,false)->value)&&$_smarty_tpl->getVariable('img')->value['img']){?><img src="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
files/<?php echo $_smarty_tpl->getVariable('img')->value['img'];?>
" /><?php }?>
                    <input type="file"  name="img" />
                </td>
            </tr>
        </table>
                    <input type="hidden" name="data[object_id]" value="<?php echo $_smarty_tpl->getVariable('project')->value['id'];?>
"/>            
        <input id="save" name="save" type="submit" value="Сохранить" />
    </form>

<?php }else{ ?>

    <?php if ($_smarty_tpl->getVariable('gallery')->value!==false){?>
        <table width="100%">
            <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gallery')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
?>
                <tr>
                    <td><img src="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
files/<?php echo $_smarty_tpl->tpl_vars['img']->value['img_prew'];?>
"/></td>
                    <td class="ttovar"><?php echo $_smarty_tpl->tpl_vars['img']->value['description'];?>
</td>
                    <td class="tedit"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=photo_view&id=<?php echo $_smarty_tpl->getVariable('project')->value['id'];?>
&subaction=edit&img_id=<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
" class="tedit">редактировать</a><br/><br/>
                        <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=photo_view&id=<?php echo $_smarty_tpl->getVariable('project')->value['id'];?>
&subaction=del&img_id=<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
" class="tdel">удалить</a>
                    </td>
                </tr>
            <?php }} ?>
        </table>
    <?php }?>
    <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=photo_view&id=<?php echo $_smarty_tpl->getVariable('project')->value['id'];?>
&subaction=add">добавить</a>

<?php }?>
    
    
<?php }else{ ?>

    <?php if ($_smarty_tpl->getVariable('project_list')->value!==false){?>
        <table width="100%">
            <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
                <tr>
                    <td class="ttovar"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</td>
                    <td class="tedit"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=service&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
" class="tedit">услуги</a><br/><br/>
                        <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=photo_view&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
" class="tedit">фотографии</a>
                    </td>
                    <td class="tedit"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
" class="tedit">редактировать</a><br/><br/>
                        <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
" class="tdel">удалить</a>
                    </td>
                </tr>
            <?php }} ?>
        </table>
    <?php }?>
    <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">добавить</a>

<?php }?>