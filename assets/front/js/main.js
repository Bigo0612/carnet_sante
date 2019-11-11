$(window).load(function() {
	$('.slideheader').flexslider({
	animation: "slide",
	controlNav: false,
	});

	$('body').flowtype({
		minimum : 480,
 		maximum : 1280,
		minFont : 8,
 		maxFont : 16,
		fontRatio: 60,
	});
});
