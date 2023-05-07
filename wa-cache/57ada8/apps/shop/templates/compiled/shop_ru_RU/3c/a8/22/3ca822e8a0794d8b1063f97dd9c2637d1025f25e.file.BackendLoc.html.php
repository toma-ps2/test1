<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 15:59:32
         compiled from "C:\xampp\htdocs\wa\wa-apps\shop\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:14477577586457aec4ee2873-97913148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ca822e8a0794d8b1063f97dd9c2637d1025f25e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-apps\\shop\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1543322160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14477577586457aec4ee2873-97913148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6457aec4f16b28_47791604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6457aec4f16b28_47791604')) {function content_6457aec4f16b28_47791604($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>