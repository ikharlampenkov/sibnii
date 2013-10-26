<?php /* Smarty version Smarty-3.0.7, created on 2012-09-26 23:17:00
         compiled from "F:/www/sibnii/private/smartytemplates/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2224050632a7c37b470-09325951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef37665bcc80d87a3c42929057f30b93e28d0abf' => 
    array (
      0 => 'F:/www/sibnii/private/smartytemplates/templates/index.tpl',
      1 => 1348676217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2224050632a7c37b470-09325951',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'F:\www\sibnii\private\classes\smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="favicon.ico"/>
	<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>

    <script type="text/javascript" src="/js/swfobject.js"></script>
    <script type="text/javascript" src="/js/banner.js"></script>
    <!--[if lte IE 6]>
    <script src="js/png.js"></script>
    <script>DD_belatedPNG.fix('div, a, img, span');</script>
    <![endif]-->
    <!--[if !IE 7]>
    <style type="text/css">
        #wrap {
            display: table;
            height: 100%
        }
    </style>
    <![endif]-->

    <script language="JavaScript" type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script language="JavaScript" type="text/javascript" src="fancybox/jquery.easing-1.3.pack.js"></script>
    <script language="JavaScript" type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#clients_slider').slides({
				preload: true
				//generateNextPrev: true
			});
		});
	</script>
    <link href="/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/js/fancybox.js"></script>

</head>
<body>
<div id="triangl_fon"></div>
<div id="header">
    <div class="logo"><a href="/"><img src="/images/logo.jpg" width=100% height=100%/></a></div>

    <div id="mainmenu">
        <ul class="menu">
            <li><a href="?page=content_page&title=about" <?php if ($_smarty_tpl->getVariable('page')->value!='project'&&$_smarty_tpl->getVariable('page')->value!='service'){?>class="selected"<?php }?>>Компания</a>
                <ul>
                    <li><a href="?page=content_page&title=about">О Компании</a></li>
                    <li><a href="?page=content_page&title=naprav">Направления деятельности</a></li>
                    <li><a href="?page=license">Лицензии и допуски СРО</a></li>
                    <li><a href="?page=personal">Руководство</a></li>
                    <li><a href="?page=content_page&title=vacancy">Вакансии</a></li>
                    <li><a href="?page=content_page&title=rekvisite">Реквизиты</a></li>
                    <li><a href="?page=content_page&title=contacts">Контакты</a></li>
                </ul>
            </li>
            <li><a href="?page=service" <?php if ($_smarty_tpl->getVariable('page')->value=='service'){?>class="selected"<?php }?>>Услуги</a></li>
            <li><a href="?page=project" <?php if ($_smarty_tpl->getVariable('page')->value=='project'){?>class="selected"<?php }?>>Проекты</a></li>

        </ul>
    </div>

    <div class="phone">
        <!-- <div class="phone1">
            <p class="code">8 (3842)</p> 45-35-86
            <div class="phone_icon"></div>
            <p>телефон для справок</p>
        </div>
        <div class="phone2">
            <p class="code">8 (3842)</p> 45-35-82
            <div class="phone_icon_fax"></div>
            <p>факс</p>
        </div> -->
		<div class="phone2"><a href="mailto:info@sibnii.pro">info@sibnii.pro</a></div>
		<p>Адрес для обратной связи</p>
    </div>
    <div class="swf">
        <div id="swfobject"></div>
    </div>


    <div class="news">
        <h2>Новости</h2>

    <?php if (isset($_smarty_tpl->getVariable('news_list_main',null,true,false)->value)&&$_smarty_tpl->getVariable('news_list_main')->value!=false){?>
        <?php  $_smarty_tpl->tpl_vars['news_main'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_list_main')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['news_main']->key => $_smarty_tpl->tpl_vars['news_main']->value){
?>
            <div class="item">
                <p class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news_main']->value['date'],"%d.%m.%Y");?>
</p>

                <p class="title"><?php echo $_smarty_tpl->tpl_vars['news_main']->value['title'];?>
</p>

                <p class="descript"><a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?page=news&action=view_news&id=<?php echo $_smarty_tpl->tpl_vars['news_main']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news_main']->value['short_text'];?>
</a></p>

                <div class="arr">&rarr;</div>
            </div>
        <?php }} ?>
    <?php }?>

    </div>


    <div class="page_title"><h1><?php if ($_smarty_tpl->getVariable('page')->value=='project'){?>Проекты<?php }elseif($_smarty_tpl->getVariable('page')->value=='service'){?>Услуги<?php }else{ ?>Компания<?php }?></h1></div>

</div>

<div id="content">
<?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <?php }else{ ?>
<?php $_template = new Smarty_Internal_Template("service.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>
</div>

<?php if (isset($_smarty_tpl->getVariable('gallery',null,true,false)->value)&&$_smarty_tpl->getVariable('gallery')->value!==false){?>

<div id="photo_slider">
    <div class="title">Галерея фотографий</div>
    <div class="slider">
        <div class="arrl"></div>
        <div class="arrr"></div>
        <div id="cont">
            <ul class="items">
                <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gallery')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
?>
                    <li>
                        <div class="sliderim">
                            <a class="group_image" rel="group" href="/files/<?php echo $_smarty_tpl->tpl_vars['img']->value['img'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['img']->value['description'];?>
">
                                <img class="photo_thumb_img" src="/files/<?php echo $_smarty_tpl->tpl_vars['img']->value['img_prew'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['img']->value['description'];?>
" border="0" height="120"/>
                            </a>

                        </div>
                    </li>
                <?php }} ?>
            </ul>
        </div>


    </div>

</div>

    <?php }else{ ?>
<div id="clients_slider">
    <div class="clients">Наши клиенты</div>
    <div class="slider">
        <div class="arrl"></div>
        <div class="arrr"></div>
        <div id="cont">
            <ul class="items">
                <?php if ($_smarty_tpl->getVariable('client_list_main')->value!==false){?>
                    <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('client_list_main')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
?>
                <li>
                    <div class="sliderim" style="background:url(<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
files/<?php echo $_smarty_tpl->tpl_vars['client']->value['logo_prew'];?>
)" title="<?php echo $_smarty_tpl->tpl_vars['client']->value['title'];?>
"></div>
                </li>
                    <?php }} ?>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<?php }?>


<div class="pad"></div>
<div id="footer">
    <div class="copyr"><?php echo smarty_modifier_date_format(time(),"%Y");?>
 &copy;  ООО "СибНИИуглепроект"</div>
    <div id="footmenu">
        <ul class="menu">
            <li><a href="?page=content_page&title=contacts" <?php if ($_smarty_tpl->getVariable('page')->value=='content_page'&&$_smarty_tpl->getVariable('conpage_title')->value=='contacts'){?>class="selected"<?php }?>>Контакты</a></li>
            <li><a href="?page=content_page&title=about" <?php if ($_smarty_tpl->getVariable('page')->value=='content_page'&&$_smarty_tpl->getVariable('conpage_title')->value=='about'){?>class="selected"<?php }?>>Компания</a></li>
            <li><a href="?page=service" <?php if ($_smarty_tpl->getVariable('page')->value=='service'){?>class="selected"<?php }?>>Услуги</a></li>
            <li><a href="?page=project" <?php if ($_smarty_tpl->getVariable('page')->value=='project'){?>class="selected"<?php }?>>Проекты</a></li>
			<li><a href="?page=buklet" class="selected">Буклет</a></li>
        </ul>
    </div>
</div>

</body>
</html>