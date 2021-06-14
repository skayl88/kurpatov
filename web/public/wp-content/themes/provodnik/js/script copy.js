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
			$('#vers').html('Онлайн версия');
			$('#desc-vers').html('Все модули = 1 подписка = 1 цена без ограничений');
		    break;

		  case '2':
		    $('#hid2').val('3 месяца');
		    $('#hid3').val('7 125 ₽');
		    $('#price_1').html('7 125 ₽');
		    $('#price_2').html('7 500 ₽');
		    $('#price_3').html('Экономия 5%');
			$('#vers').html('Онлайн версия');
			$('#desc-vers').html('Все модули = 1 подписка = 1 цена без ограничений');
		    break;

		  case '3':
		    $('#hid2').val('6 месяцев');
		    $('#hid3').val('13 500 ₽');
		    $('#price_1').html('13 500 ₽');
		    $('#price_2').html('15 000 ₽');
		    $('#price_3').html('Экономия 10%');
			$('#vers').html('Онлайн версия');
			$('#desc-vers').html('Все модули = 1 подписка = 1 цена без ограничений');
		    break;

		  case '4':
		    $('#hid2').val('1 год');
		    $('#hid3').val('22 560 ₽');
		    $('#price_1').html('22 560 ₽');
		    $('#price_2').html('30 000 ₽');
		    $('#price_3').html('Экономия 20%');
			$('#vers').html('Онлайн версия');
			$('#desc-vers').html('Все модули = 1 подписка = 1 цена без ограничений');
			break;
		  case '5':
		    $('#desc-vers').val('Нет необходимости продлевать лицензию, после покупки программа остается у вас навсегда.');
		    $('#hid3').val('50 000₽₽');
		    $('#price_1').html('50 000₽');
		    $('#desc-vers').html('Нет необходимости продлевать лицензию, после покупки программа остается у вас навсегда.');
		    $('#price_3').html('');
			$('#price_2').html('');
			$('#vers').html('Установочная версия');
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
let mounts = 3;
let strMounts;
function rangeSlider(value) {
	
	if (value==1)
	{
mounts= 1;
strMounts="1 месяц";
mTotal = 2500;
addClc();
addFanshBtn();

	}
	if (value==2)
	{
mounts= 3;
strMounts="3 месяца";
mTotal = 7125;
addClc();
addFanshBtn();
	}
	if (value==3)
	{
mounts= 6;
strMounts="6 месяцев";
mTotal = 13500;
addClc();
addFanshBtn();
	}
	if (value==4)
	{
mounts= 12;
strMounts="1 год";
mTotal = 22560;
addClc();
addFanshBtn();

	}
	if (value==5)
	{
mounts= 'local';
strMounts="Купить навсегда";
mTotal = 50000;
addClc();
remooveFanshBtn();
	}
	if (value==6)
	{
mounts= 'fransh';
strMounts="Для франшиз";
mTotal = 000000;
remooveFanshBtn();

remoove();
	}
	calc(mounts, strMounts, mTotal, mounts);
}
 
let allCheck = document.querySelectorAll('.btn-dop');
let fransh_elem = document.getElementById('check_fransh');
let cenaDop = document.getElementById('cexel');
let mountsName = document.getElementById('rangeValue')
let cMount = document.getElementById('cmount')
let totalPrice = document.getElementById('ctotal')
let border = document.getElementById('dop-border')
let mPrice = 7125;
const dopUslugi= [
	{
	name: 'exel',
	price: 2500
	},
	{
	name: 'exel+',
	price: 9000
	},
	{
	name: 'fransh',
	price: 0
	},
]
function calc(mounts, str, mTotal, mounts) {
	mountsName.innerHTML = str;
cMount.innerHTML= mTotal+'P';
mPrice = mTotal;
mounts= mounts;
totalCount();
dopFilial();

}
const remoove =()=>{
	document.getElementById("clcdisplay").classList.add('hiden');
	document.getElementById("fransh").classList.remove('hiden');
}
const remooveFanshBtn =()=>{
	document.getElementById("fransh_btn").classList.add('hiden');
}
const addFanshBtn =()=>{
	document.getElementById("fransh_btn").classList.remove('hiden');
}

