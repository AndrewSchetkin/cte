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
<? if (count($arResult["ITEMS"])): ?>
    <div class="swiper">
        <div class="swiper-wrapper">
            <? foreach ($arResult["ITEMS"] as $k => $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="swiper-slide">
                    <div class="front-slider__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/content/front-slider_1.jpg')">
                        <div class="front-slider__content">
                            <div class="front-slider__title"><?=$arItem["NAME"]?></div>
                            <? if ($arItem["PREVIEW_TEXT"]): ?>
                                <p class="front-slider__description"><?=$arItem["PREVIEW_TEXT"];?></p>
                            <? endif; ?>
                            <div class="front-slider__buttons">
                                <a class="btn btn_main" href="/education_programs/"><?=Loc::getMessage("MAIN_SLIDER_BTN_PROGRAMS")?></a>
                                <button class="btn btn_light" type="button" data-fancybox="" data-src="#requestModal">
                                    <?=Loc::getMessage("MAIN_SLIDER_BTN_ORDER")?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
<? endif; ?>