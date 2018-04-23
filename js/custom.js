$(document).ready(function(){
	/**
	 * Navegación por medio de id's con animación
	 */
	$('a[href*=\\#]:not([href=\\#])').click(function() {
		$('a').removeClass('selected');
		$(this).addClass('selected');
    	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
       		|| location.hostname == this.hostname) {

		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      	if (target.length) {
       		$('html,body').animate({
       		scrollTop: 200
       		}, 1500);
       		return false;
    		}
		}
	});
	  

	/**
	 * Navegación por medio de id's con animación en sección noticias
	 */
	$('.cover.noticias a[href*=\\#]:not([href=\\#])').click(function() {
		$('a').removeClass('selected');
		$(this).addClass('selected');
    	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
       		|| location.hostname == this.hostname) {

		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      	if (target.length) {
       		$('html,body').animate({
       		scrollTop: target.offset().top
       		}, 1000);
       		return false;
    		}
		}
  	});


	/**
	 * Show / hide menu navigation
	 */
	$('.main-header .menu-toggle, .main-menu .btn-close').click(function(){
		if($('.main-menu').css("margin-right") == "0px"){
		   $('.main-menu').animate({"margin-right": '-=320'});
		} else {
		   $('.main-menu').animate({"margin-right": '+=320'});
		}
	 });

	/**
	 * Open 'post' image in a overlay
	 */
	$('.posts ul li').each( function(){
		var _this = this;
		$(_this).find('.post-title').click( function(){
			$(_this).find('.post-opened').css({
				display: 'block'
			});

		});
	});

	/**
	 * Close 'post' image
	 */
	$('.post-opened .btn-close').click( function(){
		$('.post-opened').css({
			display: 'none'
		})
	});


	/**
	 * Function to add a slide effect on h2 titles on intern views
	 */
	$('.cover h2').css({
		'margin-top': '30px',
		opacity: 1
	});

	/**
	 * Adding animation to content when scrolling
	 */
	$(window).scroll(function() {
        if ( $(document).scrollTop() > 100 ){
            $('.content.servicios').css({
				top: '30%'
			});
        }
        else {
           $('.content.servicios').css({
				top: '100%'
		   });
		}
		
		if( $(document).scrollTop() > 100 ){
			$('.content.quienes-somos').css({
				top: '40%'
			});
		} else {
			$('.content.quienes-somos').css({
				top: '100%'
			});
		}

		// Animate when scrolling - por qué nosotros
		if( $(document).scrollTop() > 80 ){
			$('.content.nosotros').css({
				top: '36%'
			});
		} else {
			$('.content.nosotros').css({
				top: '100%'
			});
		}

		if( $(document).scrollTop() > 100 ){
			$('.content.clientes').css({
				top: '35%'
			});
		} else {
			$('.content.clientes').css({
				top: '100%'
			});
		}

		if( $(document).scrollTop() > 100 ){
			$('.content.contacto').css({
				top: '50%'
			});
		} else {
			$('.content.contacto').css({
				top: '100%'
			});
		}

		if( $(document).scrollTop() > 100 ){
			$('.content.noticias').css({
				top: '50%'
			});
		} else {
			$('.content.noticias').css({
				top: '100%'
			});
		}
	});
	
	/**
	 * Moving background image while mousemove on intern views
	 */
	var pixelToMove = 30;

	$('.cover.servicios, .cover.quienes-somos, .cover.nosotros, .cover.clientes, .cover.contacto, .cover.noticias').mousemove( function(e){
		var width = $(this).innerWidth();
		var height = $(this).innerHeight();
		var newValueX = (e.pageX / width) * pixelToMove;
		var newValueY = (e.pageY / height) * pixelToMove;
		$(this).css('background-position', newValueX + '%' + ' ' + newValueY + '%');
	});




	/**
	 * Module: Home
	 * Description: Slide to 1st content on home
	 */
	$('.btn-slide-one').click(function() {
		$('.btn-slide-two').removeClass('active');
		$(this).addClass('active');
		$('html, body').animate({
			scrollTop: $(".slide.one").offset().top
		}, 2000);
		return false;
	});
	
	/**
	 * Module: Home
	 * Description: Slide to 2nd content on home
	 */
	$('.btn-slide-two').click(function() {
		$('.btn-slide-one').removeClass('active');
		$(this).addClass('active');
		$('html, body').animate({
			scrollTop: $(".slide.two").offset().top
		}, 2000);
		return false;
	});

	/**
	 * Module: Home
	 * Description: Animate paragraph content on slide one
	 */
	$('.slide.one > p').css({
		opacity: 1,
		top: '300px'
	});

	/**
	 * Module: Home
	 * Description: Animate content on slide one when scrolling
	 */
	$(window).scroll( function(){
		if ( $(document).scrollTop() > 20 ){
			$('.slide.one ul').css({
				bottom: '30%',
				opacity: 1
			});
		} else {
			$('.slide.one ul').css({
				bottom: '0',
				opacity: 0
			});
		}
	});

	/**
	 * Module: Home
	 * Description: Scroll when clicking scroll button on slide one 
	 */
	$('.slide.one .btn-scroll').click( function(){
		$('html, body').animate({
			scrollTop: 130 
		}, 1000);
	});

	$('.slide.two .btn-scroll').click( function(){
		$('html, body').animate({
			scrollTop: 1000
		}, 1000);
	});

	$(window).scroll( function(){
		if( $(document).scrollTop() > 950 ){
			$('.slide.two ul').css({
				bottom: '0%',
				opacity: 1
			});
		} else {
			$('.slide.two ul').css({
				bottom: '-50%',
				opacity: 0
			});
		}
	});


});