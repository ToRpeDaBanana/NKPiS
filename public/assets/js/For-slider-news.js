$(document).ready(function(){
	$('.Slider').slick({
		adaptiveWidth: true,
		adaptiveHeight: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		dots:true,
		infinite:false,
		// centerMode:true,
		responsive: [
		{
			breakpoint: 1640,
			settings: {
			 slidesToShow: 2,
	         slidesToScroll: 1,

			}
		},
	    {
	      breakpoint: 1300,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        arrows: false
	      }
	    },
	    {
	    	breakpoint: 1150,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        arrows: false

	      }
	    },
	    {
	    	breakpoint: 600,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        arrows: false
	      }
	    }

    ]
	});
});