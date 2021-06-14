<?

#Template Name: Модуль - Расписание учеников


get_header();

?>

<div class="b1 module module2">
    <div class="container">
        <div class="box">
            <div class="page-title">Модуль - Расписание учеников</div>
            <p>
                В OllaBerkana есть все для удобной работы с расписанием. С помощью модуля «расписание учеников» Вы сможете грамотно планировать наполняемость групп и в динамике отслеживать статистику по посещениям в разрезе групп, разовых занятий, абонементов, мультиабонементов и многое другое!снижаемый остаток, списание товаров или расходных материалов в составе услуги.
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
                    <p>Обычное расписание</p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/calculator.svg" alt=""></span></div>
                    <p>Составное расписание</p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/shopping-cart.svg" alt=""></span></div>
                    <p>Абонемент</p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/accounting.svg" alt=""></span></div>
                    <p>Мультиабонемент </p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/graph-bar.svg" alt=""></span></div>
                    <p>Пробные занятия
</p>
                </div>
            </div>
            <div class="c1">
                <div class="box">
                    <div class="ico"><span><img src="<?php echo get_template_directory_uri(); ?>/img/information.svg" alt=""></span></div>
                    <p>Событийные занятия</p>
                </div>
            </div>
        </div>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/modul2.png" alt="" /></div>
    </div>
</div>

<div class="module-desc">
    <div class="container">
        <p>
При разработке модуля «расписание учеников» мы опирались на мнения и пожелания коллег, которые давно занимаются бизнесом в сфере образования. Мы постарались учесть всевозможные вариации расписания, что бы Вы смогли более детально и эффективно работать со своей базой клиентов, а также с легкостью делегировать данный вопрос своим администраторам, так как весь функционал очень прост в освоении и работе.</p>

        <div class="ttl">С модулем «расписание учеников» Вы сможете:
</div>
 
        
        <ul class="ul1">
            <li>Создавать обычные и составные расписания</li>
            <li>Создавать разовые, пробные, повторяющиеся занятия и отработки</li>
            <li>Составлять абонементы, Пакеты абонементов и мультиабонементы</li>
            <li>Анализировать наполняемость групп и кабинетов</li>
			  <li>Автоматически продлевать занятия
</li>
			  <li>Отслеживать наиболее эффективные занятия и направления</li>
        </ul>
        
    </div>
</div>

<?php get_template_part('blocks/bottom', 'buy', ['img' => 'price-img2.png', 'name' => get_the_title()]); ?>

<?get_footer();?>