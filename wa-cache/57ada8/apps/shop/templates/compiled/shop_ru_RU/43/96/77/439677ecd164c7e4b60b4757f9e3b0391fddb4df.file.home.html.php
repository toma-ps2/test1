<?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 16:02:23
         compiled from "C:\xampp\htdocs\wa\wa-data\public\shop\themes\default\home.html" */ ?>
<?php /*%%SmartyHeaderCode:13846761936457af6f2bc160-72750474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '439677ecd164c7e4b60b4757f9e3b0391fddb4df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-data\\public\\shop\\themes\\default\\home.html',
      1 => 1683386193,
      2 => 'file',
    ),
    'bcaad3d947fcc7b073deaedc32ae2d17c21cccec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wa\\wa-data\\public\\shop\\themes\\default\\home.slider.html',
      1 => 1683386193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13846761936457af6f2bc160-72750474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa' => 0,
    'wh' => 0,
    '_schedule' => 0,
    '_day' => 0,
    'categories' => 0,
    'cat' => 0,
    'promocards' => 0,
    'promoproducts' => 0,
    'bestsellers' => 0,
    'wa_backend_url' => 0,
    'promo' => 0,
    'frontend_homepage' => 0,
    '_' => 0,
    '_content_exist' => 0,
    'onsale' => 0,
    'blog_posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6457af6f3d4d41_63438489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6457af6f3d4d41_63438489')) {function content_6457af6f3d4d41_63438489($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\xampp\\htdocs\\wa\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\wa\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?>

<?php $_smarty_tpl->tpl_vars['_content_exist'] = new Smarty_variable(true, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']!='hidden'){?>
<div class="sidebar<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']=='left'){?> left-sidebar<?php }?>">

    <!-- CONTACT INFO -->
    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_storeinfo']){?>
        <figure class="store-info">
            <h1 itemprop="name"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('name');?>
</h1>
            <h3>
                <span itemprop="telephone"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('phone');?>
</span>
                <?php if (!method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'schedule')){?>
                    <?php if (!isset($_smarty_tpl->tpl_vars['wh'])) $_smarty_tpl->tpl_vars['wh'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['wh']->value = $_smarty_tpl->tpl_vars['wa']->value->shop->settings('workhours')){?><br>
                        <span class="hint"><?php echo $_smarty_tpl->tpl_vars['wh']->value['days_from_to'];?>
<?php if ($_smarty_tpl->tpl_vars['wh']->value['hours_from']&&$_smarty_tpl->tpl_vars['wh']->value['hours_to']){?> <?php echo $_smarty_tpl->tpl_vars['wh']->value['hours_from'];?>
—<?php echo $_smarty_tpl->tpl_vars['wh']->value['hours_to'];?>
<?php }?></span>
                    <?php }?>
                <?php }?>
            </h3>
            <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['use_shop_schedule'])&&method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'schedule')){?><?php $_smarty_tpl->tpl_vars['_schedule'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->schedule(), null, 0);?><div class="s-schedule-wrapper" id="js-schedule-wrapper"><div class="s-visible"><div class="s-label-wrapper js-show-schedule" title="Часы работы">Часы работы <i class="s-icon"></i></div></div><div class="s-hidden"><div class="s-days-wrapper"><?php  $_smarty_tpl->tpl_vars['_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_schedule']->value['current_week']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_day']->key => $_smarty_tpl->tpl_vars['_day']->value){
$_smarty_tpl->tpl_vars['_day']->_loop = true;
?><div class="s-day-wrapper"><div class="s-date"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_day']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><div class="s-value"><?php if (!empty($_smarty_tpl->tpl_vars['_day']->value['work'])){?><div class="s-time"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_day']->value['start_work'], ENT_QUOTES, 'UTF-8', true);?>
 — <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_day']->value['end_work'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }else{ ?><div class="s-text">выходной</div><?php }?></div></div><?php } ?></div><i class="s-close-icon js-close-schedule" title="Закрыть"></i></div><script>( function($) {var $wrapper = $("#js-schedule-wrapper");var open_class = "is-open";$wrapper.on("click", ".js-show-schedule", function(event) {event.preventDefault();$wrapper.toggleClass(open_class);});$wrapper.on("click", ".js-close-schedule", function(event) {event.preventDefault();$wrapper.removeClass(open_class);});$(document).on("click", clickWatcher);function clickWatcher(event) {var is_exist = $.contains(document, $wrapper[0]);if (is_exist) {var is_target = $.contains($wrapper[0], event.target);if (!is_target) {if ($wrapper.hasClass(open_class)) {$wrapper.removeClass(open_class);}}} else {$(document).off("click", clickWatcher);}}$(document).on("keyup", keyWatcher);function keyWatcher(event) {var is_exist = $.contains(document, $wrapper[0]);if (is_exist) {var is_escape = (event.keyCode === 27);if (is_escape) {if ($wrapper.hasClass(open_class)) {$wrapper.removeClass(open_class);}}} else {$(document).off("click", keyWatcher);}}})(jQuery);</script></div><?php }elseif(!empty($_smarty_tpl->tpl_vars['theme_settings']->value['manual_schedule'])){?><div class="s-schedule-wrapper"><div class="s-visible"><div class="s-label-wrapper"><span class="s-text"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['theme_settings']->value['manual_schedule'], ENT_QUOTES, 'UTF-8', true);?>
</span></div></div></div><?php }?>

            <meta itemprop="address" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('country');?>
">
            <meta itemprop="currenciesAccepted" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
">
        </figure>
    <?php }?>

    <!-- ROOT CATEGORIES -->
    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_categories']){?>
        <?php $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->categories(0,0,true), null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['categories']->value)){?>
            <ul class="tree">
                <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</a>
                    </li>
                <?php } ?>
            </ul>
        <?php }?>
    <?php }?>

    <!-- BULLETS -->
    <section class="bullets">
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_1'])){?>
        <figure class="bullet">
            <h4><span class="b-glyph b-shipping"></span> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_1'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_body_1'];?>
</p>
        </figure>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_2'])){?>
        <figure class="bullet">
            <h4><span class="b-glyph b-payment"></span> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_2'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_body_2'];?>
</p>
        </figure>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_3'])){?>
        <figure class="bullet">
            <h4><span class="b-glyph b-location"></span> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_3'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_body_3'];?>
</p>
        </figure>
        <?php }?>
    </section>

    <!-- FOLLOW -->
    <aside class="connect">
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'])){?>
            <div class="likebox">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'];?>

            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'])){?>
            <div class="likebox">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'];?>

            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'])){?>
            <div class="likebox">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'];?>

            </div>
        <?php }?>
        
    </aside>

</div>
<?php }?>

<div class="content<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']!='hidden'){?> with-sidebar<?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']=='left'){?> left-sidebar<?php }?>">

    <?php $_smarty_tpl->tpl_vars['promocards'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->promos('link','900'), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['bestsellers'] = new Smarty_variable(null, null, 0);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_bestsellers'])){?>
        <?php $_smarty_tpl->tpl_vars['bestsellers'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_bestsellers']), null, 0);?>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_promo'])&&$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']!=='promos'&&$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']!=='hidden'){?>
        <?php $_smarty_tpl->tpl_vars['promoproducts'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_promo']), null, 0);?>
    <?php }?>

    <?php if (empty($_smarty_tpl->tpl_vars['promocards']->value)&&empty($_smarty_tpl->tpl_vars['promoproducts']->value)&&empty($_smarty_tpl->tpl_vars['bestsellers']->value)){?>
        <?php $_smarty_tpl->tpl_vars['_content_exist'] = new Smarty_variable(false, null, 0);?>
        <article class="welcome">
            <h1>Добро пожаловать в ваш интернет-магазин!</h1>
            <p><?php echo sprintf('Чтобы показать полезное содержимое на главной странице, добавьте <a href="%s">товары</a> в списки, указанные в <a href="%s">настройках&nbsp;дизайна</a>, или включите баннеры для <a href="%s">маркетинговых&nbsp;промоакций</a>.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('shop/?action=products'),($_smarty_tpl->tpl_vars['wa_backend_url']->value).('shop/?action=storefronts'),($_smarty_tpl->tpl_vars['wa_backend_url']->value).('shop/marketing/'));?>
</p>
        </article>

    <?php }else{ ?>
        <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']!=='hidden'){?>
            
            <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']==='promos'){?>
                <?php if (!empty($_smarty_tpl->tpl_vars['promocards']->value)){?>
                    <?php /*  Call merged included template "./home.slider.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./home.slider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '13846761936457af6f2bc160-72750474');
content_6457af6f3441f6_22707111($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./home.slider.html" */?>
                <?php }else{ ?>
                    <p class="hint align-center"><b><em><?php echo sprintf('Чтобы включить показ слайдера, настройте промоакции с инструментом «Баннер» в разделе «<a href="%s">Маркетинг</a>».',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('shop/marketing/'));?>
</em></b></p>
                <?php }?>
            
            <?php }else{ ?>
                <?php if (!empty($_smarty_tpl->tpl_vars['promoproducts']->value)){?>
                    <?php /*  Call merged included template "./home.slider.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./home.slider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '13846761936457af6f2bc160-72750474');
content_6457af6f3441f6_22707111($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./home.slider.html" */?>
                <?php }else{ ?>
                    <p class="hint align-center"><br><em><?php echo sprintf('Список товаров с идентификатором <strong>%s</strong> либо не существует, либо не содержит товаров. Чтобы отобразить здесь товары, добавьте их в список с таким идентификатором.',(($tmp = @htmlspecialchars((string)$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_promo'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '()' : $tmp));?>
</em><br><br></p>
                <?php }?>
            <?php }?>
        <?php }?>

        
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_promocards_below_the_slider'])){?>
            <?php if (!empty($_smarty_tpl->tpl_vars['promocards']->value)){?>
                
                <section class="promos">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promocards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?><li id="s-promo-<?php echo $_smarty_tpl->tpl_vars['promo']->value['id'];?>
">
                            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['promo']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['promo']->value['image'];?>
');">
                                <div class="background-color-layer"></div>
                                <?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['title'])){?><h5 style="color: <?php echo $_smarty_tpl->tpl_vars['promo']->value['color'];?>
;"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['promo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h5><?php }?>
                                
                            </a>
                        </li><?php } ?>
                    </ul>
                </section>
            <?php }else{ ?>
                <p class="hint align-center"><b><em><?php echo sprintf('Чтобы включить показ промокарточек, настройте промоакции с инструментом «Баннер» в разделе «<a href="%s">Маркетинг</a>».',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('shop/marketing/'));?>
</em></b></p>
            <?php }?>
        <?php }?>

        
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_bestsellers'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_title'])){?>
            <section class="bestsellers">
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_title'])){?>
                    <h5 class="bestsellers-header"><?php echo str_replace('{$date}',smarty_modifier_wa_datetime(time(),"humandate"),$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_title']);?>
</h5>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_bestsellers'])){?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['bestsellers']->value)){?>
                        <?php echo $_smarty_tpl->getSubTemplate ("list-thumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['bestsellers']->value), 0);?>

                    <?php }else{ ?>
                        <p class="hint align-center"><br><em><?php echo sprintf('Перетащите несколько товаров в список с идентификатором «%s» в панели управления вашего интернет-магазина.',$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_bestsellers']);?>
</em></p>
                    <?php }?>
                <?php }?>
            </section>
        <?php }?>
    <?php }?>

    <!-- plugin hook: 'frontend_homepage' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_homepage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

