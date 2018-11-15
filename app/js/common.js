$(function() {

	
	$('#js-main-slider').owlCarousel({
		items: 1,
		loop: true,
		nav: true,
		navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		dots: false
	});

	$('#js-key-doctors').owlCarousel({
		items: 3,
		margin: 25,
		loop: true,
		nav: false,
		dots: true,
		responsive: {
			0:    { items:1 },
			768:  { items:2 },
			992:  { items:3 },
		}
	});


});