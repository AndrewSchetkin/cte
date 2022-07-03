<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <nav class="header__menu">
        <ul>
            <? foreach ($arResult as $k => $item): ?>
                <? $its_parent = isset($arResult[$k + 1]) && $arResult[$k + 1]["DEPTH_LEVEL"] > $item["DEPTH_LEVEL"]; ?>
                <li <? if ($its_parent) echo 'class="w-children"' ?>>
                    <a href="<?=$item["LINK"];?>"><?=$item["TEXT"];?></a>
                    <? if ($its_parent): ?>
                    <button type="button">Открыть подменю</button>
                    <ul>
                    <? endif; ?>
                <? if (!$its_parent): ?>
                    </li>
                <? endif; ?>
                <?if($item["DEPTH_LEVEL"] > 1 && $arResult[$k + 1]["DEPTH_LEVEL"] < $item["DEPTH_LEVEL"]):?>
                </ul>
                </li>
                <?endif;?>
            <? endforeach; ?>
                </ul>
            </li>
    </nav>
<? endif ?>