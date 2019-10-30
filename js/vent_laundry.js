jQuery(function($) {
	'use strict';
	$.scrollTo(0);
	$('.scrollTop').click(function(event) {
		// console.log('clicked');
		$.scrollTo($('body'), 500);
		event.preventDefault();
	});
	$(window).scroll(function(event) {
		/* Act on the event */

		if ($(this).scrollTop() > 300) {
			$('.scrollTop').fadeIn('300', function() {});
		} else {
			$('.scrollTop').fadeOut('300', function() {});
		}
	});
});
