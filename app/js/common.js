$(function() {


	$('#js-mobile-menu-btn').click(function(e) {
		e.preventDefault();

		$(this).toggleClass('mobile-menu-btn__link-active');
		var menu = $('.main-nav');
		
		if ( menu.hasClass('main-mobile') ) {
			menu.removeClass('main-mobile');
		}
		else {
			menu.addClass('main-mobile');
		}
	});

	function goMarginHeader() {
		// Отступ от шапки основного контента
		var mainHeader = $('.js-main-header').outerHeight();
		$('.js-main-content-layour').css('margin-top', mainHeader);


		// отступ от меню odoo
		if ( $("nav").is("#oe_main_menu_navbar") ) {
			userBlock = $('#oe_main_menu_navbar').outerHeight();
			$('#main-header').css('top', userBlock);
			$('#js-main-content-layour').css('margin-top', 0);
		}
	}
	
	goMarginHeader();

	

	
	// Изменение шапки при скролле
	function resizeMainHeader() {
		var scrollTopNum = $(window).scrollTop();

		if ($(window).width() >= 768) {

			if (scrollTopNum > 0) {
				$('.hidden-scroll').each(function() {
					$(this).addClass('js-hidden-scroll');
				});
				$('.main-logo-col').addClass('js-main-logo-col');
				$('.header-nav').addClass('js-header-nav-col');
				$('.main-nav').addClass('margin-top-null');
				$('.go-call').addClass('margin-top-null');
				$('.main-header__row').addClass('flex-align-items-vertica-center');
			} 
			else if (scrollTopNum == 0) {
				$('.hidden-scroll').each(function() {
					$(this).removeClass('js-hidden-scroll');
				});
				$('.main-logo-col').removeClass('js-main-logo-col');
				$('.header-nav').removeClass('js-header-nav-col');
				$('.main-nav').removeClass('margin-top-null');
				$('.go-call').removeClass('margin-top-null');
				$('.main-header__row').removeClass('flex-align-items-vertica-center');
			}	
		}
	}

	resizeMainHeader();



	/* Список врачей с поиском */
	var 
		options = { valueNames: [ 'js-doc-list' ]},
		userList = new List('js-search-list', options);
	
	$('#js-search-list-input').on('input keyup', function(e) {

		var checkNumbDocs = $('.doctors-list__nav-list').find('li').length;
		
		if (checkNumbDocs == 0) {
			$('#js-search-clear-list').addClass('doctors-list__search-clear-list-active');

			if ($(window).width() < 768) {
				$('.doctors-list__nav-list').css('height', 'auto');
			}
		} 
		else {
			$('#js-search-clear-list').removeClass('doctors-list__search-clear-list-active');
			
			if ($(window).width() < 768) {
				$('.doctors-list__nav-list').css('height', '150px');
			}
		}
			
	});



	$(".doctors-list__nav-item-disable >a").click(function(e) {
		e.preventDefault;
		return false;
	})
	/* Список врачей с поиском */



	// Основной слайдер на главной странице
	$('#js-main-slider').owlCarousel({
		items: 1,
		loop: true,
		nav: true,
		navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		dots: false
	});


	// Слайдер ведущие врачи на главной страницы
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

	

	// Код при изменение размера  страницы
	$(window).resize(function() {
		goMarginHeader();
	});


	 var mask_phone_option = {
        onComplete: function (cep) {
            $('div.confirm_sms').show("slow");
        },
        onChange: function (cep) {
            var count = $('#phone').cleanVal().length;
            if (count < 11) {
                $('div.confirm_sms').hide("slow");
                $('#confirm_phone').val("");
            }
        }
    };
    $('#phone').mask('+0000-000-00-00', mask_phone_option, {placeholder: "+7 (800)-800-80-80"});
    $('#checkPhoneModal').on('show.bs.modal', function () {
        odoo.define('drnow.activate_phone', function (require) {
            'use strict';
            var ajax = require('web.ajax');
            ajax.jsonRpc('/ajax/activate_phone', 'call', {
                'phone': $('#phone').cleanVal(),
            }).always(function (result) {
                var data = JSON.parse(result);
                if ('error' in data){
                	$('#checkPhoneModal .invalid-feedback').text(
                		data.error.message
					).show("slow");
				}
            });
        });
    });
    $('#checkPhoneModal').on('hide.bs.modal', function (e) {
		debugger;
    	$('#checkPhoneModal .invalid-feedback').text("").hide();
    	$('#ConfirmActivateCode').attr('disabled','');
    	$('#sms_code').val("");
    });
    $("#sms_code").keyup(function(){
    	if (($(this).val().length) === 5){
    		$('#ConfirmActivateCode').removeAttr('disabled');
		} else {
    		$('#ConfirmActivateCode').attr('disabled','');
		}
    });
	$('#ConfirmActivateCode').on( "click", function() {
		if($('#sms_code').length !== 5){
            odoo.define('drnow.check_activate_code', function (require) {
                'use strict';
                var ajax = require('web.ajax');
                ajax.jsonRpc('/ajax/check_activate_code', 'call', {
                    'phone': $('#phone').cleanVal(),
                    'code': $('#sms_code').val()
                }).always(function (result) {
                    var data = JSON.parse(result);
                    // Если код активации совпадает
                    if (data.error === 0 ){
                    	$('#checkPhoneModal').modal('hide'); //скрываем форму
						$('#confirm_phone').val("True"); // телефон подтвержден
						$('div.confirm_sms').hide(); // скрываем ссылку на подтверждения
						$('div.field-phone #phone').attr('readonly',''); //readonly номер
						$('div.field-phone .valid-feedback').show("slow");
					} else {
                        $('#checkPhoneModal .invalid-feedback').text(
                            data.message
                        ).show("slow");
					}
                });
            });
		}
	});




});