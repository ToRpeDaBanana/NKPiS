
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
	fontSize: 16,
	font: 'PT Sans',
	display: 'hide',
	checkboxInterval: 'normal',
	betweenInterval: 1,
	colorSite1: 'white',
	colorSite2: 'black',
	imgVisible: '1',
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
function colorSiteCustom(color1,color2){
	var cssColor = {
		"background-color": `${color1 ? color1 : 'white'}`,
		"border-top": `1px solid ${color2 ? color2 : 'black'}`,
		"border-bottom": `1px solid ${color2 ? color2 : 'black'}`,
 	}
	var textColor = {
		"color": `${color2 ? color2 :'white'}`,
	}
	var textColorBlack = {
		"color": `${color2 ? color2 :'black'}`,
	}
	var cssBorderColor = {
		"border":`1px solid ${color2 ? color2 :'black'}`,
		"background": `${color1 ? color1 : 'none'}`,
	}
	var cssBorderDown = {
		"border-bottom": `1px solid ${color2 ? color2 : 'black'}`,
		"background-color": `${color1 ? color1 : 'white'}`,
	}
	var cssBorderUp = {
		"background-color": `${color1 ? color1 : 'white'}`,
		"border-top": `1px solid ${color2 ? color2 : 'black'}`,
	}
	//  {'background-color':(color1 ? color1 : 'white'), 'border':"1px solid"+(color2 ? color2 : 'black')}
	$('.header-top-left').css(cssColor);
	$('.container-nav-menu').css(cssBorderDown);
	$('.tab label').css(cssColor);
	$('.tab-1 label').css(cssColor);
	$('.icon-fast-dostup').css(cssBorderColor);
	$('.first-icon').css(cssBorderColor);
	$('main').css(cssColor);
	$('footer').css(cssColor);
	$('.tab-content_1').css(cssColor);
	$('.main_part_header').css(cssBorderUp);
	$('.wrapper').css(cssColor);
	$('.wrapper slider__item').css(cssBorderColor);
	$('.fast_icon_dostup').css(cssColor);
	$('.Wrapper').css(cssColor);
	$('.news p').css(cssBorderColor);
	$('.our-contakt').css(cssBorderColor);
	$('.contakt-DONM').css(cssBorderColor);
	$('.for-down-footer').css(cssBorderColor);
	$('.logo-otdel-1').css(textColor);
	$('.contakt-label p').css(cssBorderColor);
	$('#contakt').css(cssBorderColor);
	$('.Slider').css(cssBorderColor);
	$('.Wrapper').css(cssBorderColor);
	$('.question-label-text').css(cssBorderColor);
	$('.wRapper').css(cssColor);
	$('.question').css(cssColor);
	$('.body').css(cssColor);
	$('.contakt').css(cssColor);
	$('.down-footer').css(cssColor);
	$('.header-top-left').css(cssColor);
	$('label').css(textColor);
	$('.logo-otdel').css(textColor);
	$('logo-otdel-1').css(textColor);
	$('p').css(textColor);
	$('.tab-content').css(cssColor);
	$('.adres p').css(textColorBlack);
	$('.rezim_work p').css(textColorBlack);
	$('.phone p').css(textColorBlack);
	$('.menu').css(cssColor);
}
function fontSizeCustom(sizeFont){
	$('.gos').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.ministr').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.call_me').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.tab-one').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.tab-content-first').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.podpis').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.icon-fast-dostup').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.button-fast-dostup-text').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.news p').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.date-time').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.name-corp').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.question-label-text').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.adres').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.rezim_work').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.phone').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.contakt-label').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.our-contakt p').css("font-size",(sizeFont ? sizeFont : 16)+"px");
	$('.contakt-DONM p').css("font-size",(sizeFont ? sizeFont : 16)+"px");
}
function fontFamilyCustom(fontFam){
	$('p').css("font-family",(fontFam ? fontFam : 'PT Sans'));
	$('a').css("font-family",(fontFam ? fontFam : 'PT Sans'));
	$('span').css("font-family",(fontFam ? fontFam : 'PT Sans'));
	$('label').css("font-family",(fontFam ? fontFam : 'PT Sans'));
	$('ul').css("font-family",(fontFam ? fontFam : 'PT Sans'));
}