</div>

<div class="clear-both"></div>

<?php if (!empty($_smarty_tpl->tpl_vars['_content_exist']->value)){?>
    <!-- WELCOME note -->
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_welcome_note'])){?>
        <figure class="olives">
            <div class="olives-left">
            <div class="olives-right">
                <div class="olives-content">
                    <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_welcome_note'];?>

                </div>
            </div>
            </div>
        </figure>
    <?php }?>

    <!-- ON SALE product list -->
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_onsale'])){?>
        <?php $_smarty_tpl->tpl_vars['onsale'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_onsale']), null, 0);?>
        <section class="onsale related">
            <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_onsale_title']){?>
                <h4 class="section-header"><?php echo str_replace('{$date}',smarty_modifier_wa_datetime(time(),"humandate"),$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_onsale_title']);?>
</h4>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['onsale']->value)){?>
                <?php echo $_smarty_tpl->getSubTemplate ("list-thumbs-mini.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['onsale']->value,'ulclass'=>"onsale-bxslider"), 0);?>

            <?php }else{ ?>
                <p class="hint align-center"><br><em><?php echo sprintf('Список товаров с идентификатором «%s» пуст. Добавьте несколько товаров в этот список в панели управления вашего интернет-магазина.',htmlspecialchars((string)$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_onsale'], ENT_QUOTES, 'UTF-8', true));?>
</em></p>
            <?php }?>
        </section>
    <?php }?>

    <!-- BLOG posts -->
    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_blogposts']&&$_smarty_tpl->tpl_vars['wa']->value->blog){?>
        <?php $_smarty_tpl->tpl_vars['blog_posts'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->posts(null,4), null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['blog_posts']->value)){?>
            <h4 class="section-header">Новые записи в блоге</h4>
            <ul class="thumbs text-content">
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
" class="bold"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>
                    <p class="small"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['post']->value['text']),128);?>
