<?php 
    $addCSS="css/support.css";
    $addParcellingActive="Служба поддержки";
    require "tpl/header.php" 
;?>

<div class="parcelling">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li class="active"><a href="#"><?php echo $addParcellingActive ?></a></li>
            </ul>
        </div>
<div class="frame">
    <div class="margin" id="content_touch">
        <?php require "tpl/menu.php" ?>
        
        <div class="content" id="content">
            <h2>Служба поддержки</h2>
            <p>Специалисты LaserMall всегда готовы помочь с выбором наиболее подходящего устройства, дополнительного оборудования и расходных материалов.</p>
            <p>Получить профессиональную консультацию можно по телефону: позвоните нам или оставьте заявку на обратный звонок через форму на сайте. Информация  продукции также есть в нашей группе Вконтакте - здесь же можно посмотреть отзывы мастеров и задать любые вопросы.</p>
            <p>Всем нашим клиентам мы предлагаем бесплатное видео-, аудио-, и онлайн-обучение по работе с лазерной техникой, вместе с товаром поставляем протоколы процедур. Гарантируем консультационную поддержку на протяженни всего срока эксплуатации. Обслуживание лазеров осуществляется в собственном сервисном центре.</p>
            <ul>
                <li class="info_down">
                                <input type="checkbox" class="akkord" id="checkbox-1" name="checkbox-1" />
                                <label for="checkbox-1" class="checkbox">
                                    Как происходит доставка товара?<i></i>
                                </label>
                                <ul class="content">
                                    <li>
                                        <p>Всем нашим клиентам мы предлагаем бесплатное видео-, аудио-, и онлайн-обучение по работе с лазерной техникой, вместе с товаром поставляем протоколы процедур. Гарантируем консультационную поддержку на протяженни всего срока эксплуатации. Обслуживание лазеров осуществляется в собственном сервисном центре.</p>
                                    </li>
                                </ul>
                            </li>
                <li class="info_down">
                                    <input type="checkbox" class="akkord" id="checkbox-2" name="checkbox-2" />
                                    <label for="checkbox-2" class="checkbox">
                                        Как можно оплатить товар?<i></i>
                                    </label>
                                    <ul class="content">
                                        <li>
                                            <p>Всем нашим клиентам мы предлагаем бесплатное видео-, аудио-, и онлайн-обучение по работе с лазерной техникой, вместе с товаром поставляем протоколы процедур. Гарантируем консультационную поддержку на протяженни всего срока эксплуатации. Обслуживание лазеров осуществляется в собственном сервисном центре.</p>
                                        </li>
                                    </ul>
                                </li>
                <li class="info_down">
                                <input type="checkbox" class="akkord" id="checkbox-3" name="checkbox-3" />
                                <label for="checkbox-3" class="checkbox">
                                    Какая гарантия товара?<i></i>
                                </label>
                                <ul class="content">
                                    <li>
                                        <p>Всем нашим клиентам мы предлагаем бесплатное видео-, аудио-, и онлайн-обучение по работе с лазерной техникой, вместе с товаром поставляем протоколы процедур. Гарантируем консультационную поддержку на протяженни всего срока эксплуатации. Обслуживание лазеров осуществляется в собственном сервисном центре.</p>
                                    </li>
                                </ul>
                            </li>
            </ul>
            <p class="p_margin">Специалисты LaserMall всегда готовы помочь вам в решении различных вопросов. Напишите нам и менеджер свяжется с вами в ближайшее время.</p>
            <form>
                <input placeholder="Введите ваше имя" name="name">
                <input placeholder="Введите ваш телефон" name="phone">
                <input placeholder="Введите ваше вопрос" name="question">
                <button id="sent_question">Отправить</button>
            </form>
        </div>
    </div>
</div>
<?php require "tpl/footer.php" ?>
