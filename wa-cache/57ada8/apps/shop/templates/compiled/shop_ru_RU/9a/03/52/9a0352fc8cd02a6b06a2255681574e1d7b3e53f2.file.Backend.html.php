<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 15:59:30
         compiled from "C:\xampp\htdocs\wa\wa-apps\shop\templates\layouts\Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:9636563706457aec26b6d60-18512210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0352fc8cd02a6b06a2255681574e1d7b3e53f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-apps\\shop\\templates\\layouts\\Backend.html',
      1 => 1664959922,
      2 => 'file',
    ),
    '9fd1e503c245ebc0fe669939737d45f71d9b08aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-apps\\shop\\templates\\layouts\\wa2_main_menu.html',
      1 => 1669905702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9636563706457aec26b6d60-18512210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'title' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'wa_app_url' => 0,
    'page' => 0,
    'no_level2' => 0,
    'embedded_version' => 0,
    'rightmost_li_margin' => 0,
    'backend_menu' => 0,
    '_' => 0,
    'tutorial_visible' => 0,
    'tutorial_progress' => 0,
    'current_chapter' => 0,
    'new_orders_count' => 0,
    'frontend_url' => 0,
    'need_checkout_flow_section' => 0,
    'backend_reports' => 0,
    '_inactive' => 0,
    '_active' => 0,
    'backend_orders' => 0,
    'content' => 0,
    '_wa2_main_menu_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6457aec272ea77_74669187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6457aec272ea77_74669187')) {function content_6457aec272ea77_74669187($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include 'C:\\xampp\\htdocs\\wa\\wa-system/vendors/smarty-plugins\\block.wa_js.php';
?><?php $_smarty_tpl->tpl_vars['current_chapter'] = new Smarty_variable(shopHelper::getCurrentChapter(), null, 0);?>

<!DOCTYPE html><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->title(), null, 0);?>
    <title><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['wa']->value->appName() : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars((string)($_tmp1).(" — ").($_tmp2), ENT_QUOTES, 'UTF-8', true);?>
</title>

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>


    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.autocomplete.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-plot/jquery.jqplot.min.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/shop.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" />
    <!-- link your CSS files here -->

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-plot/jquery.jqplot.min.js"></script>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/shop-jquery.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/shop-jquery.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.dialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.history.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.store.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
/js/jquery-ui/js/jquery-ui-1.9.2.custom.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.tmpl.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.retina.js

        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-plot/plugins/jqplot.highlighter.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-plot/plugins/jqplot.cursor.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-plot/plugins/jqplot.dateAxisRenderer.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-plot/plugins/jqplot.pieRenderer.min.js
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/shop-jquery.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if (is_readable("wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-".((string)$_smarty_tpl->tpl_vars['wa']->value->locale()).".js")){?>
        <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-<?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
.js"></script>
    <?php }?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/shop.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=loc&amp;v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.fileupload.js"></script>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>

     

    
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/wa2_main_menu.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/wa2_main_menu.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

    <!-- link your JS files here -->
    <script>
        var menu_floating = true;
        <?php if (in_array($_smarty_tpl->tpl_vars['page']->value,array('settings','importexport','plugins','storefronts','tutorial:default'))){?>
            menu_floating = false;
        <?php }?>
        $(function() {
            $.shop.init({
                jquery_url: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js",
                debug: <?php echo var_export(waSystemConfig::isDebug(),true);?>
,
                menu_floating: menu_floating,
                page: '<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php }else{ ?>orders<?php }?>'
            });
        });
    </script>

</head>
<body>
<div id="wa"<?php if (isset($_smarty_tpl->tpl_vars['no_level2']->value)){?> class="s-no-level2"<?php }?>>

    <?php if (empty($_smarty_tpl->tpl_vars['embedded_version']->value)){?>
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

    <?php }?>

    <div id="wa-app">

        <?php if (empty($_smarty_tpl->tpl_vars['embedded_version']->value)){?>
        <div id="mainmenu"><ul class="tabs"><?php $_smarty_tpl->tpl_vars['rightmost_li_margin'] = new Smarty_variable(' style="margin-right: 30px;"', null, 0);?><?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('settings')){?><li class="small float-right<?php if ($_smarty_tpl->tpl_vars['page']->value=='plugins'){?> selected<?php }else{ ?> no-tab<?php }?>"<?php echo $_smarty_tpl->tpl_vars['rightmost_li_margin']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=plugins">Плагины</a></li><li class="small float-right<?php if ($_smarty_tpl->tpl_vars['page']->value=='settings'){?> selected<?php }else{ ?> no-tab<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=settings">Настройки</a></li><?php $_smarty_tpl->tpl_vars['rightmost_li_margin'] = new Smarty_variable('', null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('importexport')){?><li class="small float-right<?php if ($_smarty_tpl->tpl_vars['page']->value=='importexport'){?> selected<?php }else{ ?> no-tab<?php }?>"<?php echo $_smarty_tpl->tpl_vars['rightmost_li_margin']->value;?>
><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=importexport">Импорт/экспорт</a></li><?php $_smarty_tpl->tpl_vars['rightmost_li_margin'] = new Smarty_variable('', null, 0);?><?php }?><!-- plugin hook: 'backend_menu.aux_li' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['aux_li']);?>
<?php } ?><?php if ($_smarty_tpl->tpl_vars['tutorial_visible']->value){?><li class="s-tutorial-qs-lnk" id="js-menu-tutorial-item"><div class="s-tutorial-quick-start"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=tutorial#/products/" class="s-tutorial-url js-tutorial-url"><div class="s-tutorial-progressbar" id="s-tutorial-progressbar"><img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/rocket-fly.png" class="s-rocket"/><span class="s-tutorial-step-title" style="display: inline-block;">Быстрый старт</span><div class="s-tutorial-progressbar-outer"><div class="s-tutorial-progressbar-inner"></div><span class="s-tutorial-steps" id="s-tutorial-progressbar-content"><span class="js-step-count"><?php echo $_smarty_tpl->tpl_vars['tutorial_progress']->value['complete'];?>
</span> из <?php echo $_smarty_tpl->tpl_vars['tutorial_progress']->value['total'];?>
</span></div></div></a></div></li><?php if ($_smarty_tpl->tpl_vars['tutorial_progress']->value['complete']>0){?><!-- Set tutorial Back link  --><script>$(function() {var step_link = localStorage.getItem('tutorial_step_link');if (step_link) {$('.js-tutorial-url').attr('href', step_link);}});</script><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['current_chapter']->value!=='old_chapter'){?><li class="wa2-menu-toggle-wrapper" id="wa2-menu-toggle-wrapper"><a class="s-toggle" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg></a><script>( function($) {$("#wa2-menu-toggle-wrapper").on("click", function(event) {event.preventDefault();$.wa2_main_menu.get().show();});})(jQuery);</script></li><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('orders')){?><li class="<?php if (!$_smarty_tpl->tpl_vars['page']->value||$_smarty_tpl->tpl_vars['page']->value=='orders'){?>selected<?php }else{ ?>no-tab<?php }?>" id="mainmenu-orders-tab"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=orders#/orders/">Заказы<sup class="red" <?php if ($_smarty_tpl->tpl_vars['page']->value!='orders'&&!empty($_smarty_tpl->tpl_vars['new_orders_count']->value)){?>style="display:inline"<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['new_orders_count']->value)){?><?php echo $_smarty_tpl->tpl_vars['new_orders_count']->value;?>
<?php }?></sup></a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('customers')){?><li class="<?php if ($_smarty_tpl->tpl_vars['page']->value=='customers'){?>selected<?php }else{ ?>no-tab<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=customers">Покупатели</a></li><?php }?><li class="<?php if ($_smarty_tpl->tpl_vars['page']->value=='products'){?>selected<?php }else{ ?>no-tab<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
<?php if ($_smarty_tpl->tpl_vars['current_chapter']->value==='old_chapter'){?>?action=products<?php }else{ ?>products/<?php }?>">Товары</a></li><?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('marketing')){?><li class="<?php if ($_smarty_tpl->tpl_vars['page']->value=='marketing'){?>selected<?php }else{ ?>no-tab<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
marketing/">Маркетинг</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('reports')){?><li class="<?php if ($_smarty_tpl->tpl_vars['page']->value=='reports'){?>selected<?php }else{ ?>no-tab<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=reports">Отчеты</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('design')||$_smarty_tpl->tpl_vars['wa']->value->userRights('pages')){?><li class="<?php if ($_smarty_tpl->tpl_vars['page']->value=='storefronts'){?>selected<?php }else{ ?>no-tab<?php }?> s-storefronts-tab"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=storefronts">Витрина</a></li><?php }?><!-- plugin hook: 'backend_menu.core_li' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['core_li']);?>
<?php } ?><li class="no-tab s-hidden-list" id="s-hidden-list" style="display: none;"><ul class="menu-h dropdown"><li class="no-tab"><a class="s-more-link" href="javascript:void(0);">Еще<i class="icon10 darr"></i></a><ul class="menu-v" style="width: 200px;"></ul></li></ul></li><li class="no-tab s-openstorefront"><a href="<?php echo $_smarty_tpl->tpl_vars['frontend_url']->value;?>
" target="_blank">Открыть витрину</a></li></ul><?php if (!isset($_smarty_tpl->tpl_vars['no_level2']->value)){?><div class="s-level2"><div class="block bordered-bottom"><?php if ($_smarty_tpl->tpl_vars['page']->value=='products'){?><div class="s-search-form"><i class="icon16 ss search-bw"></i><input type="search" placeholder="Поиск товаров" id="s-products-search"></div><?php }elseif($_smarty_tpl->tpl_vars['page']->value=='customers'){?><ul class="menu-h with-icons"><div class="s-search-form"><i class="icon16 ss search-bw"></i><input type="search" placeholder="Поиск покупателей" id="s-customers-search"></div></ul><?php }elseif($_smarty_tpl->tpl_vars['page']->value=='reports'){?><div class="float-right"><ul class="menu-h dropdown s-reports-timeframe" style="float: right;"><li class="hidden s-custom-timeframe">от <input type="text" name="from">до <input type="text" name="to"><select name="groupby"><option value="days">по дням</option><option value="months">по месяцам</option></select></li><li class="s-reports-timeframe-dropdown"><a href="javascript:void(0)" class="inline-link float-right"><b><i></i></b><i class="icon10 darr"></i></a><ul class="menu-v"><li data-timeframe="30" data-groupby="days" class="selected"><a href="javascript:void(0)" class="nowrap"><?php echo _w('Last %d day','Last %d days',30);?>
</a></li><li data-timeframe="90" data-groupby="days" data-default-choice="1"><a href="javascript:void(0)" class="nowrap"><?php echo _w('Last %d day','Last %d days',90);?>
</a></li><li data-timeframe="365" data-groupby="months"><a href="javascript:void(0)" class="nowrap"><?php echo _w('Last %d day','Last %d days',365);?>
</a></li><li data-timeframe="all" data-groupby="months"><a href="javascript:void(0)" class="nowrap">Все время</a></li><li data-timeframe="custom"><a href="javascript:void(0)" class="nowrap">Выбрать даты…</a></li></ul></li></ul><div id="s-reports-custom-controls" class="float-right"></div></div><ul class="menu-h s-reports" id="js-reports-menu-list"><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('reports_simple')){?><li><a href="#/summary/">Продажи</a></li><?php }else{ ?><li><a href="#/sales/">Продажи</a></li><li><a href="#/customers/">Покупатели</a></li><li><a href="#/cohorts/">Когорты</a></li><li><a href="#/products/">Товары</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['need_checkout_flow_section']->value){?><li><a href="#/checkoutflow/">Воронка оформления заказа</a></li><?php }?><!-- plugin hook: 'backend_reports.menu_li' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_reports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['menu_li']);?>
<?php } ?><li class="js-toggle-menu"><a href="javascript:void(0);"><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_inactive", null); ob_start(); ?><i class="icon16 darr"></i>Еще<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_active", null); ob_start(); ?><i class="icon16 uarr"></i>Скрыть<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo $_smarty_tpl->tpl_vars['_inactive']->value;?>
</a>

                                        <script>
                                            ( function($) {
                                                $(document).ready( function() {
                                                    $.reports.initMenuToggle({
                                                        $wrapper: $("#js-reports-menu-list"),
                                                        templates: {
                                                            "active": <?php echo json_encode($_smarty_tpl->tpl_vars['_active']->value);?>
,
                                                            "inactive": <?php echo json_encode($_smarty_tpl->tpl_vars['_inactive']->value);?>

                                                        }
                                                    });
                                                });
                                            })(jQuery);
                                        </script>
                                    </li>

                                </ul>

                            <?php }elseif($_smarty_tpl->tpl_vars['page']->value=='orders'){?>

                                <ul class="menu-h float-right" id="s-orders-views">
                                    <li data-view="split">
                                        <a href="#"title="Список"><i class="icon16 view-splitview"></i></a>
                                    </li>
                                    <li data-view="table">
                                        <a href="#" title="Таблица"><i class="icon16 view-table"></i></a>
                                    </li>

                                    <!-- plugin hook: 'backend_orders.viewmode_li' -->
                                    
                                    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['viewmode_li']);?>
