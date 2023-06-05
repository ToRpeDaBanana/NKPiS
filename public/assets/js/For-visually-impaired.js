"use strict";
function replaceClass(id, oldClass,oldClass2,oldClass3,newClass) {
    var elem = $(`${id}`);
    if (elem.hasClass(oldClass) || elem.hasClass(oldClass2) || elem.hasClass(oldClass3)) {
        elem.removeClass(oldClass);
        elem.removeClass(oldClass2);
        elem.removeClass(oldClass3);
    }
    elem.addClass(newClass);
}

$(document).on('click','.for-visually-impaired', function(){
		$('.conteiner-for-visually-impaired').toggleClass('active');
		$('html').addClass('hfont-size-small hfont-classic hcheckbox-interval-f hbetween-interval-small hcolor-site-white-black hcheckbox-img-t');
		var VisuallyImpaired = document.querySelector('.conteiner-for-visually-impaired.active');
		var VisuallyImpaired2 = document.querySelector('.button-down-footer');
		 
			if(VisuallyImpaired){
				$('.for-visually-impaired').css("display","none");
			VisuallyImpaired.innerHTML = `
			<div class="font-size">
				<p class ="text-impaired">Размер шрифта</p>
				<a class ="font-size-small">A</a>
				<a class ="font-size-midle">A</a>
				<a class ="font-size-large">A</a>
			</div>
			<div class="font-text">
				<p class="text-impaired">Шрифт</p>
				<a class ="font-classic">Без засечек</a>
				<a class ="font-times-new">С засечками</a>
			</div>
			<div class="interval-text">
				<p class="text-interval-p">Интервал между буквами</p>
				<div class="switch-btn"></div>
			</div>
			<div class="between-interval">
				<p class = "between-interval-text">Междустрочный итервал</p>
				<a class ="between-interval-small"></a>
				<a class ="between-interval-midle"></a>
				<a class ="between-interval-large"></a>
			</div>
			<div class = "color-site">
				<p class = "color-site-text">Цвет сайта</p>
				<a class = "color-site-white-black">A</a>
				<a class = "color-site-black-white">A</a>
				<a class = "color-site-blue-black">A</a>
				<a class = "color-site-sand-black">A</a>
			</div>
			<div class="image-site">
				<p class ="img-text">Изображения</p>
				<div class="switch-btn2"></div>
			</div>
			<div class = "classic-site-version">
				<a class ="classic-site-version-btn">Обычная версия</a>
			</div>
		`;
		VisuallyImpaired2.innerHTML += `
			<a class="classic-site-version-btn">
				<img src="assets/img/Group 3.png" alt="">
			</a>`;
		}
		$('.classic-site-version-btn').click(function(event){
			$('.conteiner-for-visually-impaired.active').toggleClass('active');
			VisuallyImpaired.innerHTML = null;


			$('html').removeClass();
			

			var impairedStyle = $(".button-down-footer .for-visually-impaired").prop("style");
			impairedStyle.removeProperty("display");


			var impairedStyle2 = $(".for-slepix-pidorasov .for-visually-impaired").prop("style");
			impairedStyle2.removeProperty("display");

			var classicBtn = document.querySelector('.classic-site-version-btn');
			var parent = classicBtn.parentNode;
			parent.removeChild(classicBtn);
		});


		$('.font-size-small').click(function(event){
			replaceClass("html", "hfont-size-midle", "hfont-size-large","", "hfont-size-small");

		});
		$('.font-size-midle').click(function(event){
			replaceClass("html", "hfont-size-small", "hfont-size-large","", "hfont-size-midle");
		});
		$('.font-size-large').click(function(event){
			replaceClass("html", "hfont-size-small", "hfont-size-midle","", "hfont-size-large");
		});

		// $.ajax({
	 //        type: "POST",
	 //        url: "/recherche/ajax",
	 //        data: {
	 //           zoom: e.target.getZoom()
	 //        },
	 //        dataType: "json",
	 //        success: function(response) {
	 //            console.log(response);
	 //        }
  //   	});

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
			replaceClass("html", "hcheckbox-img-f", "","", "hcheckbox-img-t");
		});
		$('.switch-btn2').on('off.switch2', function () {
			replaceClass("html", "hcheckbox-img-t", "","", "hcheckbox-img-f");
		});

});