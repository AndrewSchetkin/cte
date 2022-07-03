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

<section class="block-img-text">
    <? if ($arResult["PICTURE"]): ?>
        <div class="block-img-text__img">
            <img data-fancybox src="<?=CFile::GetPath($arResult["PICTURE"]);?>" alt="Сведения об образовательной организации КАМИ ЦТО">
        </div>
    <? endif; ?>
    <? if ($arResult["DESCRIPTION"]): ?>
        <div class="block-img-text__content typography">
            <h4><?=Loc::getMessage("TITLE")?></h4>
            <?=$arResult["DESCRIPTION"];?>
        </div>
    <? endif; ?>
</section>
<div class="tag tag_red"><?=Loc::getMessage("DOCUMENTS")?></div>
<div class="docs-list">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <a class="docs-list__item" href="<?=$arItem['DETAIL_PICTURE']["SRC"]?>" target="_blank" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="docs-list__item-name"><?=$arItem["NAME"]?></div>
            <div class="docs-list__item-img">
                <img src="<?=$arItem['PREVIEW_PICTURE']["SRC"]?>" alt="<?=$arItem["NAME"]?>">
            </div>
        </a>
    <? endforeach; ?>
</div>