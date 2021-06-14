<?

#Template Name: Контакты

get_header();

?>

<div class="b1 b1-6">
    <div class="container">
        <div class="box">
            <div class="page-title">Контакты</div>
        </div>
        <div class="contacts-box">
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/phone2.png"/>
                <b>Отдел продаж</b>
                <a href="tel:8 800 1000 632">8 800 1000 632</a>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/phone2.png"/>
                <b>Поддержка</b>
                <a href="mailto:support@berkanasoft.ru">support@berkanasoft.ru</a>
            </div>
            <div class="soc-box">
                <a target="_blank" href="https://www.instagram.com/berkanasoft/"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram2.svg" alt="" /></a>
                    <!--<a target="_blank" href="https://vk.com/berkanasoftru"><img src="<?php //echo get_template_directory_uri(); ?>/img/facebook2.svg" alt="" /></a>-->
                    <a target="_blank" href="https://vk.com/berkanasoftru"><img src="<?php echo get_template_directory_uri(); ?>/img/vk2.svg" alt="" /></a>
                    <a target="_blank" href="https://wa.me/79313690494"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp2.svg" alt="" /></a>
                    <a target="_blank" href="https://t.me/ollaberkana"><img src="<?php echo get_template_directory_uri(); ?>/img/telegram2.svg" alt="" /></a>
            </div>
        </div>
            <div class="contacts-form">
                <div class="form1">
                    <form class="mail_ajax">
                        <div class="inp-3">
                            <div class="inp">
                                <input name="Имя" type="text" placeholder="Ваше имя"/>
                            </div>
                            <div class="inp">
                                <input name="Почта" type="email" required placeholder="Ваш e-mail"/>
                            </div>
                            <div class="inp">
                                <input name="Телефон" type="text" placeholder="Контактный телефон"/>
                            </div>
                        </div>
                        <div class="inp">
                            <textarea name="txt" placeholder="Сообщение"></textarea>
                        </div>
                        <div class="btn-box">
					

                            <label class="custom-checkbox" ><input type="checkbox " name=""  required  oninvalid="this.setCustomValidity('Необходимо подтвердить согласие на обработку персональных данных')" onchange="this.setCustomValidity('')"><span class="checkmark"></span> Согласен с <a target="_blank" href="<?php echo get_template_directory_uri(); ?>/docs/soglasie.pdf">обработкой песональных данных</a></label>
                            <button class="btn3" type="submit">Отправить</button>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/contacts.png" alt="" /></div>
    </div>
</div>  
<?get_footer();?>