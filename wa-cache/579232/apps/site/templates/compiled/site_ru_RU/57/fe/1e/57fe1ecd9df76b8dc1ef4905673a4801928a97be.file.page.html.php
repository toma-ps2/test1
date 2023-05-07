<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 13:57:51
         compiled from "C:\xampp\htdocs\wa\wa-data\public\site\themes\default\page.html" */ ?>
<?php /*%%SmartyHeaderCode:3223158806457923f9a26c6-98578871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57fe1ecd9df76b8dc1ef4905673a4801928a97be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-data\\public\\site\\themes\\default\\page.html',
      1 => 1683386193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3223158806457923f9a26c6-98578871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'page' => 0,
    'wa' => 0,
    'subpages' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6457923fa15dc4_90292211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6457923fa15dc4_90292211')) {function content_6457923fa15dc4_90292211($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?>
    <div class="breadcrumbs"itemprop="breadcrumb">
        <?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value){
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['url'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['breadcrumb']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a> <span class="rarr">&rarr;</span>
        <?php } ?>
    </div>
<?php }?>

<h1 itemprop="name"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['name'])===null||$tmp==='' ? '(no name)' : $tmp);?>
</h1>

<?php $_smarty_tpl->tpl_vars['subpages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages((($tmp = @$_smarty_tpl->tpl_vars['page']->value['id'])===null||$tmp==='' ? null : $tmp)), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['subpages']->value){?>
    <ul class="sub-links">
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subpages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></li>
        <?php } ?>
    </ul>
<?php }?>

<div id="page" role="main" itemprop="description">
    <?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

</div>
    
<div class="clear-both"></div><?php }} ?>