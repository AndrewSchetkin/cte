<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var $news_detail_page boolean
 */

use Bitrix\Main\Page\Asset;

?>
<? if ($curPage === '/'): ?>
    </main>
<? else: ?>
    </main>
    </div>
    <?
    if ($GLOBALS["news_from"]) {
        $GLOBALS["otherNews"] = [
            ">ACTIVE_FROM" => $GLOBALS["news_from"]["active_from"],
            "!ID" => $GLOBALS["news_from"]["exclude_id"]
        ];
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "news-other",
            array(
                "ACTIVE_DATE_FORMAT" => "j F Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "otherNews",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "7",
                "IBLOCK_TYPE" => "content",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "N",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("", ""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "USE_FILTER" => "Y"
            )
        );
    }
    ?>
    </div>
<? endif; ?>

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
            <div class="footer__contacts">
                <a class="footer__contacts-item footer__contacts-item_phone" href="tel:88008889900">8 (800)
                    888-99-00</a><a class="footer__contacts-item footer__contacts-item_mail" href="mailto:primerinfo@mail.ru" target="_blank">primerinfo@mail.ru</a><a class="footer__contacts-item footer__contacts-item_map" href="https://yandex.ru/maps/-/CCUNU0SjPD" target="_blank">г.
                    Москва, ул. Большая Семеновская, д. 40, стр. 13</a></div>
            <div class="footer__copyright">
                <div class="footer__copyright-text">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH . '/include/copyright_text.php'
                        )
                    ); ?>
                </div>
                <span>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH . '/include/copyright.php'
                        )
                    ); ?>
                </span>
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