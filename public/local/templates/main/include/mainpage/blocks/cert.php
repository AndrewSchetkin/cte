<section class="cert-block">
    <div class="container">
        <a class="cert-block__img" href="<?=SITE_TEMPLATE_PATH?>/img/content/cert.jpg" data-fancybox="cert"><img src="<?=SITE_TEMPLATE_PATH?>/img/content/cert.jpg" alt="Сертификат"></a>
        <div class="cert-block__content">
            <h2 class="cert-block__title">
                <span>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH . '/include/mainpage/cert_title.php'
                        )
                    ); ?>
                </span>
            </h2>
            <div class="cert-block__text">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH . '/include/mainpage/cert_text.php'
                    )
                ); ?>
            </div>
        </div>
    </div>
</section>