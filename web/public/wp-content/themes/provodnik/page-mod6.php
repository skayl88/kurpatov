<?

#Template Name: Модуль - Рассылки


get_header();

?>

<div class="b1 module module6">
    <div class="container">
        <div class="box">
            <div class="page-title">Модуль - Рассылки</div>
            <p>
                Умные смс и е-мейл рассылки освободят Вас от рутинной работы по сбору
информации. Проинформируют Ваших клиентов о переносе или отмене занятия.
Поздравят с днем рождения и пригласят отпраздновать его в Вашем центре.
Сообщат о необходимости оплаты абонемента и проинформируют о новых занятиях.
            </p>
            <div class="btn-box">
                <a class="btn3 btn-buy" href="">Купить</a>
                <a class="btn4 v2 btn-demo" href=""><span>Демо - доступ</span></a>
            </div>
        </div>
        <div class="items6-list">
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/email-marketing.svg" alt=""></span></div>
                    <p>Автоматическое
информирование
Ваших клиентов о
событиях по SMS
и E-mail
</p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/calculator.svg" alt=""></span></div>
                    <p>Упрощение расчетов
с клиентами благодаря
предварительному
уведомлению об
оплате
</p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/email.svg" alt=""></span></div>
                    <p>Автоматическое
приглашение на
пробное занятие.
Запрос после
пробного.

 </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/graph-bar.svg" alt=""></span></div>
                    <p>Увеличение выручки
за счет напоминаний
об оплате и
привлечению новых
клиентов

 </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/binoculars.svg" alt=""></span></div>
                    <p>Повышение
лояльности -
Ваши клиенты
видят, что о них
помнят

 </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/operator.svg" alt=""></span></div>
                    <p>Напоминайте
клиентам об их
праздниках и
увеличивайте
продажи

 </p>
                </div>
            </div>
        </div>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/modul6.png" alt="" /></div>
    </div>
</div>

<div class="module-txt3">
    <div class="container">
        <div class="d-flex">
            <div class="c1">
                <div class="box">
                    <div class="ttl">Автоматические индивидуальные рассылки</div>
                    <ul>
                        <li>Поздравление с днем рождения</li>
                        <li>Приглашение отметить день рождения в детском центре за N дней до дня  рождения</li>
                        <li>Напоминание про пробное занятие за  N дней до пробного занятия</li>
                        <li>Напоминание о необходимости внести  оплату за N дней до окончания  абонемента</li>
                        <li>Напоминание о записи на разовое  занятие, мастер-класс за N дней    </li>                   
                    </ul>
                </div>
            </div>
            <div class="c2">
                <div class="d-flex">
                        <div class="c3">
                            <div class="box">
                            <div class="ttl">Автоматические групповые рассылки</div>
                            <ul>
                                <li>Оповещения об отмене занятия, о  переносе занятия</li>
                            </ul>
                        </div>
                    </div>
                    <div class="c3">
                        <div class="box">
                            <div class="ttl">Каналы оповещени</div>
                            <ul>
                                <li>SMS-канал</li>
                                <li>Email-канал</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="c4">
                    <div class="box">
                        <div class="ttl">Ручные групповые рассылки</div>
                        <ul>
                            <li>Приглашения на мастер-классы, мероприятия</li>
                            <li>Набор в новые группы</li>
                            <li>Новости об акциях, скидках и т. п.</li>                         
                        </ul>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img1.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_template_part('blocks/bottom', 'buy', ['img' => 'price-img5.png', 'name' => get_the_title()]); ?>

<?get_footer();?>