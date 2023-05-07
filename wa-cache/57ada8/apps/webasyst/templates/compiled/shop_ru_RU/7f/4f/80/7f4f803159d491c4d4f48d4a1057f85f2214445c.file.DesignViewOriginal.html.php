<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 15:59:49
         compiled from "C:\xampp\htdocs\wa\wa-system\design\templates-legacy\DesignViewOriginal.html" */ ?>
<?php /*%%SmartyHeaderCode:12337391016457aed560bd22-42597959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f4f803159d491c4d4f48d4a1057f85f2214445c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-system\\design\\templates-legacy\\DesignViewOriginal.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12337391016457aed560bd22-42597959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6457aed5682ec0_03352261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6457aed5682ec0_03352261')) {function content_6457aed5682ec0_03352261($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['file']->value)){?>
<h1><span class="grey"><?php echo $_smarty_tpl->tpl_vars['file']->value['theme_path'];?>
</span><?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
</h1>
<div id="wa-design-original" style="width: 100%; height: 200px;"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['file']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
</div>
<script>
    $(function () {
        var editor = ace.edit('wa-design-original');
        ace.config.set("basePath", wa_url + 'wa-content/js/ace/');
        editor.setTheme("ace/theme/eclipse");
        var session = editor.getSession();
        <?php if (substr($_smarty_tpl->tpl_vars['file']->value['id'],-3)=='css'){?>
        session.setMode("ace/mode/css");
        <?php }elseif(substr($_smarty_tpl->tpl_vars['file']->value['id'],-2)=='js'){?>
        session.setMode("ace/mode/javascript");
        <?php }else{ ?>
        session.setMode("ace/mode/css");
        session.setMode("ace/mode/javascript");
        session.setMode("ace/mode/smarty");
        <?php }?>
        session.setUseWrapMode(true);
        editor.renderer.setShowGutter(false);
        editor.setShowPrintMargin(false);
        editor.setFontSize(13);
        editor.setHighlightActiveLine(false);
        editor.setReadOnly(true);

        setTimeout(function () {
            var newHeight = editor.getSession().getScreenLength() * editor.renderer.lineHeight + editor.renderer.scrollBar.getWidth();
            newHeight *= 1.02;
            if (newHeight < 220) {
                newHeight = 220;
            }
            $('#wa-design-original').height(newHeight.toString() + "px");
            editor.resize();
        }, 50);
    });
</script>
<?php }?><?php }} ?>