<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 14:15:49
         compiled from "C:\xampp\htdocs\wa\wa-apps\shop\templates\includes\checkoutVersionRouteMoveSetting.html" */ ?>
<?php /*%%SmartyHeaderCode:138548912964579675c7ee28-13789129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '138548912964579675c7ee28-13789129',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_64579675ca14f1_90434299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64579675ca14f1_90434299')) {function content_64579675ca14f1_90434299($_smarty_tpl) {?>


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