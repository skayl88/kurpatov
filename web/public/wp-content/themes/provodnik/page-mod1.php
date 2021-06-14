<?

#Template Name: Модуль учет клиентов


get_header();

?>

<div class="b1 module module1">
    <div class="container">
        <div class="box">
            <div class="page-title">Модуль - Учет клиентов</div>
            <p>
              Мы не понаслышке знаем, что работа с клиентом это один из основополагающих моментов в сфере детского образования. Именно поэтому мы разработали удобный модуль по ведению клиентской базы, который позволяет с легкостью искать нужного Вам ребенка или семью, вести финансовый учет по конкретному ребенку, создавать разовые занятия и абонементы и многое другое!
            </p>
            <div class="btn-box">
                <a class="btn3 btn-buy" href="">Купить</a>
                <a class="btn4 btn-demo" href=""><span>Демо - доступ</span></a>
            </div>
        </div>
        <div class="items5-list v2">
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/customer.svg" alt=""></span></div>
                    <p>Учет занятий</p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/calculator.svg" alt=""></span></div>
                    <p>Удобный поиск </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/shopping-cart.svg" alt=""></span></div>
                    <p>Учет клиентов </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/accounting.svg" alt=""></span></div>
                    <p>Планирование</p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/graph-bar.svg" alt=""></span></div>
                    <p>Статистика по посещениям</p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/information.svg" alt=""></span></div>
                    <p>Сбор и анализ информации </p>
                </div>
            </div>
        </div>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/modul1.png" alt="" /></div>
    </div>
</div>  

<div class="module-desc">
    <div class="container">
        <p>Модуль «Учет Клиентов» - Удобный помощник по ведению клиентской базы! Забудьте про записи в тетрадках и долгий поиск клиентов!</p>

        <div class="ttl">С данным модулем Вы сможете:</div>
       
        
   
        
        <ul class="ul1">
            <li>Создавать карточки клиентов с детальной информацией по ним</li>
            <li>Группировать клиентов по семьям, что особенно удобно, когда от одной семьи Ваши курсы посещают несколько детей</li>
            <li>Быстро искать клиентов по имени, фамилии, номеру телефона и почте.</li>
            <li>Отслеживать статистику клиентов по возрастам, интересующим курсам, посещенным курсам и т.д. </li>
			 <li>Всего в два клика записывать клиента на занятия, а также создавать разовые занятия и абонементы </li>
			 <li>Отслеживать просрочки по платежам и отправлять уведомления.</li>
        </ul>
        
    </div>
</div>

<?php get_template_part('blocks/bottom', 'buy', ['img' => 'price-img.png', 'name' => get_the_title()]); ?>

<?get_footer();?>