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


});