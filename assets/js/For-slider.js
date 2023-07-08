$(document).ready(function () {
	$('.slider').slick({
		dots:true,
		adaptiveHeight:true,
		adaptiveWidth:true,
		arrows: true,
		autoplay:true,
		autoplaySpeed: 6000,
		responsive: [
		{
			breakpoint: 850,
			settings: {
			 arrows:false
			}
		}

    ]
	});
});