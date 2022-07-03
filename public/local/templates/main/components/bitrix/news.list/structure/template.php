<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<?foreach ($arResult["ITEMS"] as $section):?>
	<?if ($section["SECTION"]["NAME"]):?>
		<div class="tag tag_red mb_30"><?=$section["SECTION"]["NAME"];?></div>
	<?endif;?>
	<?if ($section["SECTION"]["DESCRIPTION"]):?>
		<div class="typography"><p><?=$section["SECTION"]["DESCRIPTION"];?></p></div>
	<?endif;?>
	
	<div class="teachers teachers_list">
		<?foreach ($section["ITEMS"] as $item):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="teachers__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="teachers__item-name"><?=$item["NAME"]?></div>
				<div class="teachers__item-position"><?=$item["PROPERTIES"]["POSITION"]["VALUE"]?></div>
				<div class="teachers__item-img"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$item["NAME"]?>"></div>
			</div>
		<?endforeach;?>
	</div>
<?endforeach;?>