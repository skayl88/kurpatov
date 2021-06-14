<?php
$img = $args['img']; 
$title = $args['title'];
$name = $args['name'];

$imgstyle = 'right: -100px;';
if(is_page(56)){
    $imgstyle = 'right: -200px;';
}

?>

<div class="price-box">
    <div class="container">
        <div class="httl <?php echo $title; ?>">Стоимость</div>
        <div class="price">
            <div class="inner">
                <div class="c2">
                    <div class="txt2">
                        <div class="c3">
                            <div class="controls">
                                <div class="switch" data-var="1">
                                    <span>1 месяц</span>
                                    <div class="switch-btn"><i></i></div>
                                    <input class="switch-inp" type="hidden" name="ver" >
                                </div>
                                <div class="switch on" data-var="2">
                                    <span>3 месяца</span>
                                    <div class="switch-btn"><i></i></div>
                                    <input class="switch-inp" type="hidden" name="ver" value="1" >
                                </div>
                                <div class="switch" data-var="3">
                                    <span>6 месяцев</span>
                                    <div class="switch-btn"><i></i></div>
                                    <input class="switch-inp" type="hidden" name="ver" >
                                </div>
                                <div class="switch" data-var="4">
                                    <span>1 год</span>
                                    <div class="switch-btn"><i></i></div>
                                    <input class="switch-inp" type="hidden" name="ver" >
                                </div>
                            </div>
                        </div>
                        <div class="c4">
                            <div class="price2-box">
                                <div class="ttl">Установочная версия</div>
                                <p>
                                    Нет необходимости продлевать
лицензию, после покупки, программа
остается у вас навсегда.
                                </p>
                                <div class="price-price">
                                    <b>50 000 ₽</b>
                                </div>
                                <div class="btn-box">
                                    <a class="btn3 btn-full" href="">Купить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img"
                    style="<?php echo $imgstyle; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $img; ?>" alt="" /></div>
                </div>
            </div>
        </div>
    </div>
</div>