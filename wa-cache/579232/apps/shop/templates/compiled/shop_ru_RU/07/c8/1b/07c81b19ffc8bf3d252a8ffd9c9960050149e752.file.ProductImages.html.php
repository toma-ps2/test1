<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 15:31:12
         compiled from "C:\xampp\htdocs\wa\wa-apps\shop\templates\actions\product\ProductImages.html" */ ?>
<?php /*%%SmartyHeaderCode:3915156246457a8201d8be8-51525852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07c81b19ffc8bf3d252a8ffd9c9960050149e752' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-apps\\shop\\templates\\actions\\product\\ProductImages.html',
      1 => 1654778991,
      2 => 'file',
    ),
    '04442d18ab3cb2bdb554af251b75f7ef42bb346a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-apps\\shop\\templates\\actions\\product\\include.imageUpload.html',
      1 => 1664959922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3915156246457a8201d8be8-51525852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'backend_product_edit' => 0,
    '_' => 0,
    'images' => 0,
    'id' => 0,
    'image' => 0,
    'badges' => 0,
    'bid' => 0,
    'product' => 0,
    'b' => 0,
    'custom_setted' => 0,
    'product_id' => 0,
    'wa' => 0,
    'placeholder' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6457a820254e79_85350468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6457a820254e79_85350468')) {function content_6457a820254e79_85350468($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['placeholder'] = new Smarty_variable('добавить описание', null, 0);?>

<!-- plugin hook: 'backend_product_edit.images' -->

<?php if (!empty($_smarty_tpl->tpl_vars['backend_product_edit']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['images']);?>
<?php } ?><?php }?>

<?php if ($_smarty_tpl->tpl_vars['images']->value){?>
    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
        <?php $_smarty_tpl->createLocalArrayVariable('images', null, 0);
$_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['id']->value]['description'] = htmlspecialchars((string)(($tmp = @$_smarty_tpl->tpl_vars['image']->value['description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
    <?php } ?>
<?php }?>

<div class="sidebar right200px" id="s-product-images-toolbar">

    <div class="block s-product-images-actions">
        <h6 class="heading">Наклейка</h6>
        <ul class="menu-v with-icons" id="photo-organize-menu">

            <!-- plugin hook: 'backend_product_edit.image_toolbar_badge_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_product_edit']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['image_toolbar_badge_li']);?>
<?php } ?><?php }?>

            <?php $_smarty_tpl->tpl_vars['badges'] = new Smarty_variable(shopProductModel::badges(), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['bid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['badges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['bid']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
                <li data-action='set-badge' <?php if ($_smarty_tpl->tpl_vars['bid']->value==$_smarty_tpl->tpl_vars['product']->value['badge']){?>class="selected"<?php }?> data-type="<?php echo $_smarty_tpl->tpl_vars['bid']->value;?>
">
                    <a href="#"><i class="icon16 ss <?php echo $_smarty_tpl->tpl_vars['bid']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
</a>
                </li>
            <?php } ?>
            <?php $_smarty_tpl->tpl_vars['custom_setted'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['badge']!==null&&!isset($_smarty_tpl->tpl_vars['badges']->value[$_smarty_tpl->tpl_vars['product']->value['badge']]), null, 0);?>
            <li data-action='set-custom-badge' data-type="custom" <?php if ($_smarty_tpl->tpl_vars['custom_setted']->value){?>class="selected"<?php }?>>
                <a href="#"><i class="icon16 ss div"></i>Другой</a><span class="small editable"></span>
                <div id="s-product-set-custom-badge" <?php if (!$_smarty_tpl->tpl_vars['custom_setted']->value){?>style="display:none;"<?php }?>>
                    <textarea name="code" id="s-product-set-custom-badge-code" style="min-height: 100px; margin: 10px 0 5px;"><?php if ($_smarty_tpl->tpl_vars['custom_setted']->value){?><?php echo $_smarty_tpl->tpl_vars['product']->value['badge'];?>
<?php }else{ ?><div class="badge" style="background-color: #a1fcff;"><span>ВАШ ТЕКСТ</span></div><?php }?></textarea>
                    <input type="button" value="Установить наклейку">
                </div>
            </li>
            <li class="top-padded" data-action='delete-badge'><a href="#"><i class="icon16 no-bw"></i>Удалить наклейку</a></li>
        </ul>
    </div>

</div>

<div class="content right200px">

    <div id="s-product-video-block">

        <form id="s-product-video" style="margin-top: 1rem;">
            <div>
                <input type="text" name="url" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['video_url'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo htmlspecialchars((string)_w("Video URL on YouTube, Vimeo or Rutube"), ENT_QUOTES, 'UTF-8', true);?>
" class="long">
                <input type="submit" value="Добавить видео">
                <i class="icon16 loading" style="display: none; margin-top: 5px;"></i>
                <i class="icon16 yes" style="margin-top: 5px;<?php if (!$_smarty_tpl->tpl_vars['product']->value['video_url']){?> display: none;<?php }?>"></i>
                <a class="small s-product-video-unlink"
                    style="<?php if (!$_smarty_tpl->tpl_vars['product']->value['video_url']){?> display: none;<?php }?>"
                    href="javascript:void(0);"
                    data-confirm="Видео товара будет удалено. Продолжить?">Удалить видео
                </a>
            </div>
            <p>
                <em class="s-product-video-error-url errormsg" style="display: none;"></em>
            </p>
        </form>
    </div>

    <form id="fileupload" action="?module=product&amp;action=imageUpload" method="POST" enctype="multipart/form-data">
        <div class="s-image-upload-dropbox">
        	<a href="javascript:void(0);" id="s-upload-images-link" class="fileinput-button">
                <i class="icon16 upload"></i>Выберите изображения<input type="file" name="files[]" multiple=""></a>
        	<span class="gray">или перетащите их сюда, чтобы начать загрузку</span>
        </div>

        <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>


        <?php /*  Call merged included template "./include.imageUpload.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./include.imageUpload.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3915156246457a8201d8be8-51525852');
content_6457a82023f409_06292032($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.imageUpload.html" */?>

    </form>
    <ul class="thumbs li250px" id="s-product-image-list"></ul>
