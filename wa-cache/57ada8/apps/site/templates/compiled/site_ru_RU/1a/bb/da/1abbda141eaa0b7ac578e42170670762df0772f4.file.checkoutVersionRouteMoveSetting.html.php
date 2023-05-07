<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 18:49:02
         compiled from "C:\xampp\htdocs\wa\wa-apps\shop\templates\includes\checkoutVersionRouteMoveSetting.html" */ ?>
<?php /*%%SmartyHeaderCode:10889484966457d67e7cfe78-90221761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1abbda141eaa0b7ac578e42170670762df0772f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-apps\\shop\\templates\\includes\\checkoutVersionRouteMoveSetting.html',
      1 => 1543322160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10889484966457d67e7cfe78-90221761',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6457d67e806981_81768647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6457d67e806981_81768647')) {function content_6457d67e806981_81768647($_smarty_tpl) {?>


<style>
    .checkout-2-background { background-color: #9cff9e; }
</style>
<script>
    (function ($) {
        var $version_field = $('input[name="params[checkout_version]"]').parents('.field'),
            $theme_field = $('select[name="params[theme_mobile]"]').parents('.field');

        $version_field.insertAfter($theme_field);
    })(jQuery);
</script><?php }} ?>