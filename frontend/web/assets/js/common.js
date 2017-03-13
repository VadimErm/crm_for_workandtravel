$(window).on('load', function() { 
	$('.preloader__status').fadeOut();
	$('.preloader').delay(400).fadeOut('slow');
});



$(document).ready(function(){

	function heightDetect() {
		$(".section").css("height", $(window).height());
	};
	heightDetect();
	$(window).resize(function() {
		heightDetect();
	});
	
	// selecmenu
	// $(".select").selectmenu();
	// selecmenu
	$(".select").selectmenu();
	$(".select__nationality").select2();
	// radio
	$(".radio").checkboxradio();
	// datepicker
	// var $container = $('.program__list');
	//   $container.masonry({
	//     itemSelector: '.program__item',
	//     percentPosition: true,
	//     gutter: 20
	// });

	var info = $('.welcome__info'),
	    timeoutId;
	$('.link__select-program a').hover(function(){
	    clearTimeout(timeoutId);
	    info.show();
	}, function(){
	    timeoutId = setTimeout($.proxy(info,'hide'), 1000)
	}); 
    //$( "#tabs" ).tabs();//ae
	// $('.birds').parallax();
	$(".toggle-modal").on("click", function(e){
		$("body").toggleClass("open-modal");
	});
	/*$(".toggle-modal-manager").on("click", function(e){
		$("body").toggleClass("open-modal-manager");
	});*/
	/*$(".toggle-modal-authorization").on("click", function(e){
		$("body").toggleClass("open-modal-authorization");
	});*/
	$(".toggle-modal-offers").on("click", function(e){
		$("body").toggleClass("open-modal-offers");
	});
	/*$(".toggle-modal-request").on("click", function(e){
		$("body").toggleClass("open-modal-request");
	});*/
	/*$(".toggle-modal-bonuses").on("click", function(e){
		$("body").toggleClass("open-modal-bonuses");
	})*/
	$(".toggle-modal-project").on("click", function(e){
		$("body").toggleClass("open-modal-project");
	});
	$(".toggle-modal-program").on("click", function(e){
		$("body").toggleClass("open-modal-program");
	});
	/*$(".toggle-modal-subscription").on("click", function(e){
		$("body").toggleClass("open-modal-subscription");
	});*/
	$(".toggle-additional-page").on("click", function(e){
		$("body").toggleClass("open-additional-page");
	});
	$(".toggleSearch").on("click", function(e){
		$(".mobile-navbar-search__form").toggleClass("collapsedSearch");
	});
	$("#program").animatedModal({
		modalTarget:'programModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	/*$("#request").animatedModal({
		modalTarget:'requestModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#request01").animatedModal({
		modalTarget:'requestModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});*/
	/*$("#bonuses").animatedModal({
		modalTarget:'bonusesModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#bonuses01").animatedModal({
		beforeOpen: function(){
		 $('.toggleMenu').trigger('click');
		},
		modalTarget:'bonusesModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#contact-manager").animatedModal({
		beforeOpen: function(){
		 $('.close-bonusesModal').trigger('click');
		},
		modalTarget:'managerModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});*/
	$("#contact-manager02").animatedModal({
		beforeOpen: function(){
		 $('.close-bonusesModal').trigger('click');
		},
		modalTarget:'managerModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#contact-manager03").animatedModal({
		beforeOpen: function(){
		 $('.close-bonusesModal').trigger('click');
		},
		modalTarget:'managerModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#contact-manager03").animatedModal({
		beforeOpen: function(){
		 $('.close-bonusesModal').trigger('click');
		},
		modalTarget:'managerModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#contact-manager04").animatedModal({
		beforeOpen: function(){
		 $('.close-bonusesModal').trigger('click');
		},
		modalTarget:'managerModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#contact-manager05").animatedModal({
		modalTarget: 'managerModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	/*$("#authorization").animatedModal({
		modalTarget:'authorizationModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});*/
	$("#project01").animatedModal({
		modalTarget:'projectModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#project02").animatedModal({
		modalTarget:'projectModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1'
	});
	$("#project03").animatedModal({
		modalTarget:'projectModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#project04").animatedModal({
		modalTarget:'projectModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#project05").animatedModal({
		modalTarget:'projectModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#project06").animatedModal({
		modalTarget:'projectModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#project07").animatedModal({
		modalTarget:'projectModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#additional-pages01").animatedModal({
		modalTarget:'pagesModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	// HISTORY
	$("#history").animatedModal({
		modalTarget: 'historyModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#history02").animatedModal({
		beforeOpen: function(){
		 $('.close-contactModal').trigger('click');
		 $('.close-partnerModal').trigger('click');
		},
		modalTarget: 'historyModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#history03").animatedModal({
		beforeOpen: function(){
		 $('.close-contactModal').trigger('click');
		 $('.close-partnerModal').trigger('click');
		},
		modalTarget: 'historyModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#history04").animatedModal({
		beforeOpen: function(){
		 $('.close-contactModal').trigger('click');
		 $('.close-partnerModal').trigger('click');
		},
		modalTarget: 'historyModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#history05").animatedModal({
		beforeOpen: function(){
		 $('.close-contactModal').trigger('click');
		 $('.close-partnerModal').trigger('click');
		},
		modalTarget: 'historyModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	// CONTACT
	$("#contact").animatedModal({
		modalTarget: 'contactModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#contact02").animatedModal({
		beforeOpen: function(){
		 $('.close-historyModal').trigger('click');
		 $('.close-partnerModal').trigger('click');
		},
		modalTarget: 'contactModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#contact03").animatedModal({
		beforeOpen: function(){
		 $('.close-historyModal').trigger('click');
		 $('.close-partnerModal').trigger('click');
		},
		modalTarget: 'contactModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#contact04").animatedModal({
		beforeOpen: function(){
		 $('.close-historyModal').trigger('click');
		 $('.close-partnerModal').trigger('click');
		},
		modalTarget: 'contactModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#contact05").animatedModal({
		beforeOpen: function(){
		 $('.close-historyModal').trigger('click');
		 $('.close-partnerModal').trigger('click');
		},
		modalTarget: 'contactModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});

	// PARTNER
	$("#partner").animatedModal({
		modalTarget: 'partnerModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#partner02").animatedModal({
		beforeOpen: function(){
		 $('.close-historyModal').trigger('click');
		 $('.close-contactModal').trigger('click');
		},
		modalTarget: 'partnerModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#partner03").animatedModal({
		beforeOpen: function(){
		 $('.close-historyModal').trigger('click');
		 $('.close-contactModal').trigger('click');
		},
		modalTarget: 'partnerModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#partner04").animatedModal({
		 beforeOpen: function(){
		 $('.close-historyModal').trigger('click');
		 $('.close-contactModal').trigger('click');
		},
		modalTarget: 'partnerModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#partner05").animatedModal({
		beforeOpen: function(){
		 $('.close-historyModal').trigger('click');
		 $('.close-contactModal').trigger('click');
		},
		modalTarget: 'partnerModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#view-news01").animatedModal({
		modalTarget: 'newsModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#view-news02").animatedModal({
		modalTarget: 'newsModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#view-news03").animatedModal({
		modalTarget: 'newsModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#view-news04").animatedModal({
		modalTarget: 'newsModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#view-news05").animatedModal({
		modalTarget: 'newsModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#view-news06").animatedModal({
		modalTarget: 'newsModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#view-news07").animatedModal({
		modalTarget: 'newsModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#view-news08").animatedModal({
		modalTarget: 'newsModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#view-news09").animatedModal({
		modalTarget: 'newsModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#view-news10").animatedModal({
		modalTarget: 'newsModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	/*$("#subscription").animatedModal({
		modalTarget: 'subscriptionModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	$("#subscription02").animatedModal({
		beforeOpen: function(){
		 $('.close-newsModal').trigger('click');
		},
		modalTarget: 'subscriptionModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});*/
	$("#offers").animatedModal({
		modalTarget: 'offersModal',
		animatedIn:'fadeInUpBig',
		animatedOut:'fadeOutDownBig',
		animationDuration:'1s'
	});
	// bxSlider
	$('.carousel-vertical-min').bxSlider({
		mode: 'vertical',
		slideMargin: 10,
		minSlides: 3
	});
	$('.carousel').bxSlider({
		mode: 'horizontal',
		slideMargin: 10,
		minSlides: 3
	});
	// Selectmenu
	$(".selectmenu").selectmenu();
	$( function() {
	    $( ".datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: "-40:+10",
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
	// $(".toggleMenu").on("click", function(e){
	// 	$(".slideoutMenu").toggleClass("collapseMenu");
	// });
	// fullpage scroll
	// $('.base-container').fullpage({
	// 	autoScrolling: false
	// });
	// Scroll Up
	// $(window).scroll(function(){
	// 	if ($(this).scrollTop() > 100) {
	// 	$('.scrollable-up').fadeIn();
	// 	} else {
	// 	$('.scrollable-up').fadeOut();
	// 	}
	// 	});

	// 	$('.scrollable-up').on('mouseover', function(){
	// 		console.log("vcbhghfg");
	// 		window.scroolTo(0, 0);
	// 		return false;
	// 	});
	// 	// $('.btn-offset-up').on('mousedown', function(){
	// 	// 	return false;
	// 	// }
	// 	$('.scrollable-up').click(function(){
	// 		window.scroolTo(0, 0);
	// 	$("html, body").animate({ scrollTop: 0 }, 600);
	// 	document.querySelector("body").scroot
	// 	return false;
	// });

	 $('.scrollable-content').scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.btn-offset-up').fadeIn();
        } else {
            $('.btn-offset-up').fadeOut();
        }
    });
    $('.btn-offset-up').click(function () {
        $('.scrollable-content').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
    $('.scrollableContent').scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.btn-offset-up').fadeIn();
        } else {
            $('.btn-offset-up').fadeOut();
        }
    });
    $('.btn-offset-up').click(function () {
        $('.scrollableContent').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
    // questionary__content_scroll 
	$('.questionary__content_scroll').scroll(function () {
      if ($(this).scrollTop() > 1) {
            $('.ui-datepicker').fadeOut();
      };

    });
    $('.questionary__content_scroll').scroll(function () {
      if ($(this).scrollTop() > 1) {
            $('.ui-datepicker').fadeOut();
      };

    });
     $('.scrollableContent').scroll(function () {
      if ($(this).scrollTop() > 10) {
           $('.sideleft-fixed')
      };

    });
    /*$("#remember-me").checkboxradio();*/
});


