$(document).ready(function(){

	var owl = $('.owl-carousel');
	/**
	 * Owl Carousel object configuration
	 */
	owl.owlCarousel({
		items: 1,
		dots: true,
		autoplayHoverPause: true,
		animateOut: 'bounceOutUp',
		animateIn: 'bounceInUp',
		mouseDrag: false
	});

	/**
	 * Owl Carousel event when using the mousewheel
	 */
	/*owl.on('mousewheel', '.owl-stage', function(e){
		if (e.deltaY>0) {
			owl.trigger('next.owl');
		} else {
			owl.trigger('prev.owl');
		}
		e.preventDefault();
	});*/


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

	$('.slide.one .desc').css({
		top: '20%'
	});

	/**
	 * Adding animation to content when scrolling
	 */
	$(window).scroll(function() {
		// Home slide after 5px scroll
		if ( $(document).scrollTop() > 5 ){
            $('.slide.one .slide-info').css({
				bottom: '30%',
				opacity: 1
			});
			$('.slide.one .desc').css({
				top: '40%'
			});
        } else {
			$('.slide.one .slide-info').css({
				bottom: '-15%',
				opacity: 0
			});
			$('.slide.one .desc').css({
				top: '20%'
			});
		}

		// Home animation to content when scrolling

		if( $(document).scrollTop() > 650 ){
			$('.slide.two .slide-info').css({
				bottom: '20%',
				opacity: 1
			});
		} else {
			$('.slide.two .slide-info').css({
				bottom: '0',
				opacity: 0
			});
		}

        if ( $(document).scrollTop() > 100 ){
            $('.content.servicios').css({
				top: '50%'
			});
        }
        else {
           $('.content.servicios').css({
				top: '100%'
		   });
		}
		
		if( $(document).scrollTop() > 100 ){
			$('.content.quienes-somos').css({
				top: '50%'
			});
		} else {
			$('.content.quienes-somos').css({
				top: '100%'
			});
		}

		if( $(document).scrollTop() > 100 ){
			$('.content.nosotros').css({
				top: '50%'
			});
		} else {
			$('.content.nosotros').css({
				top: '100%'
			});
		}

		if( $(document).scrollTop() > 100 ){
			$('.content.clientes').css({
				top: '50%'
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

	$('.cover.servicios, .cover.quienes-somos, .cover.nosotros, .cover.clientes, .cover.contacto, .cover.noticias, .slide.one, .slide.two').mousemove( function(e){
		var width = $(this).innerWidth();
		var height = $(this).innerHeight();
		var newValueX = (e.pageX / width) * pixelToMove;
		var newValueY = (e.pageY / height) * pixelToMove;
		$(this).css('background-position', newValueX + '%' + ' ' + newValueY + '%');
	});



});