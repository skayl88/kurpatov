<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка 
      ?>>
<head>
  <title><?php 
  if ($_SERVER['REQUEST_URI'] == '/')
	echo 'CRM система для школы и учебных центров ОллаБеркана - простая программа учёта клиентов малого бизнеса'; 
  elseif ($_SERVER['REQUEST_URI'] == '/czeny/')
		echo 'Купить CRM систему - Цена, стоимость, сколько стоит CRM';
  elseif ($_SERVER['REQUEST_URI'] == '/modul-planirovanie-zadach/')
		echo 'Планировщик задач для компании - CRM программа для планирования расписания';
  elseif ($_SERVER['REQUEST_URI'] == '/modul-uchet-finansov-i-tovarov/')
		echo 'CRM для учета финансов организации - программа автоматизации учета доходов и расходов';
  elseif ($_SERVER['REQUEST_URI'] == '/modul-kassy/')
		echo 'CRM с онлайн-кассой - программа с учетом оплат клиентов';
  elseif ($_SERVER['REQUEST_URI'] == '/modul-planirovanie-zadach/')
		echo 'Планировщик задач для компании - CRM программа для планирования расписания';
  elseif ($_SERVER['REQUEST_URI'] == '/modul-zhurnal-uspevaemosti/')
		echo 'Журнал учета посещаемости и успеваемости в электронном виде';
  elseif ($_SERVER['REQUEST_URI'] == '/berkana-uchebnyj-czentr/')
		echo 'CRM для школы и учебного центра - программа управления и учета образовательных учреждений';
  elseif ($_SERVER['REQUEST_URI'] == '/berkana-detskij-czentr/')
		echo 'CRM для детского центра - программа учета детского клуба';
  elseif ($_SERVER['REQUEST_URI'] == '/modul-uchet-klientov/')
		echo 'Учет клиентов CRM - простая система для учета заказчиков';
  elseif ($_SERVER['REQUEST_URI'] == '/moduli/')
		echo 'Внедрение CRM системы';
  elseif ($_SERVER['REQUEST_URI'] == '/konsultacziya/')
		echo 'Настройка CRM системы в компании';
  elseif ($_SERVER['REQUEST_URI'] == '/berkana-yazykovaya-shkola/')
		echo 'CRM для языковой школы - программа учёта для курсов иностранных языков';
  elseif ($_SERVER['REQUEST_URI'] == '/berkana-detskij-sad/')
		echo 'CRM для детского сада - программа управления и учета';
  elseif ($_SERVER['REQUEST_URI'] == '/berkana-igrovoj-czentr/')
		echo 'CRM для игрового центра - программа управления развлекательным центром';
  elseif ($_SERVER['REQUEST_URI'] == '/modul-marketing/')
		echo 'Учет заявок клиентов онлайн - CRM программа';
  elseif ($_SERVER['REQUEST_URI'] == '/o-nas/')
		echo 'Облачная CRM система - программа учета в облаке';
  else
		echo wp_get_document_title(); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <?php wp_head(); // необходимо для работы плагинов и функционала 
    if ($_SERVER['REQUEST_URI'] == '/')
	{ 
		echo '<meta name="description" content="ОллаБеркана - CRM для школ и детских центров. Получите демо-доступ прямо сейчас!" />';
	}
	else echo '<meta name="description" content="'.wp_get_document_title().' - CRM для школ и детских центров ОллаБеркана. Получите демо-доступ прямо сейчас!" />';
  ?>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
  <?php the_field('head_code', 'options'); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193039722-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193039722-1');
</script>
	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?168",t.onload=function(){VK.Retargeting.Init("VK-RTRG-913721-7ElVj"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-913721-7ElVj" style="position:fixed; left:-999px;" alt=""/></noscript>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1113562512478277');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1113562512478277&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); // все классы для body 
      ?>>

<?php if(!is_front_page() && !is_page(22) && !is_page(52)){ ?>
	<div class="bg2-img"><img src="<?php echo get_template_directory_uri(); ?>/img/bg2.jpg"/></div>
<?php } ?>

<div class="header">
	<div class="container">
		<div class="d-flex">
			<div class="logo"><a  href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a></div>
			<div class="header-right">
				
				<div class="bottom">
						<div class="soc-box">
						<a target="_blank" href="https://www.instagram.com/berkanasoft/"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="" /></a>
                    <!--<a target="_blank" href="https://vk.com/ollaberkana"><img src="<?php //echo get_template_directory_uri(); ?>/img/facebook.svg" alt="" /></a>-->
                    <a target="_blank" href="https://vk.com/ollaberkana"><img src="<?php echo get_template_directory_uri(); ?>/img/vk.svg" alt="" /></a>
                    <a target="_blank" href="https://wa.me/79313690494"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg" alt="" /></a>
                    <a target="_blank" href="https://t.me/ollaberkana"><img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg" alt="" /></a>
					</div>
					
					<div class="txt2"> <a target="_blank" href="mailto:support@berkanasoft.ru">support@berkanasoft.ru</a>
					</div>
					<div class="txt1"> <a target="_blank" href="tel:88001000632">8 800 1000 632</a></div>
				
				</div>
				<div class="top">
					<div class="menu-box">
						<div class="menu">
							<a href="<?php echo get_page_link(22); ?>">О нас</a>
							<a href="<?php echo get_page_link(28); ?>">Цены</a>
							<a href="<?php echo get_page_link(52); ?>">Модули</a>
							<a href="<?php echo get_page_link(24); ?>">Консультация</a>
							<!--<a href="/blog/">Блог</a>-->
							<a href="<?php echo get_page_link(26); ?>"><span>Контакты</span></a>			
						</div>
					</div>
					<div class="menu-btn"><span></span><span></span><span></span></div>
				</div>
			</div>
			
		</div>
	</div>
</div>