function letterSpacingCustom(letterSpa){
	$('p').css('letter-spacing',(letterSpa ? letterSpa :'normal'));
	$('a').css('letter-spacing',(letterSpa ? letterSpa :'normal'));
	$('span').css('letter-spacing',(letterSpa ? letterSpa :'normal'));
	$('label').css('letter-spacing',(letterSpa ? letterSpa :'normal'));
	$('ul').css('letter-spacing',(letterSpa ? letterSpa :'normal'));
}
function lineHeightCustom(betweenInter){
	$('.gos').css('line-height',(betweenInter ? betweenInter : 1));
	$('.tab-content-first').css('line-height',(betweenInter ? betweenInter : 1));
	$('.podpis').css('line-height',(betweenInter ? betweenInter : 1));
	$('.button-fast-dostup-text').css('line-height',(betweenInter ? betweenInter : 1));
	$('.pod-question-label-text').css('line-height',(betweenInter ? betweenInter : 1));
}
function imgVisibleCustom(imgVis){
	$('.img_1').css('opacity',(imgVis ? imgVis : '1'));
	$('.director').css('opacity',(imgVis ? imgVis : '1'));
	$('.img_slider').css('opacity',(imgVis ? imgVis : '1'));
}

function customStyle(){
	if(myData1.display == 'active'){
		$('.conteiner-for-visually-impaired').toggleClass('active');
		customObject.display = "active";
		//fontSize
			fontSizeCustom(myData1.fontSize);
		//*
		//font
			fontFamilyCustom(myData1.font);
		//*
		//checkBoxInterval
			letterSpacingCustom(myData1.checkboxInterval);
		//*
		//betweenInterval
			lineHeightCustom(myData1.betweenInterval);
		//*
		//colorSite
			//White-Black
				if(myData1.colorSite1 == 'white' && myData1.colorSite2 == 'black'){
					colorSiteCustom(myData1.colorSite1, myData1.colorSite2);
				}
			//*
			//Black-White
				else if(myData1.colorSite1 == 'black' && myData1.colorSite2 == 'white'){
					colorSiteCustom(myData1.colorSite1, myData1.colorSite2);
				}
			//*
			//Blue-Black
				else if(myData1.colorSite1 == '#42b0ff' && myData1.colorSite2 == 'black'){
					colorSiteCustom(myData1.colorSite1, myData1.colorSite2);
				}
			//*
			//Sand-Black
				else if(myData1.colorSite1 == '#fceea7' && myData1.colorSite2 == 'black'){
					colorSiteCustom(myData1.colorSite1, myData1.colorSite2);
				}
			//*

		//*
		//switch
			$('.switch-btn').toggleClass('switch-on');
			if(myData1.checkboxInterval == '.1rem'){
				$('.switch-btn').trigger('on.switch');
			}
			else if(myData1.checkboxInterval == 'normal'){
				$('.switch-btn.switch-on').toggleClass('switch-on');
				$('.switch-btn').trigger('off.switch');
			}

			$('.switch-btn2').toggleClass('switch-on2');
			if(myData1.imgVisible == '1'){
				$('.switch-btn2').trigger('on.switch');
				$('.logo').css('display','block');
			}
			else if(myData1.imgVisible == '0'){
				$('.switch-btn2.switch-on2').toggleClass('switch-on2');
				$('.switch-btn2').trigger('off.switch');
				$('.logo').css('display','none');
			}
		//*
		//imgVisible
			imgVisibleCustom(myData1.imgVisible);
		//*
		//forVisuallyImpairedBtn
			$('.for-visually-impaired').css("display","none");
		//*
		//conteinerForVisuallyImpaired.active
			$('.conteiner-for-visually-impaired.active').css("display","block");
			$('.classic-site-version-btn').css("display","block");
		//

		ajaxSend();
	}
	else if (myData1.display == 'hide'){
		$('.conteiner-for-visually-impaired.active').toggleClass('active');
		customObject.display = "hide";
		fontSizeCustom(16);
		fontFamilyCustom('PT Sans');
		letterSpacingCustom('normal');
		lineHeightCustom(1);
		classicStyleSite();
		imgVisibleCustom('1');
		
		var impairedStyle = $(".for-visually-impaired").prop("style");
		impairedStyle.removeProperty("display");
		$('.conteiner-for-visually-impaired').css("display","none");
		$('.classic-site-version-btn').css("display","none");

		$('.switch-btn.switch-on').toggleClass('switch-on');
		if(!$('.switch-btn.switch-on')){
			$('.switch-btn').trigger('of.switch');
		}
		$('.switch-btn2').toggleClass('switch-on2');
		if(!$('.switch-btn2.switch-on')){
			$('.switch-btn2').trigger('on.switch');
		}
	}
}

