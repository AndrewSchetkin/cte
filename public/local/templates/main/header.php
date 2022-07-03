<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$curPage = $APPLICATION->GetCurPage(false);
?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="imagetoolbar" content="no">
        <meta name="msthemecompatible" content="no">
        <meta name="cleartype" content="on">
        <meta name="HandheldFriendly" content="True">
        <meta name="format-detection" content="telephone=no">
        <meta name="format-detection" content="address=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <!-- - vendorScripts.push(['js/vendor/imask.js', 'defer']);-->
        <?
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/vendor/swiper-bundle.min.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/vendor/fancybox.css");
        ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <?
        Asset::getInstance()->addCss("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,700&display=swap");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css?1656531096047");
        ?>
        <? $APPLICATION->ShowHead(); ?>
        <title><? $APPLICATION->ShowTitle() ?></title>
    </head>
<body class="front">
<? $APPLICATION->ShowPanel() ?>
    <header class="header">
        <div class="container">
            <a class="header__logo" href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="KAMI ЦТО логотип" width="158" height="84"/></a>
            <? $APPLICATION->IncludeComponent("bitrix:menu", "top", array(
                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "topchild",    // Тип меню для остальных уровней
                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "2",    // Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "N",    // Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
                false
            ); ?>
            <div class="header__contacts">
                <div class="header__contacts-item header__contacts-item_phone"><a href="tel:88008880099">8 (800)
                        888-00-99</a></div>
                <div class="header__contacts-item header__contacts-item_mail">
                    <a href="mailto:cte-kami@stanki.ru" target="_blank">cte-kami@stanki.ru</a></div>
            </div>
            <button class="header__callback" type="button">Обратный звонок</button>
            <button class="header__burger" type="button">Открыть меню</button>
        </div>
    </header>
<? if ($curPage === '/'): ?>
    <main class="page page_front">
<? else: ?>
    <div class="page page_inner">
        <div class="container">
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
                "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                    "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                    "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                    "COMPONENT_TEMPLATE" => "breadcrumbs"
                ),
                false
            );?>
            <h1 class="page__title"><?$APPLICATION->ShowTitle(false);?></h1>
            <main class="page__content">
<? endif; ?>