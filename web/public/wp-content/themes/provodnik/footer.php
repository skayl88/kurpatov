<?php wp_footer();?>

<div class="footer-top">
    <img src="<?php echo get_template_directory_uri(); ?>/img/footer-top.png"/>
</div>
<div class="footer">
    <div class="container">
        <div class="d-flex mb-3">
            <div class="logo-box">
                <div class="logo2"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="" /></a></div>
            </div>
            <div class="footer-menu-box">
                <div class="footer-menu">
                    <div class="ttl">Компания</div>
                    <a  href="<?php echo get_page_link(22); ?>">О нас</a>
                    <a  href="<?php echo get_page_link(28); ?>">Цена</a>
                    <a  href="<?php echo get_page_link(52); ?>">Модули</a>
                    <a  href="<?php echo get_page_link(24); ?>">Консультация</a>
                <!--   <a  href="/blog/">Блог</a>-->
                    <a  href="<?php echo get_page_link(26); ?>">Контакты</a>
                </div>
            </div>
          
            <div class="cnt-box">
                <div class="cnt">
                    <div class="ttl">Контакты</div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/email2.svg"/>
                        <span>Техническая поддержка</span>
                        <a href="mailto:support@berkanasoft.ru">support@berkanasoft.ru</a>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/call.svg"/>
                        <span>Отдел продаж</span>
                        <a href="tel:88001000632">88001000632</a>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/maps-and-flags.svg"/>
                        <span>Адрес</span>
                        <p>Санкт-Петербург, <br> ул. Профессора Попова, д. 23, офис 222</p>
                    </div>
                </div>
                <div class="soc-box">
                    <a target="_blank" href="https://www.instagram.com/berkanasoft/"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="" /></a>
                    <!--<a target="_blank" href="https://vk.com/berkanasoftru"><img src="<?php //echo get_template_directory_uri(); ?>/img/facebook.svg" alt="" /></a>-->
                    <a target="_blank" href="https://vk.com/ollaberkana"><img src="<?php echo get_template_directory_uri(); ?>/img/vk.svg" alt="" /></a>
                    <a target="_blank" href="https://wa.me/79313690494"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg" alt="" /></a>
                    <a target="_blank" href="https://t.me/ollaberkana"><img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg" alt="" /></a>
                </div>
                <div class="footer-info">
                    <div class="ttl">Реквизиты <a target="_blank" href="<?php echo get_template_directory_uri(); ?>/docs/pay.pdf">Скачать <img src="<?php echo get_template_directory_uri(); ?>/img/direct-download.svg" alt="" /></a></div>
                    <p>ИНН 7816560666</p>
                    <p>ОГРН 1137847162430</p>
                    <p>КПП 781301001</p>
                  
                </div>
            </div>
        </div>
        <div class="pay-icons">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pay1.png" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/pay2.png" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/pay3.png" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/pay4.png" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/pay5.png" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/pay6.png" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/pay7.png" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/pay8.png" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/pay9.png" alt="" />
        </div>
        <div class="copy-txt">    
            <a target="_blank" href="<?php echo get_template_directory_uri(); ?>/docs/oferta.pdf">Договор - оферта</a>
            <a target="_blank" href="<?php echo get_template_directory_uri(); ?>/docs/soglasie.pdf">Согласие на обработку персональных данных</a>
         
        </div>
		
          
          <p class="copy-text-down">
			 Работаем с 2013. Все права защищены и принадлежат © ООО «Берканасофт»
		</p> 
			   
			
         
      
    </div>
</div>

<div id="btn_overlay"></div>    

<div id="callpopup" class="popup">      
    <div class="popup-content">
        <div class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="" /></div>          
        <div class="form-title">
            Обратный звонок
        </div>
        <div class="form1">
            <form class="mail_ajax">
				 <input type="hidden" name="Форма" value="Обратный звонок">
                <input type="text" name="Имя"  placeholder="Введите ваше имя"/>
                <input type="text" name="Телефон"  placeholder="Введите ваш телефон" required />
                <button class="btn3 bu-sub" type="submit">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>

