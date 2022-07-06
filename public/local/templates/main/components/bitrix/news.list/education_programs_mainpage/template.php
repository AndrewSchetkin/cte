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

<h2 class="front-block__title"><?=Loc::getMessage("MP_EDUCATION_PROGRAMS_TITLE")?></h2>
<div class="front-block__content">
    <div class="cards-list">
        <ul>
            <? foreach ($arResult["ITEMS"] as $item): ?>
                <li class="cards-list__item">
                    <?
                    $img = $item["PREVIEW_PICTURE"]["SRC"] ?: SITE_TEMPLATE_PATH . "/img/content/card-item-1.jpg";
                    ?>
                    <a class="cards-list__item-img-wrapper" href="<?=$item["DETAIL_PAGE_URL"]?>"><img src="<?=$img?>" alt="<?=$item["NAME"]?>"></a>
                    <div class="cards-list__item-content">
                        <div class="cards-list__item-labels">
                            <span class="cards-list__item-label cards-list__item-label_red"><?=$item["PROPERTIES"]["TYPE"]["VALUE"]?> <?=Loc::getMessage("EDUCATION_FORM")?></span>
                            <? if ($item["PROPERTIES"]["DURATION"]["VALUE"]): ?>
                                <div>
                                    <div class="cards-list__item-label"><?=$item["PROPERTIES"]["DURATION"]["VALUE"]?></div>
                                </div>
                            <? endif; ?>
                        </div>
                        <a class="cards-list__item-name" href="<?=$item["DETAIL_PAGE_URL"]?>"><?=$item["NAME"]?></a>
                    </div>
                </li>
            <? endforeach; ?>
        </ul>
    </div>
</div>