<?php } ?>

                                </ul>

                                <ul class="menu-v dropdown  with-icons float-right s-orders-sort" id="s-orders-sort">
                                    <li>
                                        <a href="javascript:void(0);" class="inline-link s-current-sort" data-sort=""><b><i>
                                            <span class="f-text"></span>
                                        </i></b></a>
                                        <i class="icon10 darr-tiny s-sort-order" style="display: none;" data-order="desc"></i>
                                        <i class="icon10 uarr-tiny s-sort-order" style="display: none;" data-order="asc"></i>
                                        <ul class="menu-v with-icon">
                                            <li class="s-sort" data-sort="create_datetime">
                                                <a href="javascript:void(0);" data-sort="create_datetime">Время создания</a>
                                            </li>
                                            <li class="s-sort" data-sort="updated">
                                                <a href="javascript:void(0);" data-sort="updated">Время обновления</a>
                                            </li>
                                            <li class="s-sort" data-sort="paid_date">
                                                <a href="javascript:void(0);" data-sort="paid_date">Время оплаты</a>
                                            </li>
                                            <li class="s-sort" data-sort="shipping_datetime">
                                                <a href="javascript:void(0);" data-sort="shipping_datetime">Время доставки</a>
                                            </li>
                                            <li class="s-sort" data-sort="state_id">
                                                <a href="javascript:void(0);" data-sort="state_id">Статус заказа</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <div class="s-search-form">
                                    <i class="icon16 ss search-bw"></i>
                                    <input type="search" placeholder="Поиск заказов" id="s-orders-search">
                                </div>

                            <?php }?>

                        </div>
                    </div>
                <?php }?>
            </div>
            <script>
                ( function($) {
                    $.shop.initElasticMenu({
                        $wrapper: $("#mainmenu")
                    });
                })(jQuery);
            </script>
        
        <?php }?>

        <div id="maincontent"<?php if (isset($_smarty_tpl->tpl_vars['no_level2']->value)){?> class="s-no-level2"<?php }?>>
        
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        
        </div>

    </div><!-- #wa-app -->