<div id="buypopup" class="popup">      
    <div class="popup-content">
        <div class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="" /></div>          
        <div class="form-title">
            Отправить заявку на покупку
        </div>
        <div class="form1">
            <form id="by-sub" class="mail_ajax">
                <input type="hidden" name="Форма" value="Купить">
                <input type="hidden" name="Страница" id="hid1" value="<?php the_title(); ?>">
                <input type="hidden" name="Версия" id="hid2" value="3 месяца">
                <input type="hidden" name="Цена" id="hid3" value="7 125 ₽">
                <input type="text" name="Имя"  placeholder="Введите ваше ФИО"/>
                <input type="text" name="Телефон"  placeholder="Введите ваш телефон"required />
                <input type="email" name="Почта"  placeholder="Введите ваш e-mail" required />
                <input type="text" name="Название организации"  placeholder="Введите название организации" />
                <button class="btn3 by-sub" type="submit">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>

<div id="demopopup" class="popup">      
    <div class="popup-content">
        <div class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="" /></div>          
        <div class="form-title">
            Отправить заявку на демо-доступ
        </div>
        <div class="form1">
            <form id="demo-sub" class="mail_ajax">
                <input type="hidden" name="Форма" value="демо-доступ">
                <input type="text" name="Имя"  placeholder="Введите ваше ФИО"/>
                <input type="text" name="Телефон"  placeholder="Введите ваш телефон"required/>
                <input type="email" name="Почта"  placeholder="Введите ваш e-mail" required />
                <input type="text" name="Название организации"  placeholder="Введите название организации" />
                <button class="btn3 demo-sub" type="submit">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>

<div id="buyfullpopup" class="popup">      
    <div class="popup-content">
        <div class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="" /></div>          
        <div class="form-title">
            Купить установочную версию
        </div>
        <div class="form1">
            <form id="by-sub-local" class="mail_ajax">
                <input type="hidden" name="Форма" value="Установочная версия">
                <input type="text" name="Имя"  placeholder="Введите ваше ФИО"/>
                <input type="text" name="Телефон"  placeholder="Введите ваш телефон" required/>
                <input type="email" name="Почта"  placeholder="Введите ваш e-mail" required />
                <input type="text" name="Название организации"  placeholder="Введите название организации" />
                <button class="btn3 by-sub-local " type="submit">Оставить заявку</button>
            </form>
        </div>
    </div>
</div>

<div id="thankspopup" class="popup">      
    <div class="popup-content">
        <div class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="" /></div>          
        <div class="form-title">
           Спасибо за заявку! Мы свяжемся с Вами в рабочее время!
        </div>

    </div>
</div>


<script>
    jQuery("form.mail_ajax").submit(function() { //Change
		console.log('sub');
        var th = jQuery(this);
		
        jQuery.ajax({
          type: "POST",
          url: "/mail.php", //Change
          data: th.serialize()
        }).done(function() {
        $("#btn_overlay").hide();
        $(".popup").hide();
        $("#btn_overlay").show();           
        var scroll = $(window).scrollTop();         
        $("#thankspopup").css("top",scroll+40+"px");
        $("#thankspopup").show();  
          setTimeout(function() {
            // Done Functions
            th.trigger("reset");
          }, 1000);
        });
        return false;
      });
      jQuery("form.quest_mail_ajax").submit(function() { //Change
		console.log('sub');
        var th = jQuery(this);
		
        jQuery.ajax({
          type: "POST",
          url: "/mail.php", //Change
          data: th.serialize()
        }).done(function() {
        document.getElementById('error').style.display = "none";
        $(".quest").hide();
        $("#prevBtn").hide();
        $("#nextBtn").hide();
        $(".home").show();
        $("#SubQuest_Btn").hide();
        ym(74180377,'reachGoal','kviz');
        $(".httl").html(" Данные переданы нашим сотрудникам, ожидайте получения промокода в ближайшее время")  
          setTimeout(function() {
            // Done Functions
            th.trigger("reset");
          }, 1000);
        });
        return false;
      });

jQuery("#demo-sub").submit(function() {
gtag('event', 'demo_crm', {
      'event_category': 'crm',
      'event_action': 'demo'     
    });
		console.log('demo');
});
	
jQuery("#by-sub").submit(function() {
	gtag('event', 'ordered_crm', {
      'event_category': 'crm',
      'event_action': 'buy'
        });
	console.log('buy');
});
		
jQuery("#by-sub-local").submit(function() {
	gtag('event', 'local_crm', {
      'event_category': 'crm',
      'event_action': 'buy-local' 

		
    });
			console.log('buy-local');
});

  

</script>
<?php the_field('foot_code', 'options'); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(74180377, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>

<noscript><div><img src="https://mc.yandex.ru/watch/74180377" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<style src="https://atuin.ru/demo/ui-slider/jquery-ui.css"></style>


</body>
</html>