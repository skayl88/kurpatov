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
                        <div class="ttl" id="vers">Онлайн версия</div>
                        <p id="desc-vers"> Все модули = 1 подписка = 1 цена без ограничений</p>
                            <div class="controls">
                                <div class="switch" data-var="1">
                                   
                                    <div class="switch-btn"><i></i>  <span>1 месяц</span></div>
                                    <input class="switch-inp" type="hidden" name="ver" >
                                </div>
                                <div class="switch on" data-var="2">
                                 
                                    <div class="switch-btn"><i></i> <span>3 месяца</span></div>
                                    <input class="switch-inp" type="hidden" name="ver" value="1" >
                                </div>
                                <div class="switch" data-var="3">
                                 
                                    <div class="switch-btn"><i></i>   <span>6 месяцев</span></div>
                                    <input class="switch-inp" type="hidden" name="ver" >
                                </div>
                                <div class="switch" data-var="4">
                                
                                    <div class="switch-btn"><i></i>    <span>1 год</span></div>
                                    <input class="switch-inp" type="hidden" name="ver" >
                                </div>
                                <div class="switch" data-var="5">
                                
                                <div class="switch-btn local"><i></i>    <span>Купить навсегда</span></div>
                                <input class="switch-inp" type="hidden" name="ver" >
                            </div>
                            </div>
                            <div class="txt1">
                        <div class="price-price sale">
                            <b id="price_1">7 125 ₽</b>
                            <span>
                                <s id="price_2">7 500 ₽ </s><br/>
                                <span id="price_3">Экономия 5%</span>
                            </span>
                        </div>
                    </div>
                    <div class="btns">
                        <a class="btn3 btn-buy" href="" data-title="<?php echo $name; ?>">Купить</a>
                        <a class="btn4 btn-demo" href=""><span>Демо - доступ</span></a>
                    </div>
                        </div>
                       
                    </div>
                    <div class="img"
                    style="<?php echo $imgstyle; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $img; ?>" alt="" /></div>
                </div>
                <div class="c1">
                    
                </div>

            </div>
        </div>
    </div>
</div>