const addClc = () =>{
	document.getElementById("clcdisplay").classList.remove('hiden');
	document.getElementById("fransh").classList.add('hiden');
}
let fillial = false;

fransh_elem.addEventListener('click', ()=>{
	
	if(fransh_elem.classList.contains('active')){
		fransh_elem.classList.remove('active')
		fillial = false;
		fPrice = 0;
	
	}else{
		fransh_elem.classList.add('active');
		fillial=true;
		removeDisp(true);

	}	
	dopFilial();
});

const check_exel = document.getElementById("check_exel");


const dopFilial =()=>{
	if(fillial==true){
		if(mounts == "6" || mounts == "3"|| mounts == "1"|| mounts == "12"){
			fPrice = 800*Number(mounts);
		}
		else{
			fPrice = 0;	}
	}
	dopPrice();
}

for (let check of allCheck){
	check.addEventListener('click', ()=>{
	
	if(check.classList.contains('active')){
		takeActiveBtn(check, false)
		check.classList.remove('active')

		}else{
			for(let item of allCheck){
				item.classList.remove('active')	
			}
			takeActiveBtn(check, true)
			removeDisp(true);
			check.classList.add('active');
		}
	})
}

let totalDop = 0
let AllOnlyDop = document.querySelectorAll('.onlydop');

const removeDisp =(i)=>{
	if(i === false){
		for (let dop of AllOnlyDop){
			dop.classList.add('hiden');
			border.classList.add('dop-border')
		}
	}
	else{
		for (let dop of AllOnlyDop){
			border.classList.remove('dop-border')
			dop.classList.remove('hiden')
		}
	}
}
let fPrice = 0
let activeBtn_fransh = false;


const takeActiveBtn = (currentActive, zero,)=>{
		if(zero == true){
			const dataAttrValue = currentActive.dataset.name;

			if(dataAttrValue == "exel"){
				if(mounts== 1 || mounts == 3){
					totalDop = 2500;
				}
				else{
					totalDop =0
				}
			}
			if(dataAttrValue == "exel+"){
				totalDop = 9000;
			}
		
			}
			if(zero == false){
				totalDop = 0
			}
totalCount();	
dopFilial();	
}
const fBtn=()=>{

}

const dopPrice =()=>{
	if(mounts=='6'|| mounts =="12" ||mounts =="local"){
	dopUslugi[0].price = 0;
	check_exel.classList.add('active');
	removeDisp(true);
	cenaDop.innerHTML = totalDop+fPrice+'P';
	}else{

		dopUslugi[0].price = 2500;
		cenaDop.innerHTML = totalDop+fPrice+'P';
	}
	cenaDop.innerHTML = totalDop+fPrice+'P';
}
const totalCount = () =>{
	dopPrice()
	const total= totalDop + mPrice+fPrice;
totalPrice.innerHTML = total+'P'
}

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
	document.getElementById("oferta").style.display = "block";
	document.getElementById("nextBtn").style.display = "block";

  } else {
    document.getElementById("prevBtn").style.display = "inline";
	document.getElementById("oferta").style.display = "none";
	document.getElementById("SubQuest_Btn").style.display = "none";
	document.getElementById("nextBtn").style.display = "block";
  }
  if (n == (x.length - 1)) {
	document.getElementById("SubQuest_Btn").style.display = "inline";
	document.getElementById("nextBtn").style.display = "none";
 
  } else {
	document.getElementById("SubQuest_Btn").style.display = "none";
	document.getElementById("nextBtn").style.display = "block";
    document.getElementById("nextBtn").innerHTML = "Далее";

  }
  // ... and run a function that displays the correct step indicator:
 
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
 
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
	
    document.getElementById("regForm").submit();

    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields

  var z, x, y, i, j, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");

 
  // A loop that checks every input field in the current tab:

  for (i = 0; i < y.length; i++) {
		if(y[i].checked !== true && y[i].value == "") {
				 valid = false;
				 console.log('2');
				 document.getElementById('error').style.display = "inline";
		}
		if(y[i].checked == true ){
			valid = true;
			console.log(true);
			return valid;
		}
		console.log(y[i].checked);
			  
		
    // If a field is empty...
	
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
	  
    
  }

  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  document.getElementById('error').style.display = "none";
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

 