
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
	imgVisible: 'block',
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
		"background-color": color1,
		"border": `1px solid ${color2}`,
 	}

	//  {'background-color':(color1 ? color1 : 'white'), 'border':"1px solid"+(color2 ? color2 : 'black')}
	$('.header-top-left').css(cssColor);
	$('.main_part_header').css({'background-color':(color1 ? color1 : 'white'), 'border-bottom':'1px solid'+(color2 ? color2 : 'black')});
	$('.wrapper').css({'background-color':(color1 ? color1 : 'white'), 'border':'1px solid'+(color2 ? color2 : 'black')});
	$('.fast_icon_dostup').css({'background-color':(color1 ? color1 : 'white'), 'border':'1px solid'+(color2 ? color2 : 'black')});
	$('.Wrapper').css({'background-color':(color1 ? color1 : 'white'), 'border':'1px solid'+(color2 ? color2 : 'black')});
	$('.wRapper').css({'background-color':(color1 ? color1 : 'white'), 'border':'1px solid'+(color2 ? color2 : 'black')});
	$('.question').css({'background-color':(color1 ? color1 : 'white'), 'border':'1px solid'+(color2 ? color2 : 'black')});
	$('.body').css({'background-color':(color1 ? color1 : 'white'), 'border-top':'1px solid'+(color2 ? color2 : 'black'), 'boreder-bottom':'1px solid'+(color2 ? color2 : 'black')});
	$('.contakt').css({'background-color':(color1 ? color1 : 'white'), 'border':'1px solid'+(color2 ? color2 : 'black')});
	$('.down-footer').css({'background-color':(color1 ? color1 : 'white'), 'border-top':'1px solid'+(color2 ? color2 : 'black')});
	$('.header-top-left').css({'background-color':(color1 ? color1 : 'white'), 'border':'1px solid'+(color2 ? color2 : 'black')});
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
	$('.logo-otdel').css("font-size",(sizeFont ? sizeFont : 16)+"px");
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
	$('p').css('line-height',(betweenInter ? betweenInter : 1));
	$('a').css('line-height',(betweenInter ? betweenInter : 1));
	$('span').css('line-height',(betweenInter ? betweenInter : 1));
	$('label').css('line-height',(betweenInter ? betweenInter : 1));
	$('ul').css('line-height',(betweenInter ? betweenInter : 1));
}
function imgVisibleCustom(imgVis){
	$('.img_1').css('display',(imgVis ? imgVis : 'block'));
	$('.img_slider').css('display',(imgVis ? imgVis : 'block'));
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
			if(myData1.imgVisible == 'block'){
				$('.switch-btn2').trigger('on.switch');
			}
			else if(myData1.imgVisible == 'none'){
				$('.switch-btn2.switch-on2').toggleClass('switch-on2');
				$('.switch-btn2').trigger('off.switch');
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
		colorSiteCustom('white','black')
		imgVisibleCustom('block');
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
		imgVisibleCustom('block');
		customObject.imgVisible = 'block';
		ajaxSend();
	});
	$('.switch-btn2').on('off.switch', function () {
		replaceClass("html", "hcheckbox-img-t", "","", "hcheckbox-img-f");
		imgVisibleCustom('none');
		customObject.imgVisible = 'none';
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
	var VisuallyImpaired = document.querySelector('.conteiner-for-visually-impaired.active');
	if(VisuallyImpaired){
		$('.for-visually-impaired').css("display","none");
		$('.classic-site-version-btn').css("display","block");
		$('.conteiner-for-visually-impaired.active').css("display","block");
		customObject.display = "active";
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
	colorSiteCustom('white','black')
	imgVisibleCustom('block');
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
	customObject.imgVisible = 'block';
	ajaxSend();
	
});