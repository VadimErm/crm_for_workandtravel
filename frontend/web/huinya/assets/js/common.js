$(document).ready(function(){
	// selecmenu
	$(".select").selectmenu();
	// selecmenu
	$(".select").selectmenu();
	$(".select__nationality").select2();
	// radio
	$(".radio").checkboxradio();
	// datepicker

	var info = $('.welcome__info'),
	    timeoutId;
	$('.link__select-program a').hover(function(){
	    clearTimeout(timeoutId);
	    info.show();
	}, function(){
	    timeoutId = setTimeout($.proxy(info,'hide'), 1000)
	}); 
    $( "#tabs" ).tabs();
	// fullpage scroll
	console.log($('.base-container').fullpage);
	$('.base-container').fullpage({
		scrollingSpeed: 1500,
		easing: 'easeInOutCubic',
    	easingcss3: 'ease',
    	sectionSelector: '.viewport',
    	responsiveWidth: 0,
        responsiveHeight: 0,
        autoScrolling: false,
    	anchors:['WelcomeSection', 'InfoSection']
	});
	//
	$(".toggle-modal").on("click", function(e){
		$("body").toggleClass("open-modal");
	});
	$(".toggle-modal-request").on("click", function(e){
		$("body").toggleClass("open-modal-request");
	});
	$(".toggle-modal-project").on("click", function(e){
		$("body").toggleClass("open-modal-project");
	});
	$("#request").animatedModal({
		modalTarget:'requestModal',
		animatedIn:'fadeInUp',
		animationDuration:'1s'
	});
	$("#bonuses").animatedModal({
		modalTarget:'bonusesModal',
		animatedIn:'fadeInUp',
		animationDuration:'1s'
	});
	$("#project").animatedModal({
		modalTarget:'projectModal',
		animatedIn:'fadeInUp',
		animationDuration:'1s'
	});
	$("#project").animatedModal({
		modalTarget:'projectModal',
		animatedIn:'fadeInUp',
		animationDuration:'1s'
	});
	$("#project").animatedModal({
		modalTarget:'projectModal',
		animatedIn:'fadeInUp',
		animationDuration:'1s'
	});
	$('.bonuses__content_scrolling').slimScroll({
		height: "325px",
	    axis: 'x',
	    wheelStep: 10,
	    railVisible: true
	});
	$('.questionary__content-scroll').slimScroll({
	    railVisible: true,
	    wheelStep: 10
	});

	$('.tabs__content-scroll').slimScroll({
		disableFadeOut: true,
		wheelStep: 10
	});
	$('.info__content-scroll').slimScroll({
		disableFadeOut: true,
		wheelStep: 10
	});
	$('.content__scroll').slimScroll({
		disableFadeOut: true,
		wheelStep: 10
	});
	$('.scroll-projectModal').slimScroll({
		disableFadeOut: true,
		height: 'auto'
	});
	// $('.bonuses__card').slimScroll({
	// 	disableFadeOut: true,
	// 	wheelStep: 10
	// });
	// $('.request__form').slimScroll({
	// 	height: "495px",
	//     wheelStep: 2,
	//     railVisible: true
	// });
	$('.carousel-vertical-min').bxSlider({
	  mode: 'vertical',
	  slideMargin: 10,
	  minSlides: 3
	});
	$(".selectmenu").selectmenu();
	$('.bonuses__card').isotope({
	    layoutMode: 'fitRows',
        itemSelector: '.card'
	});
	// $('.datepicker').pickadate({
	// 	selectYears: true,
 //  		selectMonths: true,
 //  		// Strings and translations
	// 	monthsFull: ['Январь','Февраль','Март','Апрель','Май','Июнь',
	// 	'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
	// 	monthsShort: ['Янв','Фев','Мар','Апр','Май','Июн',
	// 	'Июл','Авг','Сен','Окт','Ноя','Дек'],
	// 	weekdaysFull: ['Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота'],
	// 	weekdaysShort: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
	// 	today: 'Cегодня',
	// 	clear: 'Очистить',
	// 	close: 'Закрыть',
	// 	selectYears: 10,
 //        focusedYear: 1991,
 //        formatSubmit: '/dd/mm/yyyy'
	// });
	$( function() {
	    $( ".datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: "-30:+0",
			closeText: 'Закрыть',
			prevText: '&#x3c;Пред',
			nextText: 'След&#x3e;',
			currentText: 'Сегодня',
			monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
			'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
			monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
			'Июл','Авг','Сен','Окт','Ноя','Дек'],
			dayNames: ['Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота'],
			dayNamesShort: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
			dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
			dateFormat: 'dd.mm.yy'
	    });
  } );
	$(".fancybox-button").fancybox({
		prevEffect: 'none',
		nextEffect: 'none',
		closeBtn: 'none',
		maxWidth: 800,
		maxHeight: 600,
		helpers: {
			title: { type : 'inside' },
			buttons: {}
		}
	});
	// $(".picker__select--year").selectmenu();
	// $(".picker__select--month").selectmenu();
});
$(window).on('load', function() { 
	$('.preloader__status').fadeOut();
	$('.preloader').delay(400).fadeOut('slow');
});