</p>
                    <span class="hint"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],"humandate");?>
</span>
                </li>
            <?php } ?>
            </ul>
        <?php }?>
    <?php }?>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2023-05-07 16:02:23
         compiled from "C:\xampp\htdocs\wa\wa-data\public\shop\themes\default\home.slider.html" */ ?>
<?php if ($_valid && !is_callable('content_6457af6f3441f6_22707111')) {function content_6457af6f3441f6_22707111($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include 'C:\\xampp\\htdocs\\wa\\wa-system/vendors/smarty-plugins\\modifier.join.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\wa\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['_is_promocards'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['_is_products'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['_is_products_wide'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['_slider_classes'] = new Smarty_variable(array(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']=="promos"){?>
    <?php $_smarty_tpl->tpl_vars['_is_promocards'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->createLocalArrayVariable('_slider_classes', null, 0);
$_smarty_tpl->tpl_vars['_slider_classes']->value[] = "is-promocards";?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']=="products"){?>
    <?php $_smarty_tpl->tpl_vars['_is_products'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->createLocalArrayVariable('_slider_classes', null, 0);
$_smarty_tpl->tpl_vars['_slider_classes']->value[] = "is-products";?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']=="products_wide"){?>
    <?php $_smarty_tpl->tpl_vars['_is_products_wide'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->createLocalArrayVariable('_slider_classes', null, 0);
$_smarty_tpl->tpl_vars['_slider_classes']->value[] = "is-products-wide";?>
<?php }?>

<section class="s-slider-section <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_slider_classes']->value," ");?>
">

    
    <?php if ($_smarty_tpl->tpl_vars['_is_promocards']->value){?>
        <ul class="s-slider-block" id="js-home-slider">
            <?php  $_smarty_tpl->tpl_vars['_slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promocards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_slide']->key => $_smarty_tpl->tpl_vars['_slide']->value){
$_smarty_tpl->tpl_vars['_slide']->_loop = true;
?>
                <li class="s-slide-wrapper" style="
                    <?php if ($_smarty_tpl->tpl_vars['_slide']->value['color']){?>color: <?php echo $_smarty_tpl->tpl_vars['_slide']->value['color'];?>
;<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_slide']->value['image']){?>background-image: url(<?php echo $_smarty_tpl->tpl_vars['_slide']->value['image'];?>
);<?php }?>
                ">
                    <div class="s-slide-block">
                        <h3 class="s-header"><?php echo smarty_modifier_truncate(htmlspecialchars((string)$_smarty_tpl->tpl_vars['_slide']->value['title'], ENT_QUOTES, 'UTF-8', true),90);?>
</h3>

                        <?php if (!empty($_smarty_tpl->tpl_vars['_slide']->value['body'])){?>
                            <p class="s-description" itemprop="description"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_slide']->value['body'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                        <?php }?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['_slide']->value['countdown_datetime'])){?>
                            <div class="s-counter">
                                <span class="js-promo-countdown" data-start="<?php echo date('Y-m-d H:i:s');?>
" data-end="<?php echo $_smarty_tpl->tpl_vars['_slide']->value['countdown_datetime'];?>
"></span>
                            </div>
                        <?php }?>

                    </div>
                    <a class="s-slide-link" href="<?php echo $_smarty_tpl->tpl_vars['_slide']->value['link'];?>
"></a>
                </li>
            <?php } ?>
        </ul>

    
    <?php }elseif(!empty($_smarty_tpl->tpl_vars['promoproducts']->value)){?>

        <?php if (!empty($_smarty_tpl->tpl_vars['_is_products']->value)){?>
            <ul class="s-slider-block" id="js-home-slider">
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promoproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['_product_image_src'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,"0x320@2x"), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable(htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['summary']){?>
                        <?php ob_start();?><?php echo htmlspecialchars((string)strip_tags($_smarty_tpl->tpl_vars['product']->value['summary']), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value['name'])." — ".$_tmp1, null, 0);?>
                    <?php }?>

                    <li class="s-slide-wrapper" itemscope itemtype="http://schema.org/Product">
                        <div class="s-slide-block" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <h3 class="s-header" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h3>

                            <div class="s-layout fixed is-adaptive">
                                <div class="s-column">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['summary']){?>
                                        <p class="s-description" itemprop="description">
                                            <?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['summary']),255);?>

                                        </p>
                                    <?php }?>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['price'])){?>
                                        <div class="s-price-wrapper">
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>0){?>
                                                <span class="s-compare-price compare-at-price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
</span>
                                            <?php }?>
                                            <span class="s-price price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</span>
                                            <meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['price'],null,null,0);?>
