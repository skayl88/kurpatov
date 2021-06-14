<?

#Template Name: Модуль - Учет финансов и товаров


get_header();

?>

<div class="b1 module module7">
    <div class="container">
        <div class="box">
            <div class="page-title">Модуль - Учет финансов и товаров</div>
            <p>
                Учет клиентов, товаров и расходных материалов, если Вы предлагаете не только услуги.
Учет и движение ТМЦ, неснижаемый остаток, списание товаров или расходных
материалов в составе услуги.
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
                    <p>Учет клиентов</p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/calculator.svg" alt=""></span></div>
                    <p>Упрощение расчетов </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/shopping-cart.svg" alt=""></span></div>
                    <p>Учет товаров </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/accounting.svg" alt=""></span></div>
                    <p>Учет</p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/graph-bar.svg" alt=""></span></div>
                    <p>Контроль деятельности</p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/information.svg" alt=""></span></div>
                    <p>Сбор и анализ информации</p>
                </div>
            </div>
        </div>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/modul7.png" alt="" /></div>
    </div>
</div>

<div class="module-desc">
    <div class="container">
        <p>Вы зарабатываете не только на услугах? Хотите вести детальный учет расходных материалов на занятиях?<br/>
        Хотите планировать закупки товаров для Вашего центра?</p>

        <div class="ttl">Представляем Вам модуль Учет финансов и товаров</div>
        <p>предназначенный для учета товарно-материальных ценностей<br/>
        Вашего центра!</p>
        
        <div class="httl">Функции модуля:  </div>
        
        <ul class="ul1">
            <li>Количественный и финансовый учет продаж товаров клиентам.</li>
            <li>Количественный и финансовый учет материалов и товаров в составе услуги при ее реализации.</li>
            <li>Страховые (неснижаемые) запасы. Контроль остатков. Отчет по закупкам.</li>
            <li>Инвентаризация  остатков (оприходование, списания).</li>
        </ul>
        
    </div>
</div>


<?php get_template_part('blocks/bottom', 'buy', ['img' => 'price-img7.png', 'name' => get_the_title()]); ?>

<?get_footer();?>