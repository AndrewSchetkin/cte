<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<div class="contacts">
    <div class="contacts__content">
        <div class="tag tag_red mb_30">Офис ЦТО</div>
        <p class="contacts__address">г. Москва, ул. Большая Семеновская, д. 40, стр. 13</p>
        <ul class="contacts__list">
        <li><span>Контактный телефон:</span> <br><a href="tel:88008889900">8 (800) 888-99-00</a></li>
        <li><span>Пн. – Пт.: <b>с 9:00 до 18:00</b></span> <br> <i>Суббота и воскресенье - выходные</i></li>
        <li><span>Почта:</span> <br><a href="mailto:primerinfo@mail.ru">primerinfo@mail.ru</a></li>
        </ul>
        <p class="contacts__description">Приходите к нам в центр, и мы вместе обсудим Ваши задачи по обучению, либо разработаем индивидуальную программу. Если Вы хотите познакомиться с процессом обучения и спектром программ, менеджер расскажет обо всех подробностях в рамках презентации.</p>
    </div>
    <div class="contacts__map"><iframe src="https://yandex.ru/map-widget/v1/-/CCUNeIVJkC" width="100%" frameborder="0" allowfullscreen="true"></iframe></div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>