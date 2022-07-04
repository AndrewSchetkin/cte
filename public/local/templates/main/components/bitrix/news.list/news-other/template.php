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
    <section class="front-block front-block_gray front-block_gray-after">
        <div class="container">
            <div class="front-block__title"><?=Loc::getMessage("OTHER_NEWS")?></div>
            <div class="front-block__content">
                <div class="news news_slider gallery">
                    <div class="swiper js-gallery-4-items">
                        <div class="swiper-wrapper">
                            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                            <div class="swiper-slide">
                                <a class="news__item" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                    <div class="news__item-title"><?=$arItem["NAME"]?></div>
                                    <div class="news__item-text"><?=$arItem["PREVIEW_TEXT"];?></div>
                                    <div class="news__item-date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
                                </a>
                            </div>
                            <?endforeach;?>
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
<? endif; ?>