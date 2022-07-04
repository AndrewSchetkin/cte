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
<article class="article">
    <?if(is_array($arResult["DETAIL_PICTURE"])):?>
    <div class="article__img">
        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>">
        <?if($arResult["DETAIL_PICTURE"]["DESCRIPTION"]):?>
        <span><?=$arResult["DETAIL_PICTURE"]["DESCRIPTION"]?></span>
        <?endif;?>
    </div>
    <?endif;?>
    <div class="article__body typography">
        <?=$arResult["DETAIL_TEXT"]; ?>
    </div>
</article>