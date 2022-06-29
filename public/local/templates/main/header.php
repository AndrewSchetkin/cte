<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;
IncludeTemplateLangFile(__FILE__);
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
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/vendor/swiper-bundle.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/vendor/fancybox.css");
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?
    Asset::getInstance()->addCss("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,700&display=swap");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/main.css?1656531096047");
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
            "CHILD_MENU_TYPE" => "top",    // Тип меню для остальных уровней
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
            <div class="header__contacts-item header__contacts-item_phone"><a href="tel:88008880099">8 (800) 888-00-99</a></div>
            <div class="header__contacts-item header__contacts-item_mail">
                <a href="mailto:cte-kami@stanki.ru" target="_blank">cte-kami@stanki.ru</a></div>
        </div>
        <button class="header__callback" type="button">Обратный звонок</button>
        <button class="header__burger" type="button">Открыть меню</button>
    </div>
</header>
<main class="page page_front">
    <section class="front-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="front-slider__item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/content/front-slider_1.jpg')">
                        <div class="front-slider__content">
                            <div class="front-slider__title">Центр технического обучения КАМИ</div>
                            <p class="front-slider__description">Время получить новые знания</p>
                            <div class="front-slider__buttons"><a class="btn btn_main" href="#">Программы
                                    обучения</a><a class="btn btn_light" href="#">Оставить заявку</a></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="front-slider__item swiper-lazy" data-background="<?=SITE_TEMPLATE_PATH?>/img/content/front-slider_1.jpg">
                        <div class="swiper-lazy-preloader"></div>
                        <div class="front-slider__content">
                            <div class="front-slider__title">Центр технического обучения КАМИ Центр технического
                                обучения КАМИ
                            </div>
                            <p class="front-slider__description">Время получить новые знания Время получить новые знания
                                Время получить новые знания Время получить</p>
                            <div class="front-slider__buttons"><a class="btn btn_main" href="#">Программы
                                    обучения</a><a class="btn btn_light" href="#">Оставить заявку</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="front-block">
        <div class="container">
            <h2 class="front-block__title">Учебные программы</h2>
            <div class="front-block__content">
                <div class="cards-list">
                    <ul>
                        <li class="cards-list__item">
                            <a class="cards-list__item-img-wrapper" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/card-item-1.jpg" alt="Название программы"></a>
                            <div class="cards-list__item-content">
                                <div class="cards-list__item-labels">
                                    <span class="cards-list__item-label cards-list__item-label_red">Очная форма обучения</span><span class="cards-list__item-label">72 ак. часа</span>
                                </div>
                                <a class="cards-list__item-name" href="#">Программирование и эксплуатация станков с ЧПУ
                                    HNC Токарная обработка</a>
                            </div>
                        </li>
                        <li class="cards-list__item">
                            <a class="cards-list__item-img-wrapper" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/card-item-1.jpg" alt="Название программы"></a>
                            <div class="cards-list__item-content">
                                <div class="cards-list__item-labels">
                                    <span class="cards-list__item-label cards-list__item-label_red">Очная форма обучения</span><span class="cards-list__item-label">72 ак. часа</span>
                                </div>
                                <a class="cards-list__item-name" href="#">Программирование и эксплуатация станков с ЧПУ
                                    HNC Токарная обработка</a>
                            </div>
                        </li>
                        <li class="cards-list__item">
                            <a class="cards-list__item-img-wrapper" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/card-item-1.jpg" alt="Название программы"></a>
                            <div class="cards-list__item-content">
                                <div class="cards-list__item-labels">
                                    <span class="cards-list__item-label cards-list__item-label_red">Очная форма обучения</span><span class="cards-list__item-label">72 ак. часа</span>
                                </div>
                                <a class="cards-list__item-name" href="#">Программирование и эксплуатация станков с ЧПУ
                                    HNC Токарная обработка</a>
                            </div>
                        </li>
                        <li class="cards-list__item">
                            <a class="cards-list__item-img-wrapper" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/card-item-1.jpg" alt="Название программы"></a>
                            <div class="cards-list__item-content">
                                <div class="cards-list__item-labels">
                                    <span class="cards-list__item-label cards-list__item-label_red">Очная форма обучения</span><span class="cards-list__item-label">72 ак. часа</span>
                                </div>
                                <a class="cards-list__item-name" href="#">Программирование и эксплуатация станков с ЧПУ
                                    HNC Токарная обработка</a>
                            </div>
                        </li>
                        <li class="cards-list__item">
                            <a class="cards-list__item-img-wrapper" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/card-item-1.jpg" alt="Название программы"></a>
                            <div class="cards-list__item-content">
                                <div class="cards-list__item-labels">
                                    <span class="cards-list__item-label cards-list__item-label_red">Очная форма обучения</span><span class="cards-list__item-label">72 ак. часа</span>
                                </div>
                                <a class="cards-list__item-name" href="#">Программирование и эксплуатация станков с ЧПУ
                                    HNC Токарная обработка</a>
                            </div>
                        </li>
                        <li class="cards-list__item">
                            <a class="cards-list__item-img-wrapper" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/card-item-2.jpg" alt="Название программы"></a>
                            <div class="cards-list__item-content">
                                <div class="cards-list__item-labels">
                                    <span class="cards-list__item-label cards-list__item-label_red">Очная форма обучения</span><span class="cards-list__item-label">72 ак. часа</span>
                                </div>
                                <a class="cards-list__item-name" href="#">Оператор станков с программным управлением</a>
                            </div>
                        </li>
                        <li class="cards-list__item">
                            <a class="cards-list__item-img-wrapper" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/card-item-1.jpg" alt="Название программы"></a>
                            <div class="cards-list__item-content">
                                <div class="cards-list__item-labels">
                                    <span class="cards-list__item-label cards-list__item-label_red">Очная форма обучения</span><span class="cards-list__item-label">72 ак. часа</span>
                                </div>
                                <a class="cards-list__item-name" href="#">Повышение разряда операторов</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="front-block front-block_gray front-block_noline">
        <div class="container">
            <div class="front-block__title">Ответы на часто задаваемые вопросы</div>
            <div class="front-block__content">
                <div class="faq">
                    <div class="faq__column">
                        <div class="faq__item">
                            <div class="faq__item-head"><span>Чем я смогу заниматься после прохождения курса?</span>
                                <button type="button"></button>
                            </div>
                            <div class="faq__item-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                        <div class="faq__item">
                            <div class="faq__item-head"><span>Чем я смогу заниматься после прохождения курса? смогу заниматься смогу</span>
                                <button type="button"></button>
                            </div>
                            <div class="faq__item-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididu
                            </div>
                        </div>
                        <div class="faq__item">
                            <div class="faq__item-head"><span>Чем я смогу заниматься после прохождения курса?</span>
                                <button type="button"></button>
                            </div>
                            <div class="faq__item-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                        <div class="faq__item">
                            <div class="faq__item-head"><span>Чем я смогу заниматься после прохождения курса? смогу заниматься смогу</span>
                                <button type="button"></button>
                            </div>
                            <div class="faq__item-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididu
                            </div>
                        </div>
                    </div>
                    <div class="faq__column">
                        <div class="faq__item">
                            <div class="faq__item-head"><span>Чем я смогу заниматься после прохождения курса? смогу заниматься смогу</span>
                                <button type="button"></button>
                            </div>
                            <div class="faq__item-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididu
                            </div>
                        </div>
                        <div class="faq__item">
                            <div class="faq__item-head"><span>Чем я смогу заниматься после прохождения курса?</span>
                                <button type="button"></button>
                            </div>
                            <div class="faq__item-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi
                            </div>
                        </div>
                        <div class="faq__item">
                            <div class="faq__item-head"><span>Чем я смогу заниматься после прохождения курса? смогу заниматься смогу</span>
                                <button type="button"></button>
                            </div>
                            <div class="faq__item-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididu
                            </div>
                        </div>
                        <div class="faq__item">
                            <div class="faq__item-head"><span>Чем я смогу заниматься после прохождения курса?</span>
                                <button type="button"></button>
                            </div>
                            <div class="faq__item-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cert-block">
        <div class="container">
            <a class="cert-block__img" href="img/content/cert.jpg" data-fancybox="cert"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/cert.jpg" alt="Сертификат"></a>
            <div class="cert-block__content">
                <h2 class="cert-block__title"><span>Сертификат официального <br>представителя HN</span></h2>
                <div class="cert-block__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="front-block front-block_gray">
        <div class="container">
            <div class="front-block__title">Наши преподаватели</div>
            <div class="front-block__content">
                <div class="teachers teachers_slider gallery">
                    <div class="swiper js-gallery-4-items">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="teachers__item">
                                    <div class="teachers__item-name">Иванов Василий Иванович</div>
                                    <div class="teachers__item-position">Преподаватель по токарному оборудованию</div>
                                    <div class="teachers__item-img">
                                        <img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/teachers1.jpg" alt="Имя">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="teachers__item">
                                    <div class="teachers__item-name">Иванов Василий Иванович</div>
                                    <div class="teachers__item-position">Преподаватель по токарному оборудованию</div>
                                    <div class="teachers__item-img">
                                        <img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/teachers1.jpg" alt="Имя">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="teachers__item">
                                    <div class="teachers__item-name">Иванов Василий Иванович</div>
                                    <div class="teachers__item-position">Преподаватель по токарному оборудованию</div>
                                    <div class="teachers__item-img">
                                        <img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/teachers1.jpg" alt="Имя">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="teachers__item">
                                    <div class="teachers__item-name">Иванов Василий Иванович</div>
                                    <div class="teachers__item-position">Преподаватель по токарному оборудованию</div>
                                    <div class="teachers__item-img">
                                        <img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/teachers1.jpg" alt="Имя">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="teachers__item">
                                    <div class="teachers__item-name">Иванов Василий Иванович</div>
                                    <div class="teachers__item-position">Преподаватель по токарному оборудованию</div>
                                    <div class="teachers__item-img">
                                        <img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/teachers1.jpg" alt="Имя">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="teachers__item">
                                    <div class="teachers__item-name">Иванов Василий Иванович</div>
                                    <div class="teachers__item-position">Преподаватель по токарному оборудованию</div>
                                    <div class="teachers__item-img">
                                        <img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/teachers1.jpg" alt="Имя">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="teachers__item">
                                    <div class="teachers__item-name">Иванов Василий Иванович</div>
                                    <div class="teachers__item-position">Преподаватель по токарному оборудованию</div>
                                    <div class="teachers__item-img">
                                        <img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/teachers1.jpg" alt="Имя">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="teachers__item">
                                    <div class="teachers__item-name">Иванов Василий Иванович</div>
                                    <div class="teachers__item-position">Преподаватель по токарному оборудованию</div>
                                    <div class="teachers__item-img">
                                        <img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/teachers1.jpg" alt="Имя">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="teachers__item">
                                    <div class="teachers__item-name">Иванов Василий Иванович</div>
                                    <div class="teachers__item-position">Преподаватель по токарному оборудованию</div>
                                    <div class="teachers__item-img">
                                        <img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/teachers1.jpg" alt="Имя">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="teachers__item">
                                    <div class="teachers__item-name">Иванов Василий Иванович</div>
                                    <div class="teachers__item-position">Преподаватель по токарному оборудованию</div>
                                    <div class="teachers__item-img">
                                        <img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/teachers1.jpg" alt="Имя">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-controls">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="front-block">
        <div class="container">
            <div class="front-block__title">Фото с обучения</div>
            <div class="front-block__content">
                <div class="gallery gallery_fw">
                    <div class="swiper js-gallery-auto-items">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="<?=SITE_TEMPLATE_PATH?>/img/content/teachers1.jpg" data-fancybox="front-gallery"><img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/teachers1.jpg" alt="Имя">
                                    <div class="swiper-lazy-preloader"></div>
                                </a></div>
                            <div class="swiper-slide">
                                <a href="<?=SITE_TEMPLATE_PATH?>/img/content/gallery-1.jpg" data-fancybox="front-gallery"><img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/gallery-1.jpg" alt="Имя">
                                    <div class="swiper-lazy-preloader"></div>
                                </a></div>
                            <div class="swiper-slide">
                                <a href="<?=SITE_TEMPLATE_PATH?>/img/content/gallery-2.jpg" data-fancybox="front-gallery"><img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/gallery-2.jpg" alt="Имя">
                                    <div class="swiper-lazy-preloader"></div>
                                </a></div>
                            <div class="swiper-slide">
                                <a href="<?=SITE_TEMPLATE_PATH?>/img/content/gallery-3.jpg" data-fancybox="front-gallery"><img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/gallery-3.jpg" alt="Имя">
                                    <div class="swiper-lazy-preloader"></div>
                                </a></div>
                            <div class="swiper-slide">
                                <a href="<?=SITE_TEMPLATE_PATH?>/img/content/gallery-1.jpg" data-fancybox="front-gallery"><img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/gallery-1.jpg" alt="Имя">
                                    <div class="swiper-lazy-preloader"></div>
                                </a></div>
                            <div class="swiper-slide">
                                <a href="<?=SITE_TEMPLATE_PATH?>/img/content/gallery-2.jpg" data-fancybox="front-gallery"><img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/gallery-2.jpg" alt="Имя">
                                    <div class="swiper-lazy-preloader"></div>
                                </a></div>
                            <div class="swiper-slide">
                                <a href="<?=SITE_TEMPLATE_PATH?>/img/content/gallery-3.jpg" data-fancybox="front-gallery"><img class="swiper-lazy" data-src="<?=SITE_TEMPLATE_PATH?>/img/content/gallery-3.jpg" alt="Имя">
                                    <div class="swiper-lazy-preloader"></div>
                                </a></div>
                        </div>
                        <div class="swiper-controls">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="front-block front-block_gray">
        <div class="container">
            <div class="front-block__title">Новости <a href="/news/" class="front-block__title-link">Все новости</a>
            </div>
            <div class="front-block__content">
                <div class="news news_slider gallery">
                    <div class="swiper js-gallery-4-items">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><a class="news__item" href="#">
                                    <div class="news__item-title">Ассоциация «КАМИ» приглашает вас на выставку
                                        «ИНДУСТРИЯ КАМНЯ 2022»
                                    </div>
                                    <div class="news__item-text">Мы приглашаем вас на 22-ю международную выставку
                                        «ИНДУСТРИЯ КАМНЯ». В связи с кардинальными изменениями, произошедшими в этом
                                        году в камнеобрабатывающей отрасли и мире в целом, посещение выставки в этом
                                        году как никогда актуально.
                                    </div>
                                    <div class="news__item-date">01 июня 2022</div>
                                </a></div>
                            <div class="swiper-slide"><a class="news__item" href="#">
                                    <div class="news__item-title">Ассоциация «КАМИ» приглашает</div>
                                    <div class="news__item-text">Мы приглашаем вас на 22-ю международную выставку
                                        «ИНДУСТРИЯ КАМНЯ».
                                    </div>
                                    <div class="news__item-date">09 июня 2022</div>
                                </a></div>
                            <div class="swiper-slide"><a class="news__item" href="#">
                                    <div class="news__item-title">Ассоциация «КАМИ» приглашает вас на выставку
                                        «ИНДУСТРИЯ КАМНЯ 2022»
                                    </div>
                                    <div class="news__item-text">Мы приглашаем вас на 22-ю международную выставку
                                        «ИНДУСТРИЯ КАМНЯ». В связи с кардинальными изменениями, произошедшими в этом
                                        году в камнеобрабатывающей отрасли и мире в целом, посещение выставки в этом
                                        году как никогда актуально.
                                    </div>
                                    <div class="news__item-date">01 июня 2022</div>
                                </a></div>
                            <div class="swiper-slide"><a class="news__item" href="#">
                                    <div class="news__item-title">Ассоциация «КАМИ» приглашает</div>
                                    <div class="news__item-text">Мы приглашаем вас на 22-ю международную выставку
                                        «ИНДУСТРИЯ КАМНЯ».
                                    </div>
                                    <div class="news__item-date">09 июня 2022</div>
                                </a></div>
                            <div class="swiper-slide"><a class="news__item" href="#">
                                    <div class="news__item-title">Ассоциация «КАМИ» приглашает вас на выставку
                                        «ИНДУСТРИЯ КАМНЯ 2022»
                                    </div>
                                    <div class="news__item-text">Мы приглашаем вас на 22-ю международную выставку
                                        «ИНДУСТРИЯ КАМНЯ». В связи с кардинальными изменениями, произошедшими в этом
                                        году в камнеобрабатывающей отрасли и мире в целом, посещение выставки в этом
                                        году как никогда актуально.
                                    </div>
                                    <div class="news__item-date">01 июня 2022</div>
                                </a></div>
                            <div class="swiper-slide"><a class="news__item" href="#">
                                    <div class="news__item-title">Ассоциация «КАМИ» приглашает</div>
                                    <div class="news__item-text">Мы приглашаем вас на 22-ю международную выставку
                                        «ИНДУСТРИЯ КАМНЯ».
                                    </div>
                                    <div class="news__item-date">09 июня 2022</div>
                                </a></div>
                        </div>
                        <div class="swiper-controls">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer" id="footer">
    <div class="container">
        <div class="footer__form question-block">
            <div class="question-block__title">Остались вопросы?</div>
            <div class="question-block__subtitle">Оставьте заявку и получите консультацию на возникшие вопросы у нашего
                специалиста
            </div>
            <form class="question-block__form form form_question">
                <div class="form__item">
                    <input type="text" name="NAME" placeholder="Ваше имя" required="required"/>
                </div>
                <div class="form__item">
                    <input type="tel" name="PHONE" placeholder="Ваш телефон" required="required"/>
                </div>
                <div class="form__actions">
                    <input class="btn btn_main btn_round" type="submit" value="Отправить заявку"/>
                </div>
            </form>
        </div>
    </div>
    <div class="footer__body">
        <div class="container">
            <a class="footer__logo" href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="Логотип" width="158"/></a>
            <div class="footer__menu">
                <ul>
                    <li><a href="#">Обучающий центр</a>
                        <ul>
                            <li><a href="#">Основные сведения</a></li>
                            <li><a href="#">Структура оргранизации</a></li>
                            <li><a href="#">Правила приема</a></li>
                            <li><a href="#">Документы для выпускников</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Программы обучения</a>
                        <ul>
                            <li><a href="#">График обучения</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Трудоустройство</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
            <div class="footer__contacts">
                <a class="footer__contacts-item footer__contacts-item_phone" href="tel:88008889900">8 (800)
                    888-99-00</a><a class="footer__contacts-item footer__contacts-item_mail" href="mailto:primerinfo@mail.ru" target="_blank">primerinfo@mail.ru</a><a class="footer__contacts-item footer__contacts-item_map" href="https://yandex.ru/maps/-/CCUNU0SjPD" target="_blank">г.
                    Москва, ул. Большая Семеновская, д. 40, стр. 13</a></div>
            <div class="footer__copyright">
                <p>Вы принимаете условия <a href="#" target="_blank" rel="nofollow">политики конфиденциальности</a> и
                    <a href="#" target="_blank" rel="nofollow">пользовательского соглашения</a> каждый раз, когда
                    оставляете свои данные в любой форме обратной связи на сайте stanki.ru.</p><span>© Copyright 2022. Все права защищены.</span>
            </div>
        </div>
    </div>
</footer>
<script src="<?=SITE_TEMPLATE_PATH?>/js/vendor/swiper-bundle.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/vendor/fancybox.umd.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/mainBundle.js?1656531096047" defer="defer"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/vendor/demo.js?1656531096047" defer="defer"></script>
</body>
</html>