">
                                            <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
">
                                        </div>
                                    <?php }?>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['summary'])){?>
                                        <meta itemprop="description" content="<?php echo strip_tags($_smarty_tpl->tpl_vars['product']->value['summary']);?>
">
                                    <?php }?>
                                </div>
                                <div class="s-column">

                                    <div class="s-image-wrapper">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['_product_image_src']->value;?>
" alt="">

                                        <?php $_smarty_tpl->tpl_vars['badge_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['product']->value['badge']), null, 0);?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['badge_html']->value)){?>
                                            <div class="s-badge-wrapper"><?php echo $_smarty_tpl->tpl_vars['badge_html']->value;?>
</div>
                                        <?php }?>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <a class="s-slide-link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_name']->value;?>
"></a>
                    </li>
                <?php } ?>
            </ul>

        
        <?php }elseif(!empty($_smarty_tpl->tpl_vars['_is_products_wide']->value)){?>

            <?php $_smarty_tpl->tpl_vars['_slider_photos'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->images(array_keys($_smarty_tpl->tpl_vars['promoproducts']->value),"0x320@2x"), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['_photos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_photos']->_loop = false;
 $_smarty_tpl->tpl_vars['product_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_slider_photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_photos']->key => $_smarty_tpl->tpl_vars['_photos']->value){
$_smarty_tpl->tpl_vars['_photos']->_loop = true;
 $_smarty_tpl->tpl_vars['product_id']->value = $_smarty_tpl->tpl_vars['_photos']->key;
?>
                <?php $_smarty_tpl->createLocalArrayVariable('_slider_photos', null, 0);
$_smarty_tpl->tpl_vars['_slider_photos']->value[$_smarty_tpl->tpl_vars['product_id']->value] = end($_smarty_tpl->tpl_vars['_photos']->value);?>
            <?php } ?>

            <ul class="s-slider-block" id="js-home-slider">
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promoproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

                    <?php $_smarty_tpl->tpl_vars['_product_image_src'] = new Smarty_variable($_smarty_tpl->tpl_vars['_slider_photos']->value[$_smarty_tpl->tpl_vars['product']->value['id']][('url_').("0x320@2x")], null, 0);?>
                    
                    <?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable(htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['summary']){?>
                        <?php ob_start();?><?php echo htmlspecialchars((string)strip_tags($_smarty_tpl->tpl_vars['product']->value['summary']), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value['name'])." — ".$_tmp2, null, 0);?>
                    <?php }?>

                    <li class="s-slide-wrapper" itemscope itemtype="http://schema.org/Product" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['_product_image_src']->value;?>
);">
                        <div class="s-slide-block" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <h3 class="s-header" itemprop="name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h3>

                            <div style="position: relative">
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['summary']){?>
                                    <p class="s-description" itemprop="description">
                                        <?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['summary']),255);?>

                                    </p>
                                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['price'])){?>
                                    <div class="s-price-wrapper">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>0){?>
                                            <span class="s-compare-price compare-at-price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
</span>
                                        <?php }?>
                                        <span class="s-price price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</span>
                                        <meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['price'],null,null,0);?>