</div><!-- #wa -->



<div class="dialog width400px height200px" id="s-error-dialog" style="display:none;">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1>Произошла ошибка</h1>
                <p class="f-text"></p>
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <input class="button red cancel" type="button" value="Закрыть">
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', "_wa2_main_menu_html", null); ob_start(); ?><?php /*  Call merged included template "./wa2_main_menu.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./wa2_main_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('parent'=>"scope"), 0, '9636563706457aec26b6d60-18512210');
content_6457aec2718e01_52972855($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./wa2_main_menu.html" */?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<script>
    ( function($) {
        $.wa2_main_menu.init({ html: <?php echo json_encode($_smarty_tpl->tpl_vars['_wa2_main_menu_html']->value);?>
 });
    })(jQuery);
</script>

</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 15:59:30
         compiled from "C:\xampp\htdocs\wa\wa-apps\shop\templates\layouts\wa2_main_menu.html" */ ?>
<?php if ($_valid && !is_callable('content_6457aec2718e01_52972855')) {function content_6457aec2718e01_52972855($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_menu'] = new Smarty_variable(shopMainMenu::get(array('inline_icons'=>true)), null, 0);?>

<div class="wa2-menu-aside">
    <div class="s-aside-body">
        <ul class="menu s-main-menu">
            <?php  $_smarty_tpl->tpl_vars['_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->key => $_smarty_tpl->tpl_vars['_item']->value){
$_smarty_tpl->tpl_vars['_item']->_loop = true;
?>
                <li class="<?php if (!empty($_smarty_tpl->tpl_vars['_item']->value["submenu"])){?>is-restricted<?php }?>">
                    <?php if (!empty($_smarty_tpl->tpl_vars['_item']->value["submenu"])){?>
                        <div class="item js-group-toggle js-<?php echo $_smarty_tpl->tpl_vars['_item']->value["id"];?>
-toggle">
                            <span class="s-icon-main icon"><?php echo $_smarty_tpl->tpl_vars['_item']->value["icon"];?>
</span>
                            <span class="s-name">
                                <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_item']->value["name"], ENT_QUOTES, 'UTF-8', true);?>

                                <span class="s-icon-toggle icon is-expanded">
                                    <svg viewBox="0 0 320 512"><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg>
                                </span>
                                <span class="s-icon-toggle icon">
                                    <svg viewBox="0 0 192 512"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"></path></svg>
                                </span>
                            </span>
                        </div>

                        <ul class="menu s-sub-menu">
                            <?php  $_smarty_tpl->tpl_vars['_sub_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_sub_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_item']->value["submenu"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_sub_item']->key => $_smarty_tpl->tpl_vars['_sub_item']->value){
$_smarty_tpl->tpl_vars['_sub_item']->_loop = true;
?>
                                <li>
                                    <a class="item" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_sub_item']->value["url"], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="s-name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_sub_item']->value["name"], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php }else{ ?>
                        <a class="item" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_item']->value["url"], ENT_QUOTES, 'UTF-8', true);?>
">
                            <span class="s-icon-main icon"><?php echo $_smarty_tpl->tpl_vars['_item']->value["icon"];?>
</span>
                            <span class="s-name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_item']->value["name"], ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    <?php }?>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<?php }} ?>