function classicStyleSite(){
	$('.header-top-left').removeAttr("style");
	$('.container-nav-menu').removeAttr("style");
	$('.tab label').removeAttr("style");
	$('.tab-1 label').removeAttr("style");
	$('.icon-fast-dostup').removeAttr("style");
	$('.first-icon').removeAttr("style");
	$('main').removeAttr("style");
	$('footer').removeAttr("style");
	$('.tab-content_1').removeAttr("style");
	$('.main_part_header').removeAttr("style");
	$('.wrapper').removeAttr("style");
	$('.wrapper slider__item').removeAttr("style");
	$('.fast_icon_dostup').removeAttr("style");
	$('.Wrapper').removeAttr("style");
	$('.news p').removeAttr("style");
	$('.our-contakt').removeAttr("style");
	$('.contakt-DONM').removeAttr("style");
	$('.for-down-footer').removeAttr("style");
	$('.logo-otdel-1').removeAttr("style");
	$('.contakt-label p').removeAttr("style");
	$('#contakt').removeAttr("style");
	$('.Slider').removeAttr("style");
	$('.Wrapper').removeAttr("style");
	$('.question-label-text').removeAttr("style");
	$('.wRapper').removeAttr("style");
	$('.question').removeAttr("style");
	$('.body').removeAttr("style");
	$('.contakt').removeAttr("style");
	$('.down-footer').removeAttr("style");
	$('.header-top-left').removeAttr("style");
	$('label').removeAttr("style");
	$('.logo-otdel').removeAttr("style");
	$('logo-otdel-1').removeAttr("style");
	$('p').removeAttr("style");
	$('.tab-content').removeAttr("style");
	$('.adres p').removeAttr("style");
	$('.rezim_work p').removeAttr("style");
	$('.phone p').removeAttr("style");
	$('.menu').removeAttr("style");
	$('.logo').removeAttr('style');
}




