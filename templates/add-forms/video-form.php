<h2 class="visually-hidden">Форма добавления видео</h2>
<form class="adding-post__form form" action="../../add.php" method="post" enctype="multipart/form-data">
    <input type="hidden" id="type" name="type" value="video">
    <div class="form__text-inputs-wrapper">
        <div class="form__text-inputs">
            <div class="adding-post__input-wrapper form__input-wrapper">
                <label class="adding-post__label form__label" for="video-url">Ссылка youtube <span
                        class="form__input-required">*</span></label>
                <div class="form__input-section">
                    <input class="adding-post__input form__input" id="video-url" type="text" name="video-heading"
                           placeholder="Введите ссылку">
                    <button class="form__error-button button" type="button">!<span class="visually-hidden">Информация об ошибке</span>
                    </button>
                    <div class="form__error-text">
                        <h3 class="form__error-title">Заголовок сообщения</h3>
                        <p class="form__error-desc">Текст сообщения об ошибке, подробно объясняющий, что не так.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
