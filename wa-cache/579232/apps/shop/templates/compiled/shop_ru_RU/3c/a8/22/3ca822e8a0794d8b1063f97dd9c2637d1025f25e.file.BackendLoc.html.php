<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 13:59:33
         compiled from "C:\xampp\htdocs\wa\wa-apps\shop\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:1701597488645792a56b1dc3-88375632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1701597488645792a56b1dc3-88375632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_645792a5713aa4_79049841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_645792a5713aa4_79049841')) {function content_645792a5713aa4_79049841($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>