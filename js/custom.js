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

	/**
	 * Adding animation to content when scrolling
	 */
	$(window).scroll(function() {
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



});