<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 13:58:00
         compiled from "C:\xampp\htdocs\wa\wa-data\public\shop\themes\default\head.html" */ ?>
<?php /*%%SmartyHeaderCode:1624046492645792481f5425-59892802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3499a4f0854ea7d5373a6c636227669c3ac1aecd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-data\\public\\shop\\themes\\default\\head.html',
      1 => 1683386193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1624046492645792481f5425-59892802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_active_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'wa_static_url' => 0,
    'filters' => 0,
    '_filter' => 0,
    'wa_url' => 0,
    '_lang' => 0,
    'nofollow' => 0,
    'frontend_head' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_64579248231489_26918166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64579248231489_26918166')) {function content_64579248231489_26918166($_smarty_tpl) {?><!-- shop app css -->
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
default.shop.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
css/order.css?v=<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquery.bxslider.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquerycountdowntimer/css/jquery.countdownTimer.css" rel="stylesheet">

<!-- js -->
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquery.bxslider.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquerycountdowntimer/jquery.countdownTimer.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-plugins/jquery.cookie.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
default.shop.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-plugins/jquery.retina.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script>$(window).load(function() {
    $('.promo img').retina({ force_original_dimensions: false });
    $('.product-list img,.product-info img,.cart img').retina();;
    $('.bestsellers img').retina();
});
</script>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.all.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" rel="stylesheet" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.slider.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <?php  $_smarty_tpl->tpl_vars['_filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_filter']->key => $_smarty_tpl->tpl_vars['_filter']->value){
$_smarty_tpl->tpl_vars['_filter']->_loop = true;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['_filter']->value['type'])&&$_smarty_tpl->tpl_vars['_filter']->value['type']==="range.date"){?>
            <?php $_smarty_tpl->tpl_vars['_lang'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['wa']->value->locale(),0,2), null, 0);?>
            <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.datepicker.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
            <?php if ($_smarty_tpl->tpl_vars['_lang']->value!=="en"){?>
                <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-<?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
.js"></script>
            <?php }?>
            <?php break 1?>
        <?php }?>
    <?php } ?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['nofollow']->value)){?>
    <!-- "nofollow" for pages not to be indexed, e.g. customer account -->
    <meta name="robots" content="noindex,nofollow" />
<?php }?>

<!-- plugin hook: 'frontend_head' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_head']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
<?php }} ?>