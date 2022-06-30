<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<? if ($arResult["PICTURE"]): ?>
    <img class="img img_fw" src="<?=CFile::GetPath($arResult["PICTURE"]);?>" alt="<?=Loc::getMessage("IMG_TITLE")?>">
<? endif; ?>

<div class="typography">
    <h3><?=Loc::getMessage("TITLE")?></h3>
    <? if ($arResult["DESCRIPTION"]): ?>
        <div class="columns">
            <?=$arResult["DESCRIPTION"];?>
        </div>
    <? endif; ?>
</div>
<div class="tag tag_red"><?=Loc::getMessage("OUR_GRADUATES")?></div>
<div class="graduates graduates_slider gallery">
    <div class="swiper js-gallery-4-items">
        <div class="swiper-wrapper">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="graduates__item">
                        <div class="graduates__item-name"><?=$arItem["NAME"]?></div>
                        <? if ($arItem["PROPERTIES"]["PROFESSION"]["VALUE"]): ?>
                            <div class="graduates__item-position"><?=$arItem["PROPERTIES"]["PROFESSION"]["VALUE"];?></div>
                        <? endif; ?>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
        <div class="swiper-controls">
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>