$(function() {

	// Отступ от шапки
	var mainHeader = $('.js-main-header').outerHeight();
	$('.js-main-content-layour').css('margin-top', mainHeader);


	// шапка при скролле
	function resizeMainHeader() {
		var scrollTopNum = $(window).scrollTop();

		if ($(window).width() >= 768) {

			if (scrollTopNum > 0) {
				$('.hidden-scroll').each(function() {
					$(this).addClass('js-hidden-scroll');
				});
				$('.main-logo-col').addClass('js-main-logo-col');
				$('.quick-links-col').addClass('js-quick-links-col');
				$('.main-nav').addClass('margin-top-null');
				$('.go-call').addClass('margin-top-null');
				$('.main-header__row').addClass('flex-align-items-vertica-center');
			} 
			else if (scrollTopNum == 0) {
				$('.hidden-scroll').each(function() {
					$(this).removeClass('js-hidden-scroll');
				});
				$('.main-logo-col').removeClass('js-main-logo-col');
				$('.quick-links-col').removeClass('js-quick-links-col');
				$('.main-nav').removeClass('margin-top-null');
				$('.go-call').removeClass('margin-top-null');
				$('.main-header__row').removeClass('flex-align-items-vertica-center');
			}	
		}
	}

	resizeMainHeader();

	// Слайдера
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


	// Код при скролле страницы
	$(window).scroll(function() {
		resizeMainHeader();
	});


});