">
                                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
">
                                    </div>
                                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['summary'])){?>
                                    <meta itemprop="description" content="<?php echo strip_tags($_smarty_tpl->tpl_vars['product']->value['summary']);?>
">
                                <?php }?>

                                <?php $_smarty_tpl->tpl_vars['badge_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['product']->value['badge']), null, 0);?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['badge_html']->value)){?>
                                    <div class="s-badge-wrapper"><?php echo $_smarty_tpl->tpl_vars['badge_html']->value;?>
</div>
                                <?php }?>
                            </div>
                        </div>

                        <a class="s-slide-link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_name']->value;?>
"></a>
                    </li>
                <?php } ?>
            </ul>
        <?php }?>
    <?php }?>

    <script>
        ( function($) {
            // DOM
            var $slider = $("#js-home-slider");
            if (!$slider.length) { return false; }

            // VARS
            var href = "<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
plugins/bxslider/jquery.bxslider.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
";

            // INIT
            initCountDown($slider);

            (!$.fn.bxSlider) ? $.getScript(href, initSlider) : initSlider();

            // FUNCTIONS

            function initSlider() {
                var slide_count = $slider.find("li").length;

                $slider.bxSlider({
                    auto : slide_count > 1,
                    touchEnabled: true,
                    pause : 5000,
                    autoHover : true,
                    pager: slide_count > 1
                });
            }

            function initCountDown($wrapper) {
                var $countdowns = $wrapper.find(".js-promo-countdown");
                if ($countdowns.length) {
                    $countdowns.each( function() {
                        var $wrapper = $(this),
                            options = {
                                $wrapper: $wrapper,
                                start: $wrapper.data('start').replace(/-/g, '/'),
                                end: $wrapper.data('end').replace(/-/g, '/')
                            };

                        if (typeof CountDown === "function") {
                            new CountDown(options);
                        } else {
                            $wrapper.remove();
                        }
                    });
                }
            }

        })(jQuery);
    </script>
</section><?php }} ?>