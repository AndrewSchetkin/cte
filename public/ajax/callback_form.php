<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$status = "error";

if (isset($_POST["PROPERTY"]["NAME"]) && trim($_POST["PROPERTY"]["NAME"]) !== "" && isset($_POST["PROPERTY"]["PHONE"]) && trim($_POST["PROPERTY"]["PHONE"])) {
    CModule::IncludeModule("iblock");

    // create el
    $el = new CIBlockElement();

    $name = htmlspecialcharsbx($_POST["PROPERTY"]["NAME"]);
    $phone = htmlspecialcharsbx($_POST["PROPERTY"]["PHONE"]);
    $course_name = (isset($_POST["PROPERTY"]["COURSE_NAME"]) && trim($_POST["PROPERTY"]["COURSE_NAME"]) !== "") ? htmlspecialcharsbx($_POST["PROPERTY"]["COURSE_NAME"]) : "";
    $message = (isset($_POST["PROPERTY"]["TEXT"]) && trim($_POST["PROPERTY"]["TEXT"]) !== "") ? htmlspecialcharsbx($_POST["PROPERTY"]["TEXT"]) : "";

    $props = [
        "NAME" => $name,
        "PHONE" => $phone,
        "COURSE_NAME" => $course_name,
    ];

    $el_name = $name . " / " . $phone . " / " . date("d-m-Y H:i:s");

    if ($course_name) {
        $el_name .= " / " . $course_name;
    }

    $arLoadProductArray = [
        "IBLOCK_ID" => 9,
        "NAME" => $el_name,
        "PROPERTY_VALUES" => $props,
        "PREVIEW_TEXT" => $message
    ];

    if ($el->Add($arLoadProductArray)) {
        // send msg
        $props["MESSAGE"] = $message;
        if (CEvent::Send("FEEDBACK_FORM", "s1", $props)) {
            $status = "success";
            $result_mes = "Спасибо за Ваше обращение. Скоро мы с Вами свяжемся.";
        } else {
            $result_mes = "Ошибка отправки сообщения";
        }
    } else {
        $result_mes = "Ошибка сохранения заявки";
    }
} else {
    $result_mes = "Ошибка проверки name и phone";
}

echo json_encode(["status" => $status, "message" => $result_mes]);