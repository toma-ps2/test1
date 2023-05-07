<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 13:57:48
         compiled from "C:\xampp\htdocs\wa\wa-apps\site\templates\actions-legacy\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:11825226386457923c97c3a8-73742139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b6e7b3b395e924b3c89c7962b715129375fcd15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-apps\\site\\templates\\actions-legacy\\backend\\BackendLoc.html',
      1 => 1624000810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11825226386457923c97c3a8-73742139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6457923c9cc157_87855678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6457923c9cc157_87855678')) {function content_6457923c9cc157_87855678($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>