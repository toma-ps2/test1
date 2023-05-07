<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 13:57:54
         compiled from "C:\xampp\htdocs\wa\wa-data\public\site\themes\default\main.html" */ ?>
<?php /*%%SmartyHeaderCode:1597857197645792424d1488-45226694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13592c37ddae049ef93a840e92a6f81347bc7c01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-data\\public\\site\\themes\\default\\main.html',
      1 => 1683386193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1597857197645792424d1488-45226694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_url' => 0,
    'page' => 0,
    'wa_backend_url' => 0,
    'content' => 0,
    'action' => 0,
    'theme_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_645792424f6993_14327251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_645792424f6993_14327251')) {function content_645792424f6993_14327251($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value&&(empty($_smarty_tpl->tpl_vars['page']->value['id'])&&empty($_smarty_tpl->tpl_vars['page']->value['content']))){?>

    <div class="welcome">
        <h1>Добро пожаловать на ваш новый сайт!</h1>
        <p><?php echo sprintf('Перейдите в раздел «<a href="%s">Страницы</a>» и создайте страницу с пустым адресом. Здесь вы увидите её текст.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('site/#/pages/'));?>
</p>
    </div>

<?php }else{ ?>

    <article class="content with-sidebar" itemscope itemtype="http://schema.org/WebPage">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
 
    </article>

    <?php if (isset($_smarty_tpl->tpl_vars['page']->value)&&(empty($_smarty_tpl->tpl_vars['action']->value)||$_smarty_tpl->tpl_vars['action']->value=='page')){?>
        <div class="content">

            <!-- FOLLOW -->
            <aside class="connect inline">
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'])){?>
                    <div class="likebox">
                        <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'];?>

                    </div>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'])){?>
                    <div class="likebox">
                        <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'];?>

                    </div>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'])){?>
                    <div class="likebox">
                        <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'];?>

                    </div>
                <?php }?>
                
            </aside>

        </div>
    <?php }?>

<?php }?><?php }} ?>