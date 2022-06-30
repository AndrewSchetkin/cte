<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

?>
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
                <? $APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "botchild",    // Тип меню для остальных уровней
                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "2",    // Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "N",    // Учитывать права доступа
                    "ROOT_MENU_TYPE" => "bottom",    // Тип меню для первого уровня
                    "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                ),
                    false
                ); ?>
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
<?php
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/vendor/swiper-bundle.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/vendor/fancybox.umd.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mainBundle.js?1656531096047");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/vendor/demo.js?1656531096047");
?>
</body>
</html>