<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 15:59:34
         compiled from "C:\xampp\htdocs\wa\wa-apps\shop\templates\actions\backend\BackendStorefronts.html" */ ?>
<?php /*%%SmartyHeaderCode:14057640236457aec6a22563-88928204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b162cf84f3f0895f2b80db8df5a18c67355713a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-apps\\shop\\templates\\actions\\backend\\BackendStorefronts.html',
      1 => 1543322160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14057640236457aec6a22563-88928204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6457aec6a56e40_99337929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6457aec6a56e40_99337929')) {function content_6457aec6a56e40_99337929($_smarty_tpl) {?><div class="sidebar right15px">
    <div class="block s-nolevel2-sidebar"></div>
</div>
<div class="sidebar left15px">
    <div class="block s-nolevel2-sidebar"></div>
</div>

<div class="content right15px left15px s-nolevel2-box" id="s-storefronts-content" <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('design')){?>data-design="1"<?php }?> <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('pages')){?>data-pages="1"<?php }?>>
    <div class="block double-padded s-settings-form">
        Загрузка...
        <i class="icon16 loading"></i>
    </div>

    <div class="clear"></div>
    <!-- settings placeholder -->
</div>

<div class="clear"></div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/storefronts.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">
    $.storefronts.init();
</script><?php }} ?>