</div>

<script type="text/javascript">

$.product_images.init({
    product_id:   '<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
',
    placeholder: '<?php echo $_smarty_tpl->tpl_vars['placeholder']->value;?>
',
    images: <?php echo json_encode(array_values($_smarty_tpl->tpl_vars['images']->value));?>
,
    count: <?php echo count($_smarty_tpl->tpl_vars['images']->value);?>
,
    enable_2x: <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?>true<?php }else{ ?>false<?php }?>,

    // handler triggered after drag-n-drop sort
    onSort: function(id, before_id) {

        // update product profile image list
        var product_view_images_list = $('#s-product-view .s-product-image-crops');
        var item = product_view_images_list.find('li[data-image-id=' + id + ']');
        if (before_id) {
            product_view_images_list.find('li[data-image-id=' + before_id + ']').before(item);
        } else {
            product_view_images_list.append(item);
        }

        // update images for sku settings blocks
        var sku_settings_blocks = $('#shop-productprofile .js-sku-settings');
        sku_settings_blocks.each(function() {
            var self   = $(this);
            var sku_id = self.attr('data-id');

            var image_crops = self.find('.s-product-image-crops');
            var item = image_crops.find('li[data-image-id=' + id + ']');
            if (before_id) {
                image_crops.find('li[data-image-id=' + before_id + ']').before(item);
            } else {
                image_crops.append(item);
            }
        });
    }

});

var saveProductVideo = function () {
    var form = $('#s-product-video');
    form.find('.loading').show();
    form.find('.error').removeClass();
    form.find('.errormsg').hide();
    $.shop.jsonPost(
        '?module=productVideoSave&id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
',
        form.serialize(),
        function (r) {
            form.find('.loading').hide();
            form.find('.yes').show();
            if (!r.data.product.video_url) {
                setTimeout(function() {
                    form.find('.yes').hide();
                    form.find('.s-product-video-unlink').hide();
                }, 250);
            } else {
                setTimeout(function () {
                    form.find('.s-product-video-unlink').show();
                }, 250);
            }
        },
        function (r) {
            var errors = (r && r.errors) || [];
            form.find('.loading').hide();
            $.each(errors, function (i, error) {
                var input = form.find('[name="' + error.name + '"]');
                input.addClass('error');
                form.find('.s-product-video-error-url').show().text(error.msg);
            });
        }
    );
};

(function (form) {
    form.submit(function(e) {
        e.preventDefault();
        saveProductVideo();
    });
    form.find('.s-product-video-unlink').click(function () {
        if (confirm($(this).data('confirm'))) {
            form.find('[name=url]').val('');
            saveProductVideo();
        }
    });
})($('#s-product-video'));

</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 15:31:12
         compiled from "C:\xampp\htdocs\wa\wa-apps\shop\templates\actions\product\include.imageUpload.html" */ ?>
