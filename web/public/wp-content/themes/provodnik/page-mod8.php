<?

#Template Name: Модуль - Кассы


get_header();

?>

<div class="b1 module module7">
    <div class="container">
        <div class="box">
            <div class="page-title">Модуль - Кассы</div>
            <p>
                Интеграция с онлайн-кассами АТОЛ и аналогами.
Экономит время, сокращает рутинные операции.

            </p>
            <div class="btn-box">
                <a class="btn3 btn-buy" href="">Купить</a>
                <a class="btn4 v2 btn-demo" href=""><span>Демо - доступ</span></a>
            </div>
            <div class="txt3">
                <p>Модуль Кассы - это модуль Интеграции с кассами Атол и их аналогами (работающих
                на драйверах Атол). Создавайте абонементы и разовые занятия в программе Беркана
                и отправляйте данные в кассу Атол при помощи модуля Кассы.</p>

                <p>Обратите внимание, что Кассы Атол предполагают сопровождение сторонними
                специалистами. Только ОС Windows.</p>

                <p>Также программа Беркана интегрирована с кассами Эвотор при помощи Модуля Штрих.</p>      
            </div>
        </div>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/modul8.png" alt="" /></div>
    </div>
</div>



<?php get_template_part('blocks/bottom', 'buy', ['img' => 'price-img8.png', 'name' => get_the_title()]); ?>

<?get_footer();?>