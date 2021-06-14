<?

#Template Name: Модуль - Маркетинг


get_header();

?>

<div class="b1 module module4">
    <div class="container">
        <div class="box">
            <div class="page-title">Модуль - Маркетинг</div>
            <p>
                Учет входящих обращений (первичных заявок) потенциальных клиентов.
Построение воронки продаж на основании четырех этапов  - обращения,
записи на пробное занятие, посещения пробного занятия, покупки
абонемента. 
            </p>
            <div class="btn-box">
                <a class="btn3 btn-buy" href="">Купить</a>
                <a class="btn4 v2 btn-demo" href=""><span>Демо - доступ</span></a>
            </div>
        </div>
        <div class="items6-list">
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/customer.svg" alt=""></span></div>
                    <p>Учет обращений потенциальных клиентов </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/information.svg" alt=""></span></div>
                    <p>Анализ данных по  привлечению новых клиентов  </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/validating-ticket.svg" alt=""></span></div>
                    <p>Учет состояния от обращения до покупки абонемента  </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/graph-bar.svg" alt=""></span></div>
                    <p>Увеличение продаж
на этапе
привлечения клиентов
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
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/information2.svg" alt=""></span></div>
                    <p>Сбор и анализ
маркетинговой
информации,
построение воронки
продаж

 </p>
                </div>
            </div>
        </div>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/modul4.png" alt="" /></div>
    </div>
</div>

<div class="module-desc">
    <div class="container">
        
        <div class="httl">Возможности «Маркетинг» </div>
        
        <ul class="ul1">
            <li>Учет входящих обращений (первичных заявок)</li>
            <li>Отслеживания работы администратора с обращением – от первого звонка до становления клиентом</li>
            <li>Контроль выполнения задач администратором по входящим обращениям, учет времени последней активности администратора по работе с обращением</li>
            <li>Построение воронки продаж по 4 этапам: входящее обращение, запись на пробное занятие, посещение пробного занятия, приобретение абонемента</li>
            <li>Анализ воронки продаж в разрезе ответственного менеджера, рекламной компании, источника информации, месторасположения, организации, периода</li>
            <li>Расчет коэффициентов конверсии по этапам воронки продаж в целом, а также в разрезе ответственного менеджера, рекламной компании, источника   информации, месторасположения, организации, периода</li>
            <li>Отчет по причинам отказов клиентов в целом, а также в разрезе ответственного менеджера, рекламной компании, источника информации, месторасположения, организации, периода.</li>
        </ul>
        
    </div>
</div>

<div class="profit-box">
    <div class="container">
        <div class="httl">Ваша выгода:  </div>
        <div class="d-flex">
            <div class="c1">
                <div class="box">
                    Анализ воронки продаж
позволяет найти узкие места.
Оптимизируйте Ваш процесс
продаж!
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    Анализ отчета по отказам
позволяет выявить слабые стороны,
а также узнать лучше позиции
конкурентов.
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    Коэффициенты конверсии
позволяют провести сравнительный
анализ менеджеров по продажам,
источников информации (каналов
сбыта), рекламных компаний,
организаций.
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    С модулем учета входящих
обращений Вы не упустите ни одну
новую заявку, а также сможете
отслеживать оперативность
обработки заявок Вашими
администраторами.
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('blocks/bottom', 'buy', ['img' => 'price-img3.png', 'name' => get_the_title()]); ?>

<?get_footer();?>