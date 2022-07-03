<?php
$sections = [];
foreach ($arResult["ITEMS"] as $item) {
    $section_id = $item["IBLOCK_SECTION_ID"];
    $sections[$section_id]["ITEMS"][] = $item;
}

$sections_ids = array_keys($sections);
unset($sections_ids[array_search("", $sections_ids)]);

$sect_obj = CIBlockSection::GetList(
    [],
    ["IBLOCK_ID" => $arParams["IBLOCK_ID"], "ID" => $sections_ids],
    false,
    ["ID", "NAME", "DESCRIPTION", "SORT"]
);
while ($sect_res = $sect_obj->Fetch()) {
    $sections[$sect_res["ID"]]["SECTION"] = $sect_res;
}

usort($sections, function ($a, $b) {
    if (!isset($a["SECTION"])) {
        return 1;
    }
    if (!isset($b["SECTION"])) {
        return -1;
    }
    if ($a["SECTION"]["SORT"] < $b["SECTION"]["SORT"]) {
        return -1;
    }
    if ($a["SECTION"]["SORT"] > $b["SECTION"]["SORT"]) {
        return 1;
    }
    return 0;
});

$arResult["ITEMS"] = $sections;