<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="footer__menu">
    <? if (!empty($arResult)): ?>
        <ul>
            <? foreach ($arResult as $k => $item): ?>
                <? $its_parent = isset($arResult[$k + 1]) && $arResult[$k + 1]["DEPTH_LEVEL"] > $item["DEPTH_LEVEL"]; ?>
                <li>
                <a href="<?=$item["LINK"];?>"><?=$item["TEXT"];?></a>
                <? if ($its_parent): ?>
                <ul>
            <? endif; ?>
                <? if (!$its_parent): ?>
                    </li>
                <? endif; ?>
                <? if ($item["DEPTH_LEVEL"] > 1 && $arResult[$k + 1]["DEPTH_LEVEL"] < $item["DEPTH_LEVEL"]): ?>
                    </ul>
                    </li>
                <? endif; ?>
            <? endforeach; ?>
        </ul>
        </li>
    <? endif ?>
</div>
