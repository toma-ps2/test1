<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 17:59:24
         compiled from "C:\xampp\htdocs\wa\wa-apps\shop\templates\actions\csv\CsvProductsetup.html" */ ?>
<?php /*%%SmartyHeaderCode:19329318256457cadc833d99-38284952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19130d0e040f2078eb1b2600841bf66e3fd00be5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-apps\\shop\\templates\\actions\\csv\\CsvProductsetup.html',
      1 => 1664959922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19329318256457cadc833d99-38284952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'direction' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
    'wa_url' => 0,
    'name' => 0,
    'template' => 0,
    'profiles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6457cadc904cc2_00373959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6457cadc904cc2_00373959')) {function content_6457cadc904cc2_00373959($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\wa\\wa-system\\vendors\\smarty3\\plugins\\modifier.replace.php';
?><div class="block double-padded s-csv-settings" id="s-csvproduct-form">
    <form id="s-csvproduct" method="post" action="?module=csv&action=productrun">
        <input type="hidden" name="direction" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        <div class="fields form" style="width: 100%;">
            <?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['direction']->value)===null||$tmp==='' ? 'import' : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("./CsvProductsetup.".$_tmp1.".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </form>
</div>

<div class="clear"></div>


<?php if ($_smarty_tpl->tpl_vars['direction']->value=='import'){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tmpl.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.iframe-transport.js"></script>
<?php }?>

<?php if (!empty(Smarty::$_smarty_vars['capture'])){?><?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = Smarty::$_smarty_vars['capture']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['template']->key;
?> <?php if (strpos($_smarty_tpl->tpl_vars['name']->value,'template-js')){?>
    <script type="text/x-jquery-tmpl" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
<!-- begin <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template']->value,'</','<\\/');?>
 end <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 -->

    </script>
<?php }?> <?php } ?><?php }?>

<script type="text/javascript">
    
    if ($.importexport.csv_productInit) {
        $.importexport.csv_productInit();
    } else {
        $.getScript('<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/csv/csvproduct.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
', function () {
            $.importexport.csv_productInit();
        });
    }
    $.importexport.profiles.set('csv:product:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8', true);?>
', <?php echo json_encode($_smarty_tpl->tpl_vars['profiles']->value);?>
);

</script>
<?php }} ?>