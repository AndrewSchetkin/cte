<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
</main>
<footer class="footer" id="footer">
    <div class="container">
        <div class="footer__form question-block">
            <div class="question-block__title">Остались вопросы?</div>
            <div class="question-block__subtitle">Оставьте заявку и получите консультацию на возникшие вопросы у нашего
                специалиста
            </div>
            <form class="question-block__form form form_question">
                <div class="form__item">
                    <input type="text" name="NAME" placeholder="Ваше имя" required="required"/>
                </div>
                <div class="form__item">
                    <input type="tel" name="PHONE" placeholder="Ваш телефон" required="required"/>
                </div>
                <div class="form__actions">
                    <input class="btn btn_main btn_round" type="submit" value="Отправить заявку"/>
                </div>
            </form>
        </div>
    </div>
    <div class="footer__body">
        <div class="container">
            <a class="footer__logo" href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="Логотип" width="158"/></a>
            <div class="footer__menu">
                <ul>
                    <li><a href="#">Обучающий центр</a>
                        <ul>
                            <li><a href="#">Основные сведения</a></li>
                            <li><a href="#">Структура оргранизации</a></li>
                            <li><a href="#">Правила приема</a></li>
                            <li><a href="#">Документы для выпускников</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Программы обучения</a>
                        <ul>
                            <li><a href="#">График обучения</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Трудоустройство</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
            <div class="footer__contacts">
                <a class="footer__contacts-item footer__contacts-item_phone" href="tel:88008889900">8 (800)
                    888-99-00</a><a class="footer__contacts-item footer__contacts-item_mail" href="mailto:primerinfo@mail.ru" target="_blank">primerinfo@mail.ru</a><a class="footer__contacts-item footer__contacts-item_map" href="https://yandex.ru/maps/-/CCUNU0SjPD" target="_blank">г.
                    Москва, ул. Большая Семеновская, д. 40, стр. 13</a></div>
            <div class="footer__copyright">
                <p>Вы принимаете условия <a href="#" target="_blank" rel="nofollow">политики конфиденциальности</a> и
                    <a href="#" target="_blank" rel="nofollow">пользовательского соглашения</a> каждый раз, когда
                    оставляете свои данные в любой форме обратной связи на сайте stanki.ru.</p><span>© Copyright 2022. Все права защищены.</span>
            </div>
        </div>
    </div>
</footer>
<script src="<?=SITE_TEMPLATE_PATH?>/js/vendor/swiper-bundle.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/vendor/fancybox.umd.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/mainBundle.js?1656531096047" defer="defer"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/vendor/demo.js?1656531096047" defer="defer"></script>
</body>
</html>