<?php if ($_valid && !is_callable('content_6457a82023f409_06292032')) {function content_6457a82023f409_06292032($_smarty_tpl) {?><div class="dialog width500px height400px s-drop-files-here-zone" id="s-image-uploader">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <div id="s-upload-step1">
                    <div id="s-upload-imagelist">
                        <ul class="zebra files"></ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <div id="s-upload-step1-buttons">
                    <div class="block float-right" style="padding-top: 13px;">
                        <a href="#" class="hint cancel">Прервать</a>
                    </div>
                    <div class="block">
                        <div class="progressbar blue small width300px float-left">
                            <div class="progressbar-outer">
                                <div class="progressbar-inner fileupload-progressbar" id="s-upload-progressbar"></div>
                            </div>
                        </div>
                        <div class="float-left" style="margin-top: 5px;" id="s-upload-filescount"></div>
                        <div id="s-upload-error" style="display:none" class="block half-padded errormsg">
                            Файлы, загруженные с ошибками
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script id="template-upload" type="text/html">

    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
    <li class="template-upload">
        <div class="s-upload-oneimage-progress">
            <div class="s-image-filename">
                {%=file.name%}
                <span class="hint">{%=o.formatFileSize(file.size)%}</span>
            </div>
            <span class="start"></span><span class="cancel"></span>
        </div>
        &nbsp;
    </li>
    {% } %}

</script>

<script id="template-download" type="text/html">

    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
    <li class="template-upload {% if (file.error) { %}error{% } %}">
        {% if (file.error) { %}
            <div class="s-upload-oneimage-progress" style="width:100%">
                <div class="s-image-filename">
                    <b>{%=file.name%}</b>
                    {% if (typeof file.error === 'object' && file.error instanceof SyntaxError) { %}
                        {% if (file.responseText) { %}
                            {%#file.responseText%}
                        {% } else { %}
                            {%=$_('Failed to upload. Most probably, there is not enough memory to create thumbnails.')%}.
                        {% } %}
                    {% } else { %}
                        {%=file.error%}
                    {% } %}
                </div>
            </div>
        {% } else { %}
            <div class="s-upload-oneimage-progress" style="width:100%">
                <div class="s-image-filename">
                    {%=file.name%} <span class="hint">{%=o.formatFileSize(file.size)%}</span>
                </div>
            </div>
        {% } %}
        &nbsp;
    </li>
    {% } %}

</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/load-image.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/jquery.fileupload-wa.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">
$(function() {
    var fileupload = $('#fileupload');
/*
    $('#s-upload-images-link').click(function() {
        fileupload.fileupload('option', 'fileInput').trigger('click');
        return false;
    });
*/
    // Initialize the jQuery File Upload widget:
    fileupload.fileupload({
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png|webp)$/i,
        sequentialUploads: true,
        onDone: function(data) {
            var counter = $('#s-product-edit-menu .images .hint');
            var cnt = parseInt(counter.text(), 10) || 0;
            var product_id = $.product_images.product_id;
            counter.text(cnt + data.result.files.length);

            var enable_2x = <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?>true<?php }else{ ?>false<?php }?> && $.fn.retina;

            var files = data.result.files;

            // update images list for images tabs-product-image-crops
            $('#s-product-image-list').append(tmpl('template-product-image-list', {
                images: files,
                placeholder: '<?php echo $_smarty_tpl->tpl_vars['placeholder']->value;?>
',
                product_id: product_id
            }));

            enable_2x && $('#s-product-image-list img').retina();

            // update images for sku settings blocks
            var sku_settings_blocks = $('#shop-productprofile .js-sku-settings');
            sku_settings_blocks.each(function() {
                var self   = $(this);
                var sku_id = self.attr('data-id');

                var image_crops = self.find('.s-product-image-crops');
                image_crops.append(tmpl('template-sku-image-list', {
                    images: files,
                    sku: {
                        id: sku_id, product_id: product_id
                    }
                }));
                enable_2x && image_crops.find('img').retina();

                // wrapping container show if needed
                var wrapper = self.find('.s-product-sku-images');
                if (wrapper.is(':hidden') && image_crops.find('li').length + files.length > 1) {
                    wrapper.show();
                }
            });

            // update product profile crops
            $('#s-product-view .s-product-image-crops').append(
                tmpl('template-product-image-list', {
                    images: files,
                    product_id: product_id,
                    type: 'crop'
                })
            );

            enable_2x && $('#s-product-view .s-product-image-crops img').retina();


            // update photostream
            var photo_stream = $.product_images.photo_stream;
            if (photo_stream && photo_stream.length) {

                var sample = photo_stream.find('li.dummy:last').prev().clone();

                for (var i = 0, n = files.length, file = files[0]; i < n; file = files[++i]) {
                    // fill attrs
                    sample.attr('data-image-id', file.id);
                    sample.find('a'  ).attr('href', '#/product/' + product_id + '/edit/images/' + file.id);
                    sample.find('img').attr('src',  file.url_crop_small);

                    // insert dom
                    photo_stream.find('li.dummy:last').before(sample.clone());
                }
                // clear memory dom item
                sample.remove();

                // photostream style magic
                photo_stream.find('li.visible').removeClass('visible');
                photo_stream.
                    find('li:last').addClass('visible').
                    prev().addClass('visible').
                    prev().addClass('visible');

                // refresh photostream
                photo_stream.trigger('refresh');

                enable_2x && photo_stream.find('img').retina();

            }
        }
    });
});
</script>
<?php }} ?>