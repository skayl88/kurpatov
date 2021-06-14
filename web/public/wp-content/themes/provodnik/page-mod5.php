<?

#Template Name: Модуль - Телефонный помощник


get_header();

?>

<div class="b1 module module5">
    <div class="container">
        <div class="box">
            <div class="page-title">Модуль - Телефонный помощник</div>
            <p>
                Модуль Телефонный помощник - интеграция с IP телефонией и виртуальной
АТС. Обработка звонков, виджет звонка на сайт, запись разговоров, поднятие
карточки клиента по звонку, скрипты разговора.
            </p>
            <div class="btn-box">
                <a class="btn3 btn-buy" href="">Купить</a>
                <a class="btn4 v2 btn-demo" href=""><span>Демо - доступ</span></a>
            </div>
        </div>
        <div class="items6-list">
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt=""></span></div>
                    <p>Учет входящих
и исходящих звонков </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/graph-bar.svg" alt=""></span></div>
                    <p>Увеличение продаж -
ни одного
пропущенного
звонка! </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/video-conference.svg" alt=""></span></div>
                    <p>Поднятие карточки
клиента по входящему
звонку
 </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/transaction.svg" alt=""></span></div>
                    <p>Учет движения
денежных средств,
ведение кассового
журнала

 </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/operator.svg" alt=""></span></div>
                    <p>Контроль деятельности
администраторов
детского центра

 </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/campaign.svg" alt=""></span></div>
                    <p>Сбор и анализ
маркетинговой
информации,
построение воронки
продаж

 </p>
                </div>
            </div>
        </div>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/modul5.png" alt="" /></div>
    </div>
</div>

<div class="module-desc">
    <div class="container">
        
        <div class="httl">Возможности «Телефонного помощника»</div>
        
        <ul class="ul1">
            <li>Определение номера существующего клиента и открытие его карточки при входящем звонке</li>
            <li>Открытие карточки для регистрации нового клиента или нового обращения, если номер не определился</li>
            <li>Автоматическое заполнение номера телефона и другой информации при входящем звонке</li>
            <li>Скрипты-подсказки для администратора на разные типы входящих звонков</li>
            <li>Запись телефонных разговоров</li>
            <li>Прием и совершение звонков с компьютера, ноутбука, смартфона</li>
            <li>А также функции облачной АТС</li>
            <li>Запись приветствия</li>
            <li>Автоответчик для рабочих/нерабочих часов</li>
            <li>Переадресация звонков</li>
            <li>Голосовая почта</li>
            <li>Выбор музыки в режиме ожидания</li>
            <li>Подключение виджета «Звонок с сайта»</li>
            <li>Статистика по звонкам</li>
        </ul>
        
    </div>
</div>

<div class="how-box">
    <div class="container">
        <div class="httl">Как подключить  </div>
        <div class="d-flex">
            <div class="c1">
                <div class="box">
                    <div class="num">1</div>
                    <p>
                        Приобрести модуль
«Телефонный помощник»
                    </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="num">2</div>
                    <p>
                        Зайти на сайт провайдера
IP-телефонии и <a target="_blank" href="">зарегистрироваться</a> 
                    </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="num">3</div>
                    <p>
                        Произвести необходимые
настройки по инструкции
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_template_part('blocks/bottom', 'buy', ['img' => 'price-img4.png', 'name' => get_the_title()]); ?>

<?get_footer();?>