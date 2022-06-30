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
?>
<div class="front-block__title"><?=GetMessage("TITLE")?></div>
<div class="front-block__content">
    <div class="faq">
        <? for ($i = 0; $i < 2; $i++): ?>
            <div class="faq__column">
                <? foreach ($arResult["ITEMS"] as $k => $arItem): ?>
                    <? if ($i === 0 && $k % 2 !== 0) continue; ?>
                    <? if ($i === 1 && $k % 2 === 0) continue; ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="faq__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="faq__item-head"><span><?=$arItem["NAME"]?></span>
                            <button type="button"></button>
                        </div>
                        <div class="faq__item-body"><?=$arItem["PREVIEW_TEXT"];?></div>
                    </div>
                <? endforeach; ?>
            </div>
        <? endfor; ?>
    </div>
</div>