$(document).ready(function() {
	console.log(myData1);
	console.log(myData1.fontSize);
	customStyle();
	$('.font-size-small').click(function(event){
		replaceClass("html", "hfont-size-midle", "hfont-size-large","", "hfont-size-small");

		fontSizeCustom(16);
		customObject.fontSize = 16;
		ajaxSend();
		
	});
	$('.font-size-midle').click(function(event){
		replaceClass("html", "hfont-size-small", "hfont-size-large","", "hfont-size-midle");
		fontSizeCustom(18);
		customObject.fontSize = 18;
		ajaxSend();
		
	});
	$('.font-size-large').click(function(event){
		replaceClass("html", "hfont-size-small", "hfont-size-midle","", "hfont-size-large");
		fontSizeCustom(20);
		customObject.fontSize = 20;
		ajaxSend();
	});

	

	$('.font-classic').click(function(event){
		replaceClass("html", "hfont-times-new","","","hfont-classic");
		fontFamilyCustom('PT Sans');
		customObject.font = 'PT Sans';
		ajaxSend();
	});

	$('.font-times-new').click(function(event){
		replaceClass("html", "hfont-classic", "","", "hfont-times-new");
		fontFamilyCustom('Times New Roman');
		customObject.font = 'Times New Roman';
		ajaxSend();
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
			$(this).trigger('on.switch');
		} else {
			$(this).trigger('off.switch');
		}
	});
	$('.switch-btn').on('on.switch', function () {
		replaceClass("html", "hcheckbox-interval-f", "","", "hcheckbox-interval-t");
		letterSpacingCustom('.1rem')
		customObject.checkboxInterval = '.1rem';
		ajaxSend();
	});
	$('.switch-btn').on('off.switch', function () {
		replaceClass("html", "hcheckbox-interval-t", "","", "hcheckbox-interval-f");
		letterSpacingCustom('normal')
		customObject.checkboxInterval = 'normal';
		ajaxSend();
	});

	$('.switch-btn2').on('on.switch', function () {
		replaceClass("html", "hcheckbox-img-f", "","", "hcheckbox-img-t");
		imgVisibleCustom('1');
		$('.logo').css('display','block');
		customObject.imgVisible = '1';
		ajaxSend();
	});
	$('.switch-btn2').on('off.switch', function () {
		replaceClass("html", "hcheckbox-img-t", "","", "hcheckbox-img-f");
		imgVisibleCustom('0');
		$('.logo').css('display','none');
		customObject.imgVisible = '0';
		ajaxSend();
	});


	$('.between-interval-small').click(function(event){
		replaceClass("html", "hbetween-interval-midle", "hbetween-interval-large","", "hbetween-interval-small");	
		lineHeightCustom(1);
		customObject.betweenInterval = 1;
		ajaxSend();
	});
	$('.between-interval-midle').click(function(event){
		replaceClass("html", "hbetween-interval-small", "hbetween-interval-large","", "hbetween-interval-midle");
		lineHeightCustom(1.4);
		customObject.betweenInterval = 1.4;
		ajaxSend();
	});
	$('.between-interval-large').click(function(event){
		replaceClass("html", "hbetween-interval-small", "hbetween-interval-midle","", "hbetween-interval-large");
		lineHeightCustom(1.8);
		customObject.betweenInterval = 1.8;
		ajaxSend();
	});



	$('.color-site-white-black').click(function(event){
		replaceClass("html", "hcolor-site-black-white", "hcolor-site-blue-black","hcolor-site-sand-black", "hcolor-site-white-black");
		colorSiteCustom('white','black');
		customObject.colorSite1 = 'white';
		customObject.colorSite2 = 'black';
		ajaxSend();
	});
	$('.color-site-black-white').click(function(event){
		replaceClass("html", "hcolor-site-white-black", "hcolor-site-blue-black","hcolor-site-sand-black", "hcolor-site-black-white");
		colorSiteCustom('black','white');
		customObject.colorSite1 = 'black';
		customObject.colorSite2 = 'white';
		ajaxSend();
	});
	$('.color-site-blue-black').click(function(event){
		replaceClass("html", "hcolor-site-white-black", "hcolor-site-black-white","hcolor-site-sand-black", "hcolor-site-blue-black");
		colorSiteCustom('#42b0ff','black');
		customObject.colorSite1 = '#42b0ff';
		customObject.colorSite2 = 'black';
		ajaxSend();
	});
	$('.color-site-sand-black').click(function(event){
		replaceClass("html", "hcolor-site-white-black", "hcolor-site-black-white","hcolor-site-blue-black", "hcolor-site-sand-black");
		colorSiteCustom('#fceea7','black');
		customObject.colorSite1 = '#fceea7';
		customObject.colorSite2 = 'black';
		ajaxSend();
	});





	
});
$(document).on('click','.for-visually-impaired', function(){
	$('.conteiner-for-visually-impaired').toggleClass('active');
	// customStyle();
	var VisuallyImpaired = document.querySelector('.conteiner-for-visually-impaired.active');
	if(VisuallyImpaired){
		$('.for-visually-impaired').css("display","none");
		$('.classic-site-version-btn').css("display","block");
		$('.conteiner-for-visually-impaired.active').css("display","block");
		customObject.display = "active";
		fontSizeCustom(myData1.fontSize);
		fontFamilyCustom(myData1.font);
		letterSpacingCustom(myData1.checkboxInterval);
		lineHeightCustom(myData1.betweenInterval);	
		colorSiteCustom(myData1.colorSite1, myData1.colorSite2);
		ajaxSend();
	}
	
	
	
});
$(document).on('click','.classic-site-version-btn', function(){
	console.log('cl');
	$('.conteiner-for-visually-impaired.active').toggleClass('active');
	$('.conteiner-for-visually-impaired').css("display","none");
	$('.classic-site-version-btn').css("display","none");
	fontSizeCustom(16);
	fontFamilyCustom('PT Sans');
	letterSpacingCustom('normal');
	lineHeightCustom(1);
	classicStyleSite();
	imgVisibleCustom('1');
	var impairedStyle = $(".for-visually-impaired").prop("style");
		impairedStyle.removeProperty("display");
	var impairedStyle = $(".button-down-footer .for-visually-impaired").prop("style");
		impairedStyle.removeProperty("display");
	$('html').removeClass();
	customObject.fontSize = 16;
	customObject.display = "hide";
	customObject.font ='PT Sans';
	customObject.checkboxInterval= 'normal';
	customObject.betweenInterval = 1;
	customObject.colorSite1 = 'white';
	customObject.colorSite2 ='black';
	customObject.imgVisible = '1';
	ajaxSend();
	
});