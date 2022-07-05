<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
?>

<div class="programs">
    <div class="programs__list">
        <? foreach ($arResult["ITEMS"] as $item): ?>
            <a class="programs__list-item" href="#<?=$item["CODE"]?>"><?=$item["NAME"]?></a>
        <? endforeach; ?>
    </div>
    <div class="programs__content">
        <? foreach ($arResult["ITEMS"] as $item): ?>
            <div class="programs__content-item programs-item" id="<?=$item["CODE"]?>">
                <div class="programs-item__content">
                    <div class="programs-item__tags">
                        <div class="tag tag_red"><?=$item["PROPERTIES"]["TYPE"]["VALUE"]?> <?=Loc::getMessage("EDUCATION_FORM")?></div>
                        <? if ($item["PROPERTIES"]["DURATION"]["VALUE"]): ?>
                            <div class="tag tag_grey"><?=$item["PROPERTIES"]["DURATION"]["VALUE"]?></div>
                        <? endif; ?>
                    </div>
                    <h4 class="programs-item__name"><?=$item["NAME"]?></h4>
                    <? if ($item["PREVIEW_TEXT"]): ?>
                        <div class="programs-item__text"><?=$item["PREVIEW_TEXT"]?></div>
                    <? endif; ?>
                    <? if ($item["PROPERTIES"]["COST"]["VALUE"]): ?>
                        <div class="programs-item__price"><?=$item["PROPERTIES"]["COST"]["VALUE"]?></div>
                    <? endif; ?>
                    <? if ($item["PROPERTIES"]["FOR_BEGINNERS"]["VALUE"] === "Y"): ?>
                        <ul class="programs-item__excellence">
                            <li><img src="<?=SITE_TEMPLATE_PATH?>/img/content/icon_1.png" alt="<?=Loc::getMessage("FOR_BEGINNERS_TITLE")?>"><span><?=Loc::getMessage("FOR_BEGINNERS_TITLE")?></span></li>
                        </ul>
                    <? endif; ?>
                </div>
                <div class="programs-item__calendar">
                    <div class="programs-item__calendar-title"><?=Loc::getMessage("DATES_TITLE")?></div>
                    <div class="programs-item__calendar-body">
                        <!-- если даты не проставлены, то давай просто не добавлять data-dates атрибут-->
                        <div class="programs-item__calendar-element" data-dates="07-05-2022,07-16-2022;07-27-2022,08-07-2022;08-13-2022,08-17-2022"></div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
