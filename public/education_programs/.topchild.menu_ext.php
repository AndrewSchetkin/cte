<?php
$aMenuLinks = array(
    //array(
    //    "График обучения",
    //    "#",
    //    array(),
    //    array(),
    //    ""
    //),
);

$obCache = new CPHPCache();
if ($obCache->InitCache(36000, serialize($arFilter), "/iblock/catalog")) {
    //Если кеш существует, то его результат сразу будет выдан и не надо выполнять код с запросами к БД
    $aMenuLinksTmp = $obCache->GetVars();
} else {   //Если кеша нет, то выполнится код и сформируется кеш. В дальнейшем будет отдаваться переменная из кеша, а не выполняться этот код
    $obCache->StartDataCache();
    CModule::IncludeModule("iblock");
    $aMenuLinksTmp = [];
    $obj = CIBlockElement::GetList(
        ["SORT" => "ASC"],
        ["IBLOCK_ID" => 8, "ACTIVE" => "Y", "ACTIVE_DATE" => "Y"],
        false,
        false,
        ["NAME", "DETAIL_PAGE_URL"]
    );
    while ($res = $obj->GetNext()) {
        $aMenuLinksTmp[] = [
            $res["NAME"],
            $res["DETAIL_PAGE_URL"]
        ];
    }
    $obCache->EndDataCache($aMenuLinksTmp);
}

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksTmp);