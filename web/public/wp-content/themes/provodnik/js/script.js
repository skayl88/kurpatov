$(document).ready(function(){    	
	
	if (window.location.pathname.indexOf('/konsultacziya/') >= 0) {
	  var $window = $(window);
	  var $sidebar = $(".sidebar-menu");
	  var $sidebarTop = $sidebar.position().top;
	  var $sidebarHeight = $sidebar.height();
	  var $contentHeight = $('.content').height();
	  var $footer = $('.footer');
	  var $footerTop = $footer.position().top;
	 
	  $window.scroll(function(event) {
	    $sidebar.addClass("fixed");
	    var $scrollTop = $window.scrollTop();
	    var $topPosition = Math.max(0, $sidebarTop - $scrollTop);
	    console.log('scrolltop: '+$scrollTop);
	    console.log('sidebarHeight: '+$sidebarHeight);
	    console.log('footerTop: '+$footerTop);
	    console.log('contentHeight: '+$contentHeight);
	    if($contentHeight > 5000) {
	    	var $heightBox = 900;
	    }
	    else {
	    	var $heightBox = 900;
	    }

	    if ($scrollTop + 900 > $footerTop) {
	      var $topPosition = Math.min($topPosition, $footerTop - $scrollTop - $heightBox);
	    }
	 
	    $sidebar.css("top", $topPosition);
	  });
	}
	

	$('a[href^="#"], a[href^="."]').click( function(){ 
		var scroll_el = $(this).attr('href');
		if ($(scroll_el).length != 0) { 
		$('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);
		}
		return false;
	});	
	
	$('.menu-btn').click(function(){
		$(this).toggleClass('open');
		$('.menu-box').toggleClass('open');
	});
	
	$('.price .switch-btn').click(function () {
		var parent = $(this).closest(".switch");
		$('.switch').removeClass("on");
		$('.switch').find(".switch-inp").val("0");
		var variate = parent.attr('data-var');
		console.log(variate);
		switch(variate) {
		  case '1':
		    $('#hid2').val('1 месяц');
		    $('#hid3').val('2 500 ₽');
		    $('#price_1').html('2 500 ₽');
		    $('#price_2').html('');
		    $('#price_3').html('');
		    break;

		  case '2':
		    $('#hid2').val('3 месяца');
		    $('#hid3').val('7 125 ₽');
		    $('#price_1').html('7 125 ₽');
		    $('#price_2').html('7 500 ₽');
		    $('#price_3').html('Экономия 5%');
		    break;

		  case '3':
		    $('#hid2').val('6 месяцев');
		    $('#hid3').val('13 500 ₽');
		    $('#price_1').html('13 500 ₽');
		    $('#price_2').html('15 000 ₽');
		    $('#price_3').html('Экономия 10%');
		    break;

		  case '4':
		    $('#hid2').val('1 год');
		    $('#hid3').val('22 560 ₽');
		    $('#price_1').html('22 560 ₽');
		    $('#price_2').html('30 000 ₽');
		    $('#price_3').html('Экономия 20%');
		    break;
		}

		if (parent.hasClass("on")) {
			parent.removeClass("on");
			parent.find(".switch-inp").val("0");
		} else {
			parent.addClass("on");	
			parent.find(".switch-inp").val("1");
		}
	});
	$('.advantages .switch-btn').click(function () {
		var parent = $(this).closest(".switch");
		var id = parent.data("id");
		if (parent.hasClass("on")) {
			//parent.removeClass("on");
		} else {
			$('.advantages .switch').removeClass("on");
			parent.addClass("on");
			$('.advantages .items').hide();
			$('.advantages .item'+id).show();
		}
	});
	
	$('.sidebar-menu .ttl').click(function () {
		var parent = $(this).closest(".item");
		if (parent.hasClass("on")) {
			$('.sidebar-menu .item').removeClass("on");
		} else {
			$('.sidebar-menu .item').removeClass("on");
			parent.addClass("on");	
		}
	});
	
	$('.sedebar-menu-btn').click(function () {		
		if ($(this).hasClass("on")) {
			$(this).removeClass("on");
			$(this).text("Открыть меню");
			$(".sidebar").slideUp();
		} else {
			$(this).addClass("on");	
			$(this).text("Закрыть меню");
			$(".sidebar").slideDown();
		}
	});
	
	
	
	
var owl = $('.revs-slider.owl-carousel').owlCarousel({
	rtl:true,
    loop:true,
	//autoWidth:true,
	items:3,
	dots: false,
	navContainer: '.revs-navs',
	nav : true,
	navText: ["<img src='/wp-content/themes/provodnik/img/left-arrow2.svg'/>","<img src='/wp-content/themes/provodnik/img/right-arrow2.svg'/>"],
    responsive:{
        0:{
            items:1, 
			rtl:false,
			autoHeight: true,
        },
        900:{
            items:3
        }
    }
})	

checkClasses();
owl.on('translated.owl.carousel', function(event) {
	checkClasses();
	owl.trigger('refresh.owl.carousel');
});

function checkClasses(){
	$('.revs-slider .owl-stage .owl-item').removeClass('firstActiveItem lastActiveItem');	
	setTimeout(function() {
        var first = $('.revs-slider .owl-stage .owl-item.active').eq(0);
		first.addClass('firstActiveItem');
		$(".revs-box-out .out").html( first.find(".txt").html() );
    },0);
}

		
	$("#btn_overlay").click(function(){
		$("#btn_overlay").hide();
		$(".popup").hide();
		$("#question-txt").html("");
	});
	$(".close").click(function(){	
		$("#btn_overlay").hide();
		$(".popup").hide();
	});
	
	$('.btn-call').click( function( event ) {
		event.preventDefault();					
		$("#btn_overlay").show();			
		var scroll = $(window).scrollTop();			
		$("#callpopup").css("top",scroll+40+"px");
		$("#callpopup").show();			
		
	});	

	$('.btn-buy').click( function( event ) {
		event.preventDefault();		
		//$('#hid1').val($(this).attr('data-title'));	

		$("#btn_overlay").show();			
		var scroll = $(window).scrollTop();			
		$("#buypopup").css("top",scroll+40+"px");
		$("#buypopup").show();			
		
	});	

	$('.btn-demo').click( function( event ) {
		event.preventDefault();		
		$("#btn_overlay").show();			
		var scroll = $(window).scrollTop();			
		$("#demopopup").css("top",scroll+40+"px");
		$("#demopopup").show();			
		
	});	

	$('.btn-full').click( function( event ) {
		event.preventDefault();		
		$("#btn_overlay").show();			
		var scroll = $(window).scrollTop();			
		$("#buyfullpopup").css("top",scroll+40+"px");
		$("#buyfullpopup").show();			
		
	});	

	//$.mask.definitions['~']='[ 1234567890+_]';
	//$("input[name='Телефон']").inputmask({"mask": "+9 (999) 999-9999"}); //specifying options

	
	
});