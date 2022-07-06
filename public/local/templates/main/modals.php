<section class="modal" id="callbackModal" style="display: none;">
    <div class="modal__body">
        <div class="modal__header">
            <div class="modal__title">Обратный звонок</div>
        </div>
        <div class="modal__content">
            <form class="form form_modal js-form" action="/ajax/callback_form.php" method="post">
                <div class="form__item">
                    <input class="form__input" type="text" name="PROPERTY[NAME]" placeholder="Ваше имя *" autocomplete="off" required="required"/>
                </div>
                <div class="form__item">
                    <input class="form__input" type="tel" name="PROPERTY[PHONE]" placeholder="Телефон *" required="required"/>
                </div>
                <div class="form__actions">
                    <button class="btn btn_main" value="Заказать" type="submit">Отправить</button>
                    <div class="form__item form__item_checkbox">
                        <input id="inputSuggestion1" type="checkbox" checked="checked" required="required"/>
                        <label for="inputSuggestion1">Согласен на обработку
                            <a href="https://www.stanki.ru/politika/" target="_blank">персональных данных</a></label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="modal" id="requestModal" style="display: none;">
    <div class="modal__body">
        <div class="modal__header">
            <div class="modal__title">Оставить заявку</div>
        </div>
        <div class="modal__content">
            <form class="form form_modal js-form" action="/ajax/callback_form.php" method="post">
                <div class="form__item">
                    <input class="form__input" type="text" name="PROPERTY[NAME]" placeholder="Ваше имя *" autocomplete="off" required="required"/>
                </div>
                <div class="form__item">
                    <input class="form__input" type="tel" name="PROPERTY[PHONE]" placeholder="Телефон *" required="required"/>
                </div>
                <div class="form__item">
                    <textarea class="form__input" name="PROPERTY[TEXT]" placeholder="Сообщение"></textarea>
                </div>
                <div class="form__actions">
                    <button class="btn btn_main" value="Заказать" type="submit">Отправить</button>
                    <div class="form__item form__item_checkbox">
                        <input id="inputSuggestion1" type="checkbox" checked="checked" required="required"/>
                        <label for="inputSuggestion1">Согласен на обработку
                            <a href="https://www.stanki.ru/politika/" target="_blank">персональных данных</a></label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="modal" id="offerModal" style="display: none;">
    <div class="modal__body">
        <div class="modal__header">
            <div class="modal__title">Записаться</div>
        </div>
        <div class="modal__content">
            <form class="form form_modal js-form" action="/ajax/callback_form.php" method="post">
                <input type="hidden" name="PROPERTY[COURSE_NAME]"/>
                <div class="form__item">
                    <input class="form__input" type="text" name="PROPERTY[NAME]" placeholder="Ваше имя *" autocomplete="off" required="required"/>
                </div>
                <div class="form__item">
                    <input class="form__input" type="tel" name="PROPERTY[PHONE]" placeholder="Телефон *" required="required"/>
                </div>
                <div class="form__item">
                    <textarea class="form__input" name="PROPERTY[TEXT]" placeholder="Сообщение"></textarea>
                </div>
                <div class="form__actions">
                    <button class="btn btn_main" value="Заказать" type="submit">Отправить</button>
                    <div class="form__item form__item_checkbox">
                        <input id="inputSuggestion1" type="checkbox" checked="checked" required="required"/>
                        <label for="inputSuggestion1">Согласен на обработку
                            <a href="https://www.stanki.ru/politika/" target="_blank">персональных данных</a></label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>