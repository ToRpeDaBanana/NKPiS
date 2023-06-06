
function replaceClass(id, oldClass,oldClass2,oldClass3,newClass) {
    var elem = $(`${id}`);
    if (elem.hasClass(oldClass) || elem.hasClass(oldClass2) || elem.hasClass(oldClass3)) {
        elem.removeClass(oldClass);
        elem.removeClass(oldClass2);
        elem.removeClass(oldClass3);
    }
    elem.addClass(newClass);
}
var customObject = {
	fontSize: 10,
	font: "Font Awesome 6 Free",
	display: 'hide',
};
function ajaxSend(){
	$.ajax({
		type: "POST",
		url: "/",
		data: customObject,
		dataType: "json",
		success: function(response) {
			console.log(response);
			if(response.success){
				// location.reload();
			}
		}
	});
}
$(document).ready(function() {
	console.log(myData1);
	console.log(myData1.fontSize);
		// $('html').css("font-size",(myData1.*100)+"%");
	// $('html').css("font-size",(myData1.fontSize ? myData1.fontSize : 15)+"px");
	// $('.for-visually-impaired').css("display","block");
	// $('.conteiner-for-visually-impaired').css("display","none");
	// $('.classic-site-version-btn').css("display","none");
	if (myData1.display == 'active'){
		$('.conteiner-for-visually-impaired').toggleClass('active');
		// $('html').addClass('hfont-size-small hfont-classic hcheckbox-interval-f hbetween-interval-small hcolor-site-white-black hcheckbox-img-t');
		$('html').css("font-size",(myData1.fontSize ? myData1.fontSize : 15)+"px");

		$('.for-visually-impaired').css("display","none");

		$('.conteiner-for-visually-impaired.active').css("display","block");

		$('.classic-site-version-btn').css("display","block");

	}
	else if (myData1.display == 'hide'){
		$('.conteiner-for-visually-impaired.active').toggleClass('active');

		$('html').css("font-size","15px");

		// $('html').addClass('hfont-size-small hfont-classic hcheckbox-interval-f hbetween-interval-small hcolor-site-white-black hcheckbox-img-t');
		var impairedStyle = $(".for-visually-impaired").prop("style");
		impairedStyle.removeProperty("display");

		$('.conteiner-for-visually-impaired').css("display","none");

		$('.classic-site-version-btn').css("display","none");

	}
	$('.font-size-small').click(function(event){
		replaceClass("html", "hfont-size-midle", "hfont-size-large","", "hfont-size-small");
		// $('html').css("font-size",(1*100)+"%");
		$('html').css("font-size","15px");
		customObject.fontSize = 15;
		ajaxSend();
		
	});
	$('.font-size-midle').click(function(event){
		replaceClass("html", "hfont-size-small", "hfont-size-large","", "hfont-size-midle");
		// $('html').css("font-size",(2*100)+"%");
		$('html').css("font-size","25px");
		customObject.fontSize = 25;
		ajaxSend();
		
	});
	$('.font-size-large').click(function(event){
		replaceClass("html", "hfont-size-small", "hfont-size-midle","", "hfont-size-large");
		// $('html').css("font-size",(3*100)+"%");
		$('html').css("font-size","35px");
		customObject.fontSize = 35;
		ajaxSend();
	});

	

	$('.font-classic').click(function(event){
		replaceClass("html", "hfont-times-new","","","hfont-classic");
	});

	$('.font-times-new').click(function(event){
		replaceClass("html", "hfont-classic", "","", "hfont-times-new");
	});



	$('.switch-btn').click(function () {
		$(this).toggleClass('switch-on');
		if ($(this).hasClass('switch-on')) {
			$(this).trigger('on.switch');
		} else {
			$(this).trigger('off.switch');
		}
	});
	$('.switch-btn2').click(function () {
		$(this).toggleClass('switch-on2');
		if ($(this).hasClass('switch-on2')) {
			$(this).trigger('on.switch2');
		} else {
			$(this).trigger('off.switch2');
		}
	});
	$('.switch-btn').on('on.switch', function () {
		replaceClass("html", "hcheckbox-interval-f", "","", "hcheckbox-interval-t");
	});
	$('.switch-btn').on('off.switch', function () {
		replaceClass("html", "hcheckbox-interval-t", "","", "hcheckbox-interval-f");
	});



	$('.between-interval-small').click(function(event){
		replaceClass("html", "hbetween-interval-midle", "hbetween-interval-large","", "hbetween-interval-small");		
	});
	$('.between-interval-midle').click(function(event){
		replaceClass("html", "hbetween-interval-small", "hbetween-interval-large","", "hbetween-interval-midle");
	});
	$('.between-interval-large').click(function(event){
		replaceClass("html", "hbetween-interval-small", "hbetween-interval-midle","", "hbetween-interval-large");
	});



	$('.color-site-white-black').click(function(event){
		replaceClass("html", "hcolor-site-black-white", "hcolor-site-blue-black","hcolor-site-sand-black", "hcolor-site-white-black");
	});
	$('.color-site-black-white').click(function(event){
		replaceClass("html", "hcolor-site-white-black", "hcolor-site-blue-black","hcolor-site-sand-black", "hcolor-site-black-white");
	});
	$('.color-site-blue-black').click(function(event){
		replaceClass("html", "hcolor-site-white-black", "hcolor-site-black-white","hcolor-site-sand-black", "hcolor-site-blue-black");
	});
	$('.color-site-sand-black').click(function(event){
		replaceClass("html", "hcolor-site-white-black", "hcolor-site-black-white","hcolor-site-blue-black", "hcolor-site-sand-black");
	});





	$('.switch-btn2').on('on.switch2', function () {
		replaceClass("html", "hcheckbox-img-t", "","", "hcheckbox-img-f");
	});
	$('.switch-btn2').on('off.switch2', function () {
		replaceClass("html", "hcheckbox-img-f", "","", "hcheckbox-img-t");
	});
});
$(document).on('click','.for-visually-impaired', function(){
	$('.conteiner-for-visually-impaired').toggleClass('active');
	var VisuallyImpaired = document.querySelector('.conteiner-for-visually-impaired.active');
	if(VisuallyImpaired){
		$('.for-visually-impaired').css("display","none");
		// $('html').addClass('hfont-size-small hfont-classic hcheckbox-interval-f hbetween-interval-small hcolor-site-white-black hcheckbox-img-t');
		// var conteinerInpaired = $(".conteiner-for-visually-impaired").prop("style");
		// 	conteinerInpaired.removeProperty("display");
		$('.classic-site-version-btn').css("display","block");
		$('.conteiner-for-visually-impaired.active').css("display","block");
		customObject.display = "active";
		ajaxSend();
	}
	
	// $('.conteiner-for-visually-impaired').toggleClass('active');
	
	
});
$(document).on('click','.classic-site-version-btn', function(){
	console.log('cl');
	$('.conteiner-for-visually-impaired.active').toggleClass('active');
	$('.conteiner-for-visually-impaired').css("display","none");
	$('.classic-site-version-btn').css("display","none");
	var impairedStyle = $(".button-down-footer .for-visually-impaired").prop("style");
		impairedStyle.removeProperty("display");
	$('html').removeClass();
	// var impairedStyle3 = $(".conteiner-for-visually-impaired").prop("style");
	// impairedStyle3.removeProperty("display");
	// var impairedStyle = $(".button-down-footer .for-visually-impaired").prop("style");
	// impairedStyle.removeProperty("display");


	// var impairedStyle2 = $(".for-slepix-pidorasov .for-visually-impaired").prop("style");
	// impairedStyle2.removeProperty("display");

	customObject.display = "hide";
	ajaxSend();
	// var classicBtn = document.querySelector('.classic-site-version-btn');
	// var parent = classicBtn.parentNode;
	// parent.removeChild(classicBtn);
	
});
	



