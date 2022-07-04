<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arResult["DISPLAY_ACTIVE_FROM"]) {
    global $APPLICATION;
    $APPLICATION->AddViewContent("news_detail_date", '<div class="page__date">' . $arResult["DISPLAY_ACTIVE_FROM"] . '</div>');
}

// нужно для отображения блока "другие новости" в футере
$GLOBALS["news_from"] = [
    "active_from" => $arResult["ACTIVE_FROM"],
    "exclude_id" => $arResult["ID"]
];
