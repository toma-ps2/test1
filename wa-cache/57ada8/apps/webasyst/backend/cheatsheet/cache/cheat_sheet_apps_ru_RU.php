<?php
return array (
  'shop' => 
  array (
    'params' => 
    array (
      0 => 'Главная страница',
      'title' => 
      array (
        'name' => 'Заголовок главной страницы <title>',
        'type' => 'input',
      ),
      'meta_keywords' => 
      array (
        'name' => 'META Keywords главной страницы',
        'type' => 'input',
      ),
      'meta_description' => 
      array (
        'name' => 'META Description главной страницы',
        'type' => 'textarea',
      ),
      'og_title' => 
      array (
        'name' => 'Заголовок (og:title)',
        'type' => 'input',
        'description' => 'Подробная информация о возможных вариантах значений параметров Open Graph опубликована на сайте протокола <a href="http://ogp.me" target="_blank">ogp.me</a>.',
      ),
      'og_image' => 
      array (
        'name' => 'Изображение (og:image)',
        'type' => 'input',
      ),
      'og_video' => 
      array (
        'name' => 'Видео (og:video)',
        'type' => 'input',
      ),
      'og_description' => 
      array (
        'name' => 'Описание (og:description)',
        'type' => 'textarea',
      ),
      'og_type' => 
      array (
        'name' => 'Тип страницы (og:type)',
        'type' => 'input',
        'description' => 'Например, <b>website</b>. Подробная информация о возможных вариантах значений параметров Open Graph опубликована на сайте протокола <a href="http://ogp.me" target="_blank">ogp.me</a>.',
      ),
      'og_url' => 
      array (
        'name' => 'Ссылка для соцсетей (og:url)',
        'type' => 'input',
        'description' => 'Если хотя бы одно из значений метатегов og: выше заполнено, то это поле можно оставить пустым — в метатег og:url по умолчанию подставится URL витрины. Или вручную отредактируйте значение og:url, если необходимо.',
      ),
      1 => 'Товары',
      'url_type' => 
      array (
        'name' => 'URL страниц',
        'type' => 'radio_select',
        'items' => 
        array (
          2 => 
          array (
            'name' => 'Естественный',
            'description' => '<br>Страницы товаров: /<strong>category-name/subcategory-name/product-name/</strong><br>Страницы категорий: /<strong>category-name/subcategory-name/</strong>',
          ),
          0 => 
          array (
            'name' => 'Смешанный',
            'description' => '<br>Страницы товаров: /<strong>product-name/</strong><br>Страницы категорий: /category/<strong>category-name/subcategory-name/subcategory-name/</strong>',
          ),
          1 => 
          array (
            'name' => 'Плоский',
            'description' => '<br>Страницы товаров: /product/<strong>product-name/</strong><br>Страницы категорий: /category/<strong>category-name/</strong>',
          ),
        ),
      ),
      'products_per_page' => 
      array (
        'name' => 'Количество товаров на странице',
        'type' => 'input',
        'description' => 'Если не заполнено, то используется стандартное значение из конфигурации Shop-Script.',
      ),
      'type_id' => 
      array (
        'name' => 'Опубликованные товары',
        'type' => 'radio_checkbox',
        'items' => 
        array (
          0 => 
          array (
            'name' => 'Все типы товаров',
            'description' => '',
          ),
          1 => 
          array (
            'name' => 'Только выбранные',
            'description' => '',
            'items' => 
            array (
              1 => 'Обычный товар',
            ),
          ),
        ),
      ),
      'currency' => 
      array (
        'name' => 'Основная валюта',
        'type' => 'select',
        'items' => 
        array (
          'RUB' => 'Российский рубль',
          'USD' => 'Доллар США',
          'EUR' => 'Евро',
        ),
      ),
      'stock_id' => 
      array (
        'name' => 'Основной склад',
        'description' => 'Нет складов, доступных для выбора. Настройте склады в разделе «Настройки → Склады».',
        'type' => 'help',
      ),
      'public_stocks' => 
      array (
        'name' => 'Показывать склады',
        'type' => 'radio_checkbox',
        'items' => 
        array (
          0 => 
          array (
            'name' => 'Все склады, видимые покупателям',
            'description' => '',
          ),
          1 => 
          array (
            'name' => 'Только выбранные',
            'description' => '',
            'items' => 
            array (
            ),
          ),
        ),
      ),
      'drop_out_of_stock' => 
      array (
        'name' => 'Нет на складе',
        'type' => 'radio_select',
        'items' => 
        array (
          1 => 
          array (
            'name' => 'Автоматически перемещать вниз списка все товары, которых нет на складе',
            'description' => 'Товары, которых нет на складе, будут автоматически перемещены вниз всех списков товаров на витрине интернет-магазина: в результатах поиска, в списках товаров внутри категорий, в результатах фильтрации товаров и т. д. Учитываются остатки товаров на всех складах.',
          ),
          2 => 
          array (
            'name' => 'Скрыть все товары, которых нет на складе',
            'description' => 'Товары, которых нет на складе, будут опубликованы и доступны на витрине по прямой ссылке, но будут скрыты из всех списков товаров: из результатов поиска, из категорий, из результатов фильтрации товаров и т. д. Учитываются остатки товаров на всех складах.',
          ),
          0 => 
          array (
            'name' => 'Показывать как есть',
            'description' => 'Списки товаров на этой витрине будут содержать все товары вне зависимости от их остатка на складе.',
          ),
        ),
      ),
      2 => 'Оформление заказа',
      'payment_id' => 
      array (
        'name' => 'Способы оплаты',
        'type' => 'radio_checkbox',
        'items' => 
        array (
          0 => 
          array (
            'name' => 'Все доступные способы оплаты',
            'description' => '',
          ),
          1 => 
          array (
            'name' => 'Только выбранные',
            'description' => '',
            'items' => 
            array (
              1 => 'Наличные',
              5 => 'ЮKassa (бывшая Яндекс.Касса)',
            ),
          ),
        ),
      ),
      'shipping_id' => 
      array (
        'name' => 'Варианты доставки',
        'type' => 'radio_checkbox',
        'items' => 
        array (
          0 => 
          array (
            'name' => 'Все доступные способы доставки',
            'description' => '',
          ),
          1 => 
          array (
            'name' => 'Только выбранные',
            'description' => '',
            'items' => 
            array (
              7 => 'Бесплатная доставка курьером',
            ),
          ),
        ),
      ),
      'ssl' => 
      array (
        'name' => 'Использовать защищенное HTTPS-соединение при оформлении заказа и для личного кабинета покупателя',
        'description' => 'Автоматически включить защищенное соединение https:// для оформления заказа (/checkout/) и личного кабинета покупателя (/my/). Включайте только в том случае, если для вашего домена был приобретен и установлен SSL-сертификат!',
        'type' => 'checkbox',
      ),
      'checkout_storefront_id' => 
      array (
        'type' => 'hidden',
      ),
      'checkout_version' => 
      array (
        'name' => 'Вид оформления заказа',
        'type' => 'radio_select',
        'items' => 
        array (
          2 => 
          array (
            'name' => '<span class="checkout-2-background">Оформление заказа в корзине</span>',
            'description' => '<br>Если ваша тема дизайна не поддерживает «оформление заказа в корзине», для страницы оформления заказа может использоваться стандартный дизайн темы «Дефолт». <a href="/wa/webasyst/shop/?action=settings#/checkout/" target="_blank">Настройте</a> <i class="icon16 new-window"></i>оформление заказа в корзине.<br><strong>Прочтите <a href="https://support.webasyst.ru/shop-script/29292/in-cart-checkout/" target="_blank">инструкцию</a> перед включением этого вида оформления заказа.</strong><br><br>',
          ),
          1 => 
          array (
            'name' => 'Пошаговое оформление заказа',
            'description' => '<br><a href="/wa/webasyst/shop/?action=settings#/checkout&r=1/" target="_blank">Настройте</a> <i class="icon16 new-window"></i>пошаговое оформление заказа

<style>
    .checkout-2-background { background-color: #9cff9e; }
</style>
<script>
    (function ($) {
        var $version_field = $(\'input[name="params[checkout_version]"]\').parents(\'.field\'),
            $theme_field = $(\'select[name="params[theme_mobile]"]\').parents(\'.field\');

        $version_field.insertAfter($theme_field);
    })(jQuery);
</script>',
          ),
        ),
        'original_name' => true,
        'default' => 2,
      ),
    ),
    'vars' => 
    array (
      'category.html' => 
      array (
        '$category.id' => '',
        '$category.name' => '',
        '$category.parent_id' => '',
        '$category.description' => '',
      ),
      'index.html' => 
      array (
        '$content' => 'Основное содержимое, отображаемое в зависимости от типа текущей страницы: товар, категория, результаты поиска, инф. страница и т. д.',
      ),
      'product.html' => 
      array (
        '$product.id' => 'ID товара. Остальные элементы объекта <em>$product</em>, доступные в этом шаблоне, перечислены ниже',
        '$product.name' => 'Наименование',
        '$product.summary' => 'Краткое описание товара',
        '$product.description' => 'Описание товара',
        '$product.rating' => 'Средняя оценка покупателей (действительное число от 0 до 5)',
        '$product.skus' => 'Массив артикулов товара',
        '$product.images' => 'Массив изображений товара',
        '$product.categories' => 'Массив категорий товара',
        '$product.tags' => 'Массив тегов товара',
        '$product.pages' => 'Массив подстраниц товара',
        '$product.features' => 'Массив характеристик товара и их значений',
        '$reviews' => 'Массив отзывов о товаре',
        '$services' => 'Массив услуг, доступных для данного товара',
      ),
      'search.html' => 
      array (
        '$title' => '',
      ),
      'list-table.html' => 
      array (
        '$products' => 
        array (
          '$id' => '',
          '...' => 'Доступные переменные перечислены в шпаргалке шаблона product.html',
        ),
      ),
      'list-thumbs.html' => 
      array (
        '$products' => 
        array (
          '$id' => '',
          '...' => 'Доступные переменные перечислены в шпаргалке шаблона product.html',
        ),
      ),
      'order.html' => 
      array (
        '$wa->shop->checkout()->cart(<em>$opts</em>)' => 'Возвращает HTML-код блока корзины для оформления заказа в корзине',
        '$wa->shop->checkout()->cartVars(<em>$clear_cache</em>)' => 'Возвращает переменные, которые $wa->shop->checkout()->cart() формирует для своего шаблона',
        '$wa->shop->checkout()->form(<em>$opts</em>)' => 'Возвращает HTML-код формы оформления заказа в корзине',
        '$wa->shop->checkout()->formVars(<em>$clear_cache</em>)' => 'Возвращает переменные, которые $wa->shop->checkout()->form() формирует для своего шаблона',
      ),
      'my.order.html' => 
      array (
        '$order' => 'Массив с информацией о заказе',
        '$order.id' => 'Номер заказа',
        '$order.currency' => 'Валюта заказа (ISO3-код)',
        '$order.items' => 'Массив с информацией о заказанных товарах',
        '$order.items[].price' => 'Цена товара',
        '$order.items[].quantity' => 'Количество заказанных единиц',
        '$order.items[].download_link' => 'Ссылка на файл цифрового товара (для артикула)',
        '$order.discount' => 'Размер скидки (в валюте заказа)',
        '$order.tax' => 'Размер налога (в валюте заказа)',
        '$order.shipping' => 'Стоимость доставки (в валюте заказа)',
        '$order.total' => 'Итого (в валюте заказа)',
        '$order.comment' => 'Комментарий покупателя к заказу',
        '$order.state' => 'Текущий статус заказа',
        '$order_url' => 'URL страницы заказа в личном кабинете покупателя на витрине',
        '$order.params' => 'Массив с дополнительными параметрами заказа',
        '$order.params.shipping_name' => 'Название выбранного способа доставки',
        '$order.params.shipping_description' => 'Описание выбранного способа доставки',
        '$order.params.payment_name' => 'Название выбранного способа оплаты',
        '$order.params.payment_description' => 'Описание выбранного способа оплаты',
        '$order.params.auth_pin' => '4-символьный цифровой код доступа к информационной странице (только для незарегистрированных покупателей)',
        '$order.params.storefront' => 'Домен и путь к витрине Shop-Script, на которой был оформлен заказ',
        '$order.params.storefront_decoded' => 'Адрес витрины Shop-Script, на которой был оформлен заказ, с учетом национальных доменов (Punycode)',
        '$order.params.ip' => 'IP-адрес покупателя на момент формирования заказа',
        '$order.params.user_agent' => 'Значение User-Agent браузера покупателя на момент формирования заказа',
        '$order.params.<br>shipping_est_delivery' => 'Строка с информацией о приблизительном времени доставки (если определена)',
        '$order.params.tracking_number' => 'Идентификатор доставки заказа (если определен)',
        '$order.params. …' => 'Список параметров заказа может быть различным в зависимости от настроек обработки заказов и их статусов.',
        '$customer' => 'Массив информации о покупателе',
        '$customer.birth_day' => 'Номер дня в дате рождения покупателя',
        '$customer.birth_month' => 'Номер месяца в дате рождения покупателя',
        '$customer.birth_year' => 'Номер года в дате рождения покупателя',
        '$customer.name|escape' => 'Имя покупателя',
        '$customer.company|escape' => 'Название компании покупателя',
        '$customer.jobtitle|escape' => 'Рабочая должность покупателя',
        '$customer->get(\'phone\', \'default|top\')' => 'Телефонный номер покупателя',
        '$customer->get(\'email\', \'default\')|escape' => 'Email-адрес покупателя',
        '$customer->get(\'address:street\', \'default\')|escape ' => 'Улица и номер дома в адресе покупателя',
        '$customer->get(\'address:city\', \'default\')|escape ' => 'Название города покупателя',
        '$customer->get(\'address:zip\', \'default\')|escape ' => 'Почтовый индекс покупателя',
        '$customer->get(\'address:region\', \'value|default\')|escape ' => 'Название региона (области) в адресе покупателя',
        '$customer->get(\'address:country\', \'value|default\')|escape ' => 'Название страны в адресе покупателя',
        '$customer.affiliate_bonus' => 'Количество бонусов, накопленных покупателем в рамках «Бонусной программы», включенной в настройках магазина. Чтобы показать ограниченное количество знаков после запятой, добавьте модификатор, как показано в примере: <em>{$customer.affiliate_bonus|wa_format_number:0}</em> (не показывать цифры после запятой).',
        '$customer.total_spent' => 'Общая сумма денег в основной валюте, потраченная покупателем. Добавить форматированную сумму с обозначением валюты заказа: <code>{shop_currency($customer.total_spent, null, $order.currency)}</code>.',
        '$customer.number_of_orders' => 'Количество заказов, оформленных покупателем.',
        '$customer.last_order_id' => 'ID последнего заказа, оформленного покупателем. Добавить форматированный ID заказа: <code>{shopHelper::encodeOrderId($customer.last_order_id)}</code>.',
        '$customer. …' => 'Любое значение из свойств покупателя. Список доступных полей можно посмотреть в разделе «<em>Магазин → Настройки → Оформление заказа</em>». Замените многоточие (...) на идентификатор нужного поля.',
        '$shipping_address' => 'Адрес доставки одной строкой',
        '$billing_address' => 'Адрес плательщика одной строкой',
        '$courier' => 'Массив данных курьера',
        '$courier.name' => 'Имя курьера',
        '$courier.note' => 'Заметка',
        '$courier.contact' => 'Массив данных контакта курьера из приложения «Контакты», если курьер связан с существующим контактом',
        '$courier.contact->get(\'email\', \'default\')' => 'Email-адрес контакта курьера',
        '$courier.contact->get(\'phone\', \'default\')' => 'Номер телефона контакта курьера',
        '$signup_url' => 'Адрес (URL) страницы регистрации. Значение будет пустым, если заказ был оформлен ранее зарегистрированным покупателем или если в основных настройках магазина выключена возможность оформления <a href="?action=settings#/checkout/">заказа без авторизации</a>.',
      ),
      '$wa' => 
      array (
        '$wa->shop->checkout()->url(<em>$absolute</em>)' => 'Возвращает URL страницы оформления заказа',
        '$wa->shop->checkout()->cartUrl(<em>$absolute</em>)' => 'Возвращает URL страницы корзины',
        '$wa->shop->schedule()' => 'Возвращает массив данных с режимом работы магазина для текущей витрины',
        '$wa->shop->badgeHtml(<em>$product.code</em>)' => 'Отображает наклейку указанного товара (объекта <em>$product</em>)',
        '$wa->shop->cart()' => 'Возвращает объект корзины покупателя',
        '$wa->shop->categories(<em>$id, $depth, $tree, $params, $route</em>)' => 'Возвращает массив подкатегорий указанной категории.<br><strong>$id</strong> (по умолчанию: <em>0</em>): ID родительской категории, подкатегории которой нужно получить. По умолчанию возвращаются категории начиная с самого верхнего уровня.<br><strong>$depth</strong> (по умолчанию: <em>null</em>): глубина захвата дерева подкатегорий. По умолчанию возвращается все дерево категорий.<br><strong>$tree</strong> (по умолчанию: <em>false</em>): флаг, обозначающий необходимость вернуть категории в виде дерева (<em>true</em>) или плоского массива (<em>false</em>).<br><strong>$params</strong> (по умолчанию: <em>false</em>): флаг, обозначающий необходимость вернуть категории с доп. параметрами. По умолчанию категории возвращаются без доп. параметров.<br><strong>$route</strong> (по умолчанию: <em>null</em>): массив параметров маршрутизации витрины, для которой нужно получить список категорий. По умолчанию возвращается список категорий без учета привязки к конкретной витрине.',
        '$wa->shop->category(<em>$category_id</em>)' => 'Возвращает объект категории по указанному <em>$category_id</em>',
        '$wa->shop->categoryUrl(<em>$category</em>)' => 'Возвращает URL для указанного массива <em>$category</em> со свойствами категории',
        '<em>$category</em>.params()' => 'Массив дополнительных параметров категории',
        '$wa->shop->compare()' => 'Возвращает массив товаров, в данный момент находящихся в списке товаров для сравнения',
        '$wa->shop->crossSelling(<em>$product_id</em>, <em>$limit</em>, <em>$available_only</em>)' => 'Возвращает массив предложений для перекрестных продаж (cross-selling) указанного товара.<br><strong>$id</strong> товара, для которого нужно вернуть предложения перекрестных продаж.<br><strong>$limit</strong> (по умолчанию: <em>5</em>) ограничивает количество возвращаемых товаров.<br><strong>$available_only</strong> (по умолчанию: <em>false</em>) исключает из результатов товары, отсутствующие на складе. По умолчанию отсутствующие товары не пропускаются.',
        '$wa->shop->currencies()' => 'Возвращает массив доступных валют.',
        '$wa->shop->currency()' => 'Возвращает объект со свойствами текущей валюты.',
        '$wa->shop->imgHtml(<em>$image</em>, <em>$size</em>, <em>$attributes = array()</em>)' => 'Возвращает HTML-код эскиза изображения товара с указанными размером и атрибутами. Массив <em>$image</em> должен содержать элементы <em>\'id\'</em>, <em>\'product_id\'</em> и <em>\'ext\'</em>.',
        '$wa->shop->imgUrl(<em>$image</em>, <em>$size</em>, <em>$absolute = false</em>)' => 'Возвращает относительный или абсолютный URL эскиза изображения товара с указанными размером. Массив <em>$image</em> должен содержать элементы <em>\'id\'</em>, <em>\'product_id\'</em> и <em>\'ext\'</em>.',
        '$product' => 
        array (
          '$product = $wa->shop->product(<em>$id</em>)' => 'Чтобы получить информацию о товаре, сначала создайте объект товара, указав его числовой ID, например, свойство <em>\'product_id\'</em> элемента массива <em>$order.items</em>.',
          '$product->getProductUrl(<em>$storefront_url</em>)' => 'Возвращает URL товара для витрины с указанным адресом. Например, укажите переменную <em>$order.params.storefront</em> с адресом витрины, на которой покупатель заказал товар.',
          '$product->upSelling(<em>$limit</em>, <em>$available_only</em>)' => 'Возвращает массив предложений аналогичных товаров (upselling) для данного товара.<br><strong>$limit</strong> (по умолчанию: <em>5</em>) ограничивает количество возвращаемых товаров.<br><strong>$available_only</strong> (по умолчанию: <em>false</em>) исключает из результатов товары, отсутствующие на складе. По умолчанию отсутствующие товары не пропускаются.',
          '$product->crossSelling(<em>$limit</em>, <em>$available_only</em>)' => 'Возвращает массив предложений для перекрестных продаж (cross-selling) данного товара.<br><strong>$limit</strong> (по умолчанию: <em>5</em>) ограничивает количество возвращаемых товаров.<br><strong>$available_only</strong> (по умолчанию: <em>false</em>) исключает из результатов товары, отсутствующие на складе. По умолчанию отсутствующие товары не пропускаются.',
          '$product.id' => 'ID товара. Остальные элементы объекта <em>$product</em>, доступные в этом шаблоне, перечислены ниже',
          '$product.name' => 'Наименование',
          '$product.description' => 'Краткое описание товара',
          '$product.rating' => 'Средняя оценка покупателей (действительное число от 0 до 5)',
          '$product.skus' => 'Массив артикулов товара',
          '$product.images' => 'Массив изображений товара',
          '$product.categories' => 'Массив категорий товара',
          '$product.tags' => 'Массив тегов товара',
          '$product.pages' => 'Массив информационных страниц товара',
          '$product.features' => 'Массив значений характеристик товара',
          '$product.reviews' => 'Массив отзывов о товаре<br>',
        ),
        '$wa->shop->productImgHtml($product, $size, $attributes = array())' => 'Отображает основное изображение товара из объекта $product.',
        '$wa->shop->productImgUrl($product, $size)' => 'Возвращает адрес основного изображения товара из объекта $product.',
        '$wa->shop->products(<em>search_conditions</em>[,<em>offset</em>[, <em>limit</em>[, <em>options</em>]]])' => 'Возвращает массив товаров в соответствии с критериями поиска, например, <em>"tag/new"</em>, <em>"category/12"</em>, <em>"id/1,5,7"</em>, <em>"set/1"</em> или <em>"*"</em> для всего списка товаров. Необязательный параметр <em>offset</em> означает количество товаров, которое нужно пропустить в начале возвращаемого результата; по умолчанию пропускается 0 товаров. Необязательный параметр <em>limit</em> означает количество товаров, которое нужно вернуть вместо стандартного количества 500. Необязательный параметр <em>options</em> используется для включения в результат дополнительных характеристик товаров, например, <em>["params" => 1]</em>.',
        '$wa->shop->productsCount(<em>search_conditions</em>)' => 'Возвращает количество товаров, соответствующих указанному заданному критерию поиска, например, <em>"tag/new"</em>, <em>"category/12"</em>, <em>"id/1,5,7"</em>, <em>"set/1"</em> или <em>"*"</em> для всего списка товаров.',
        '$wa->shop->productSet(<em>set_id</em>[,<em>offset</em>[, <em>limit</em>[, <em>options</em>]]])' => 'Возвращает массив товаров из указанного списка. Необязательный параметр <em>offset</em> означает количество товаров, которое нужно пропустить в начале возвращаемого результата; по умолчанию пропускается 0 товаров. Необязательный параметр <em>limit</em> означает количество товаров, которое нужно вернуть вместо стандартного количества 500. Необязательный параметр <em>options</em> используется для включения в результат дополнительных характеристик товаров, например, <em>["params" => 1]</em>.',
        '$wa->shop->ratingHtml(<em>$rating, $size = 10, $show_when_zero = false</em>)' => 'Отображает рейтинг товара: от 1 до 5 звезд. В качестве значения $size укажите размер в пикселях: 10 или 16.',
        '$wa->shop->features(<em>product_ids</em>)' => 'Возвращает массив значений характеристик всех перечисленных товаров',
        '$wa->shop->reviews([<em>$limit = 10</em>])' => 'Возвращает массив последних отзывов о товарах',
        '$wa->shop->tags([<em>$limit = 50</em>])' => 'Возвращает массив тегов, по умолчанию ограниченный 50 элементами',
        '$wa->shop->stocks()' => 'Возвращает массив складов',
        '$wa->shop->settings("<em>option_id</em>")' => 'Возвращает значение поля настроек магазина по <em>option_id</em>, например: "name", "email", "country".',
        '$wa->shop->orderId("<em>id</em>")' => 'Возвращает отформатированный номер заказа для указанного числового значения',
        '$wa->shop->payment()' => 'Возвращает массив доступных способов оплаты',
        '$wa->shop->shipping()' => 'Возвращает массив доступных способов доставки',
        '$wa->shop->themePath("<em>theme_id</em>")' => 'Возвращает путь к папке темы дизайна по <em>theme_id</em>',
      ),
      'notifications' => 
      array (
        '$order' => 'Массив с информацией о заказе',
        '$order.id' => 'Номер заказа',
        '$order.currency' => 'Валюта заказа (ISO3-код)',
        '$order.items' => 'Массив с информацией о заказанных товарах',
        '$order.items[].price' => 'Цена товара',
        '$order.items[].quantity' => 'Количество заказанных единиц',
        '$order.items[].download_link' => 'Ссылка на файл цифрового товара (для артикула)',
        '$wa->shop->productImgUrl($item, $size)' => 'Относительный URL основного изображения заказанного товара с указанием размера.<br><code>$item</code> должно содержать элемент массива <code>$order.items</code>.<br><code>$size</code> должно содержать одно из значений размера, описанных в  <a href="https://www.shop-script.ru/help/5/shop-script-5-image-thumbnails/" target="_blank">документации</a>, например, "200" или "200x0" и т.&nbsp;п. Стандартное значение, если размер не указан — "750x0".<br>Чтобы получить абсолютный URL изображения, используйте <code>{$wa-&gt;domainUrl()}</code>.<br>Пример:<br><code>{$base_url = $wa-&gt;domainUrl()}<br>{foreach $order.items as $item}<br>&nbsp;&nbsp;&nbsp;&nbsp;{$img_url = $wa-&gt;shop-&gt;productImgUrl($item, "200x0")}<br>&nbsp;&nbsp;&nbsp;&nbsp;{if $img_url}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src="{$base_url}{$img_url}"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;{/if}<br>{/foreach}</code>',
        '$order.discount' => 'Размер скидки (в валюте заказа)',
        '$order.tax' => 'Размер налога (в валюте заказа)',
        '$order.shipping' => 'Стоимость доставки (в валюте заказа)',
        '$order.total' => 'Итого (в валюте заказа)',
        '$order.comment' => 'Комментарий покупателя к заказу',
        '$status' => 'Текущее название статуса заказа',
        '$order_url' => 'URL страницы заказа в личном кабинете покупателя на витрине',
        '$order.params' => 'Массив с дополнительными параметрами заказа',
        '$order.params.shipping_name' => 'Название выбранного способа доставки',
        '$order.params.shipping_description' => 'Описание выбранного способа доставки',
        '$order.params.payment_name' => 'Название выбранного способа оплаты',
        '$order.params.payment_description' => 'Описание выбранного способа оплаты',
        '$order.params.auth_pin' => '4-символьный цифровой код доступа к информационной странице (только для незарегистрированных покупателей)',
        '$order.params.storefront' => 'Домен и путь к витрине Shop-Script, на которой был оформлен заказ',
        '$order.params.storefront_decoded' => 'Адрес витрины Shop-Script, на которой был оформлен заказ, с учетом национальных доменов (Punycode)',
        '$order.params.ip' => 'IP-адрес покупателя на момент формирования заказа',
        '$order.params.user_agent' => 'Значение User-Agent браузера покупателя на момент формирования заказа',
        '$order.params.<br>shipping_est_delivery' => 'Строка с информацией о приблизительном времени доставки (если определена)',
        '$order.params.tracking_number' => 'Идентификатор доставки заказа (если определен)',
        '$order.params<br>shipping_start_datetime' => 'Ближайшие возможные дата и время доставки в формате <em>yyyy-mm-dd hh:mm:ss</em>, например: <em>2001-12-31 12:30:59</em>.',
        '$order.params<br>shipping_end_datetime' => 'Последний возможный срок доставки в формате <em>yyyy-mm-dd hh:mm:ss</em>, например: <em>2001-12-31 13:30:59</em>.',
        '$order[\'params\']<br>[\'shipping_params_desired_delivery.date\']' => 'Желаемая дата доставки, выбранная покупателем, в формате <em>yyyy-mm-dd</em>, например: <em>2001-12-31</em>.',
        '$order[\'params\']<br>[\'shipping_params_desired_delivery.date_str\']' => 'Желаемая дата доставки, выбранная покупателем, в формате <em>dd.mm.yyyy</em>, например: <em>31.12.2001</em>.',
        '$order[\'params\']<br>[\'shipping_params_desired_delivery.interval\']' => 'Желаемый интервал времени доставки, выбранный покупателем, в формате <em>xx:xx-xx:xx</em>, например: <em>10:00-12:00</em>.',
        '$order.params. …' => 'Список параметров заказа может быть различным в зависимости от настроек обработки заказов и их статусов.',
        '$customer' => 'Массив информации о покупателе',
        '$customer.birth_day' => 'Номер дня в дате рождения покупателя',
        '$customer.birth_month' => 'Номер месяца в дате рождения покупателя',
        '$customer.birth_year' => 'Номер года в дате рождения покупателя',
        '$customer.name|escape' => 'Имя покупателя',
        '$customer.company|escape' => 'Название компании покупателя',
        '$customer.jobtitle|escape' => 'Рабочая должность покупателя',
        '$customer->get(\'phone\', \'default|top\')' => 'Телефонный номер покупателя',
        '$customer->get(\'email\', \'default\')|escape' => 'Email-адрес покупателя',
        '$customer->get(\'address:street\', \'default\')|escape ' => 'Улица и номер дома в адресе покупателя',
        '$customer->get(\'address:city\', \'default\')|escape ' => 'Название города покупателя',
        '$customer->get(\'address:zip\', \'default\')|escape ' => 'Почтовый индекс покупателя',
        '$customer->get(\'address:region\', \'value|default\')|escape ' => 'Название региона (области) в адресе покупателя',
        '$customer->get(\'address:country\', \'value|default\')|escape ' => 'Название страны в адресе покупателя',
        '$customer.affiliate_bonus' => 'Количество бонусов, накопленных покупателем в рамках «Бонусной программы», включенной в настройках магазина. Чтобы показать ограниченное количество знаков после запятой, добавьте модификатор, как показано в примере: <em>{$customer.affiliate_bonus|wa_format_number:0}</em> (не показывать цифры после запятой).',
        '$customer.total_spent' => 'Общая сумма денег в основной валюте, потраченная покупателем. Добавить форматированную сумму с обозначением валюты заказа: <code>{shop_currency($customer.total_spent, null, $order.currency)}</code>.',
        '$customer.number_of_orders' => 'Количество заказов, оформленных покупателем.',
        '$customer.last_order_id' => 'ID последнего заказа, оформленного покупателем. Добавить форматированный ID заказа: <code>{shopHelper::encodeOrderId($customer.last_order_id)}</code>.',
        '$customer. …' => 'Любое значение из свойств покупателя. Список доступных полей можно посмотреть в разделе «<em>Магазин → Настройки → Оформление заказа</em>». Замените многоточие (...) на идентификатор нужного поля.',
        '$shipping_address' => 'Адрес доставки одной строкой',
        '$billing_address' => 'Адрес плательщика одной строкой',
        '$shipping_date|wa_date:humandate' => 'Дата доставки, например: 16 февраля 2017',
        '$shipping_date|wa_date:shortdate' => 'Дата доставки, например: 16 февраля',
        '$shipping_date|wa_date:date' => 'Дата доставки, например: 16.02.2017',
        '$shipping_time_start' => 'Начало интервала времени доставки',
        '$shipping_time_end' => 'Конец интервала времени доставки',
        '$shipping_interval' => 'Дата и время доставки, например: 16 февраля, 10:00 - 20:30',
        '$courier' => 'Массив данных курьера',
        '$courier.name' => 'Имя курьера',
        '$courier.note' => 'Заметка',
        '$courier.contact' => 'Массив данных контакта курьера из приложения «Контакты», если курьер связан с существующим контактом',
        '$courier.contact->get(\'email\', \'default\')' => 'Email-адрес контакта курьера',
        '$courier.contact->get(\'phone\', \'default\')' => 'Номер телефона контакта курьера',
        '$action_data' => 'Массив с информацией о выполненном с заказом действии (применимо к данному действию)',
        '$action_data.text' => 'Комментарии о выполненном действии (применимо к данному действию)',
        '$action_data.params' => 'Массив параметров действия с заказом, например, $action_data.params.tracking_number — номер отправления для действия «Отправлен»',
        '$action_data.callback_transaction_data' => 'Массив с данными вызова-уведомления (callback), полученными плагином оплаты от платежной системы.',
        '$signup_url' => 'Адрес (URL) страницы регистрации. Значение будет пустым, если заказ был оформлен ранее зарегистрированным покупателем или если в основных настройках магазина выключена возможность оформления <a href="?action=settings#/checkout/">заказа без авторизации</a>.',
        '$is_affiliate_enabled' => 'Переменная указывает, включена ли <a href="?action=settings#/affiliate/">бонусная программа</a> в общих настройках магазина.',
        '$add_affiliate_bonus' => 'Сумма баллов, которые будут начислены на бонусный счет покупателя после оплаты заказа.',
      ),
      'followups' => 
      array (
        '$order' => 'Массив с информацией о заказе',
        '$order.id' => 'Номер заказа',
        '$order.currency' => 'Валюта заказа (ISO3-код)',
        '$order.items' => 'Массив с информацией о заказанных товарах',
        '$order.items[].price' => 'Цена товара',
        '$order.items[].quantity' => 'Количество заказанных единиц',
        '$order.items[].download_link' => 'Ссылка на файл цифрового товара (для артикула)',
        '$wa->shop->productImgUrl($item, $size)' => 'Относительный URL основного изображения заказанного товара с указанием размера.<br><code>$item</code> должно содержать элемент массива <code>$order.items</code>.<br><code>$size</code> должно содержать одно из значений размера, описанных в  <a href="https://www.shop-script.ru/help/5/shop-script-5-image-thumbnails/" target="_blank">документации</a>, например, "200" или "200x0" и т.&nbsp;п. Стандартное значение, если размер не указан — "750x0".<br>Чтобы получить абсолютный URL изображения, используйте <code>{$wa-&gt;domainUrl()}</code>.<br>Пример:<br><code>{$base_url = $wa-&gt;domainUrl()}<br>{foreach $order.items as $item}<br>&nbsp;&nbsp;&nbsp;&nbsp;{$img_url = $wa-&gt;shop-&gt;productImgUrl($item, "200x0")}<br>&nbsp;&nbsp;&nbsp;&nbsp;{if $img_url}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src="{$base_url}{$img_url}"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;{/if}<br>{/foreach}</code>',
        '$order.discount' => 'Размер скидки (в валюте заказа)',
        '$order.tax' => 'Размер налога (в валюте заказа)',
        '$order.shipping' => 'Стоимость доставки (в валюте заказа)',
        '$order.total' => 'Итого (в валюте заказа)',
        '$order.comment' => 'Комментарий покупателя к заказу',
        '$status' => 'Текущее название статуса заказа',
        '$order_url' => 'URL страницы заказа в личном кабинете покупателя на витрине',
        '$order.params' => 'Массив с дополнительными параметрами заказа',
        '$order.params.shipping_name' => 'Название выбранного способа доставки',
        '$order.params.shipping_description' => 'Описание выбранного способа доставки',
        '$order.params.payment_name' => 'Название выбранного способа оплаты',
        '$order.params.payment_description' => 'Описание выбранного способа оплаты',
        '$order.params.auth_pin' => '4-символьный цифровой код доступа к информационной странице (только для незарегистрированных покупателей)',
        '$order.params.storefront' => 'Домен и путь к витрине Shop-Script, на которой был оформлен заказ',
        '$order.params.storefront_decoded' => 'Адрес витрины Shop-Script, на которой был оформлен заказ, с учетом национальных доменов (Punycode)',
        '$order.params.ip' => 'IP-адрес покупателя на момент формирования заказа',
        '$order.params.user_agent' => 'Значение User-Agent браузера покупателя на момент формирования заказа',
        '$order.params.<br>shipping_est_delivery' => 'Строка с информацией о приблизительном времени доставки (если определена)',
        '$order.params.tracking_number' => 'Идентификатор доставки заказа (если определен)',
        '$order.params.<br>shipping_start_datetime' => 'Ближайшая дата и время доставки в формате <em>yyyy-mm-dd</em>, например, <em>2001-12-31</em>.',
        '$order.params.<br>shipping_end_datetime' => 'Последний возможный срок доставки в формате <em>yyyy-mm-dd hh:mm:ss</em>, например: <em>2001-12-31 13:30:59</em>.',
        '$order[\'params\']<br>[\'shipping_params_desired_delivery.date\']' => 'Желаемая дата доставки, выбранная покупателем, в формате <em>yyyy-mm-dd</em>, например: <em>2001-12-31</em>.',
        '$order[\'params\']<br>[\'shipping_params_desired_delivery.date_str\']' => 'Желаемая дата доставки, выбранная покупателем, в формате <em>dd.mm.yyyy</em>, например: <em>31.12.2001</em>.',
        '$order[\'params\']<br>[\'shipping_params_desired_delivery.interval\']' => 'Желаемый интервал времени доставки, выбранный покупателем, в формате <em>xx:xx-xx:xx</em>, например: <em>10:00-12:00</em>.',
        '$order.params. …' => 'Список параметров заказа может быть различным в зависимости от настроек обработки заказов и их статусов.',
        '$customer' => 'Массив информации о покупателе',
        '$customer.birth_day' => 'Номер дня в дате рождения покупателя',
        '$customer.birth_month' => 'Номер месяца в дате рождения покупателя',
        '$customer.birth_year' => 'Номер года в дате рождения покупателя',
        '$customer.name|escape' => 'Имя покупателя',
        '$customer.company|escape' => 'Название компании покупателя',
        '$customer.jobtitle|escape' => 'Рабочая должность покупателя',
        '$customer->get(\'phone\', \'default|top\')' => 'Телефонный номер покупателя',
        '$customer->get(\'email\', \'default\')|escape' => 'Email-адрес покупателя',
        '$customer->get(\'address:street\', \'default\')|escape ' => 'Улица и номер дома в адресе покупателя',
        '$customer->get(\'address:city\', \'default\')|escape ' => 'Название города покупателя',
        '$customer->get(\'address:zip\', \'default\')|escape ' => 'Почтовый индекс покупателя',
        '$customer->get(\'address:region\', \'value|default\')|escape ' => 'Название региона (области) в адресе покупателя',
        '$customer->get(\'address:country\', \'value|default\')|escape ' => 'Название страны в адресе покупателя',
        '$customer.affiliate_bonus' => 'Количество бонусов, накопленных покупателем в рамках «Бонусной программы», включенной в настройках магазина. Чтобы показать ограниченное количество знаков после запятой, добавьте модификатор, как показано в примере: <em>{$customer.affiliate_bonus|wa_format_number:0}</em> (не показывать цифры после запятой).',
        '$customer.total_spent' => 'Общая сумма денег в основной валюте, потраченная покупателем. Добавить форматированную сумму с обозначением валюты заказа: <code>{shop_currency($customer.total_spent, null, $order.currency)}</code>.',
        '$customer.number_of_orders' => 'Количество заказов, оформленных покупателем.',
        '$customer.last_order_id' => 'ID последнего заказа, оформленного покупателем. Добавить форматированный ID заказа: <code>{shopHelper::encodeOrderId($customer.last_order_id)}</code>.',
        '$customer. …' => 'Любое значение из свойств покупателя. Список доступных полей можно посмотреть в разделе «<em>Магазин → Настройки → Оформление заказа</em>». Замените многоточие (...) на идентификатор нужного поля.',
        '$shipping_address' => 'Адрес доставки одной строкой',
        '$billing_address' => 'Адрес плательщика одной строкой',
        '$courier' => 'Массив данных курьера',
        '$courier.name' => 'Имя курьера',
        '$courier.note' => 'Заметка',
        '$courier.contact' => 'Массив данных контакта курьера из приложения «Контакты», если курьер связан с существующим контактом',
        '$courier.contact->get(\'email\', \'default\')' => 'Email-адрес контакта курьера',
        '$courier.contact->get(\'phone\', \'default\')' => 'Номер телефона контакта курьера',
        '$signup_url' => 'Адрес (URL) страницы регистрации. Значение будет пустым, если заказ был оформлен ранее зарегистрированным покупателем или если в основных настройках магазина выключена возможность оформления <a href="?action=settings#/checkout/">заказа без авторизации</a>.',
      ),
    ),
    'blocks' => 
    array (
    ),
  ),
  'site' => 
  array (
    'themes' => true,
    'vars' => 
    array (
      'page.html' => 
      array (
        '$page.name' => 'Название страницы',
        '$page.title' => 'Заголовок страницы (&lt;title&gt;)',
        '$page.content' => 'Содержимое страницы',
        '$page.update_datetime' => 'Время последнего обновления страницы',
      ),
      '$wa' => 
      array (
        '$wa->site->pages()' => 'Возвращает массив страниц, связанных с данным поселением приложения «Сайт». Каждая страница представляет собой массив со следующей структурой: <em>"id", "name", "title", "url", "create_datetime", "update_datetime", "content"[, "custom_1", "custom_2", …]</em>',
        '$wa->site->page(<em>id</em>)' => 'Возвращает информацию о странице (массив) по идентификатору <em>id</em> (int)',
      ),
      'index.html' => 
      array (
        '$content' => 'Содержимое',
        '$meta_keywords' => 'META Keywords',
        '$meta_description' => 'META Description',
      ),
      'error.html' => 
      array (
        '$error_code' => 'Код ошибки (например, 404)',
        '$error_message' => 'Сообщение об ошибке',
      ),
    ),
    'blocks' => 
    array (
      'send_email_form' => 
      array (
        'description' => 'Форма для отправки сообщений',
        'content' => '
<style>
    .wa-form { float: left; margin: 10px 0; overflow: visible; }
    .wa-form .wa-field { clear: left; margin: 0; padding-top: 3px; }
    .wa-form .wa-field .wa-name { float: left; width: 155px; padding-top: 0.05em; padding-bottom: 10px; font-size: 0.95em; }
    .wa-form .wa-field .wa-value { margin-left: 180px; margin-bottom: 5px; position: relative; }
    .wa-form .wa-field .wa-value.wa-submit { margin-top: 0; }
    .wa-form .wa-field .wa-value input[type="text"], .wa-form .wa-field .wa-value input[type="email"], .wa-form .wa-field .wa-value input[type="password"] { width: 30%; min-width: 200px; margin: 0; }
    .wa-form .wa-field .wa-value textarea { min-width: 300px; height: 70px; }
    input, textarea { font-size: 1em; color: black; font-family: "Georgia", Times, serif; }
    .wa-form .wa-captcha { padding: 7px 0 10px; }
    .wa-form .wa-captcha p { clear: left; margin: 0; }
    .wa-captcha img { float: left; margin-right: 5px; margin-top: -8px; }
    .wa-captcha .wa-captcha-refresh { color: #AAAAAA; font-size: 0.8em; text-decoration: underline; }

    @media (max-width: 760px) {
        .wa-form .wa-field:not(:first-child) { padding: 0; }
        .wa-form .wa-field:not(:first-child) { margin-top: 1rem; }
        .wa-form .wa-field .wa-name { float: none; width: auto; margin: 0; padding: 0; }
        .wa-form .wa-field .wa-value { float: none; width: auto; margin: .5rem 0 0; padding: 0; }
    }
</style>
{$errors = array()}
{if $wa->post("send") and $wa->sendEmail("", $errors)}
<h1>[s`Thank you!`]</h1>
<p>[s`Your message has been sent.`]</p>
{else}
<div class="wa-form">
  <form method="post" action="">
  <div class="wa-field">
    <div class="wa-name">[s`Name`]:</div>
    <div class="wa-value"><input name="name" type="text" value="{$wa->post("name")|escape}"></div>
  </div>
  <div class="wa-field">
    <div class="wa-name">[s`Email`]:</div>
    <div class="wa-value">
      <input {if !empty($errors.email)}class="wa-error"{/if} name="email" type="email" value="{$wa->post("email")|escape}" >
      {if !empty($errors.email)}<em class="wa-error-msg">{$errors.email}</em>{/if}
    </div>
  </div>
  <div class="wa-field">
    <div class="wa-name">[s`Message`]:</div>
    <div class="wa-value">
      <input type="hidden" name="subject" value="[s`Request from website`]">
      <textarea {if !empty($errors.body)}class="wa-error"{/if} name="body">{$wa->post("body")|escape}</textarea>
      {if !empty($errors.body)}<em class="wa-error-msg">{$errors.body}</em>{/if}
    </div>
  </div>
  <div class="wa-field">
    <div class="wa-value">
        {$wa->captcha(!empty($errors.captcha))}
        {if !empty($errors.captcha)}<em class="wa-error-msg">{$errors.captcha}</em>{/if}
    </div>
  </div>

  {$agreement_link = ""}
  {if $agreement_link}
    <div class="wa-field">
      <div class="wa-value">
        <input type="hidden" name="agree_to_terms" value="">
        <label>
          <input type="checkbox" name="agree_to_terms" value="1"{if $wa->post("agree_to_terms")} checked{/if}>
          [s`I agree to the`] <a href="{$agreement_link|escape}" target="_blank">[s`personal data protection policy`]</a>
          {if !empty($errors.agree_to_terms)}<em class="wa-error-msg">{$errors.agree_to_terms}</em>{/if}
        </label>
      </div>
    </div>
  {/if}

  <div class="wa-field">
    <div class="wa-value wa-submit">
      {if !empty($errors.all)}<em class="wa-error-msg">{$errors.all}</em><br>{/if}
      <input type="submit" value="[s`Send`]" name="send">
    </div>
  </div>
  </form>
</div>
{/if}',
      ),
    ),
  ),
  'webasyst' => 
  array (
    'vars_tab_names' => 
    array (
      'email_template_successful_signup' => 'Успешная регистрация',
      'email_template_confirm_signup' => 'Подтверждение регистрации',
      'email_template_recovery_password' => 'Восстановление пароля',
      'email_template_password' => 'Пароль',
      'email_template_onetime_password' => 'Одноразовый пароль',
      'email_template_confirmation_code' => 'Код подтверждения',
      'sms_templates' => 'SMS-шаблоны',
    ),
    'vars' => 
    array (
      'email_template_successful_signup' => 
      array (
        '$site_name' => 'Название сайта, с которого отправлено уведомление',
        '$site_url' => 'Адрес сайта, с которого отправлено уведомление',
        '$login_url' => 'URL страницы входа',
        '$email' => 'Email-адрес пользователя',
        '$password' => 'Сгенерированный пароль',
      ),
      'email_template_confirm_signup' => 
      array (
        '$site_name' => 'Название сайта, с которого отправлено уведомление',
        '$site_url' => 'Адрес сайта, с которого отправлено уведомление',
        '$confirmation_url' => 'URL ссылки подтверждения регистрации',
      ),
      'email_template_recovery_password' => 
      array (
        '$site_name' => 'Название сайта, с которого отправлено уведомление',
        '$site_url' => 'Адрес сайта, с которого отправлено уведомление',
        '$login_url' => 'URL страницы входа',
        '$recovery_url' => 'URL страницы восстановления пароля',
      ),
      'email_template_password' => 
      array (
        '$site_name' => 'Название сайта, с которого отправлено уведомление',
        '$site_url' => 'Адрес сайта, с которого отправлено уведомление',
        '$login_url' => 'URL страницы входа',
        '$password' => 'Одноразовый пароль',
      ),
      'email_template_onetime_password' => 
      array (
        '$site_name' => 'Название сайта, с которого отправлено уведомление',
        '$site_url' => 'Адрес сайта, с которого отправлено уведомление',
        '$login_url' => 'URL страницы входа',
        '$password' => 'Одноразовый пароль',
      ),
      'email_template_confirmation_code' => 
      array (
        '$site_name' => 'Название сайта, с которого отправлено уведомление',
        '$site_url' => 'Адрес сайта, с которого отправлено уведомление',
        '$login_url' => 'URL страницы входа',
        '$code' => 'Код подтверждения',
      ),
      'sms_templates' => 
      array (
        '$password' => '<strong>Сгенерированный пароль</strong> в шаблоне <strong>Успешная регистрация</strong>.<br><strong>Новый пароль</strong> в шаблоне <strong>Пароль</strong>.<br><strong>Одноразовый пароль</strong> в шаблоне <strong>Одноразовый пароль</strong>.',
        '$code' => '<strong>Код подтверждения</strong> в шаблоне <strong>Подтверждение регистрации</strong>.<br><strong>Код подтверждения</strong> в шаблоне <strong>Восстановление пароля</strong>.<br><strong>Код подтверждения</strong> в шаблоне <strong>Код подтверждения</strong>.',
      ),
    ),
  ),
);