// });
// $(document).on('click','.for-visually-impaired', function(){
// 		$('.conteiner-for-visually-impaired').toggleClass('active');
// 		$('html').addClass('hfont-size-small hfont-classic hcheckbox-interval-f hbetween-interval-small hcolor-site-white-black hcheckbox-img-t');
// 		var VisuallyImpaired = document.querySelector('.conteiner-for-visually-impaired.active');
// 		var VisuallyImpaired2 = document.querySelector('.button-down-footer');
		 
// 			if(VisuallyImpaired){
// 				$('.for-visually-impaired').css("display","none");
// 			VisuallyImpaired.innerHTML = `
// 			<div class="font-size">
// 				<p class ="text-impaired">Размер шрифта</p>
// 			<div class="flex-font-size">
// 				<a class ="font-size-small">A</a>
// 				<a class ="font-size-midle">A</a>
// 				<a class ="font-size-large">A</a>
// 			</div>
// 			</div>
// 			<div class="font-text">
// 				<p class="text-impaired">Шрифт</p>
// 			<div class="flex-font-text">
// 				<a class ="font-classic">Без засечек</a>
// 				<a class ="font-times-new">С засечками</a>
// 			</div>
// 			</div>
// 			<div class="interval-text">
// 				<p class="text-interval-p">Интервал между буквами</p>
// 				<div class="switch-btn"></div>
// 			</div>
// 			<div class="between-interval">
// 				<p class = "between-interval-text">Междустрочный итервал</p>
// 			<div class="flex-between-interval">
// 				<a class ="between-interval-small"><img  src="assets/img/Group49.png" alt=""></a>
// 				<a class ="between-interval-midle"><img  src="assets/img/Group 50.png" alt=""></a>
// 				<a class ="between-interval-large"><img  src="assets/img/Group 51.png" alt=""></a>
// 			</div>
// 			</div>
// 			<div class = "color-site">
// 				<p class = "color-site-text">Цвет сайта</p>
// 			<div class="flex-color-site">
// 				<a class = "color-site-black-white">A</a>
// 				<a class = "color-site-white-black">A</a>
// 				<a class = "color-site-blue-black">A</a>
// 				<a class = "color-site-sand-black">A</a>
// 			</div>
// 			</div>
// 			<div class="image-site">
// 				<p class ="img-text">Изображения</p>
// 				<div class="switch-btn2"></div>
// 			</div>
// 			<div class = "classic-site-version">
// 				<a class ="classic-site-version-btn">Обычная версия</a>
// 			</div>
// 		`;
// 		VisuallyImpaired2.innerHTML += `
// 			<a class="classic-site-version-btn">
// 				<img src="assets/img/Group 3.png" alt="">
// 			</a>`;
// 		}
		
