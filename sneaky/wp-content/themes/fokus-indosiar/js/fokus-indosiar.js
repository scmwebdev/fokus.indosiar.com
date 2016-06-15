/* Fokus Indosiar JS */

(function($) {
	
	FastClick.attach(document.body); //instantiate fastclick

	$(document).ready(function() {
		console.log('Spirit Dreams Inside');

		$('.menu-trigger').click(function() {
			$('body').toggleClass('menu-active');
		});

		/** main banner controller ************ **/
		$('.content-theatre:first-child').addClass('active');
		$('#frontpage-header-gallery .item-post__thumbnail').click(function() {
			var thumb_id = $(this).attr('data-postid');
			var target = $('.content-theatre');
			target.removeClass('active');
			$('.content-theatre[data-postid='+ thumb_id +']').addClass('active');
		});
		/** ./main banner controller ************ **/
	});

})(jQuery);