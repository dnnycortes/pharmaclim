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
	 * Adding animation to content when scrolling
	 */
	$(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
            $('.content.servicios').css({
				top: '50%'
			});
        }
        else {
           $('.content.servicios').css({
				top: '100%'
		   });
        }
    });



});