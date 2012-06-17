<?php /* Smarty version Smarty-3.0.7, created on 2012-06-17 23:22:00
         compiled from "F:/www/sibnii/private/smartytemplates/templates/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101174fde0428eda617-15419029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37f3fff2ef00e4e7c62925e2848b4befd438ea8c' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/news.tpl',
      1 => 1339945172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101174fde0428eda617-15419029',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'F:\www\sibnii\private\classes\smarty\plugins\modifier.date_format.php';
?><?php if ($_smarty_tpl->getVariable('action')->value=='view_news'){?>

<h2><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('news')->value['date'],"%d.%m.%Y");?>
&nbsp;<?php echo $_smarty_tpl->getVariable('news')->value['title'];?>
</h2>

<p><?php echo $_smarty_tpl->getVariable('news')->value['full_text'];?>
</p>

<br/><br/>
<a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?page=news">Все новости</a>

    <?php }else{ ?>

<h2>Новости</h2>

<div id="news-full">
    <?php if (isset($_smarty_tpl->getVariable('news_list_full',null,true,false)->value)&&$_smarty_tpl->getVariable('news_list_full')->value!=false){?>
            <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_list_full')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
?>
                <div class="item">
                    <p class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],"%d.%m.%Y");?>
</p>

                    <p class="title"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>

                    <p class="descript"><a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?page=news&action=view_news&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['short_text'];?>
</a></p>

                    <div class="arr">&rarr;</div>
                </div>
            <?php }} ?>
        <?php }?>
</div>

<?php }?>