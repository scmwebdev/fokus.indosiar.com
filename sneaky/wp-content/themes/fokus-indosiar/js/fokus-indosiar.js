/* Fokus Indosiar JS */

(function($) {

	$(document).ready(function() {
		console.log('flower');

		$('.menu-trigger').click(function() {
			$('body').toggleClass('menu-active');
		});

	});

})(jQuery);