$(document).ready(function() {

	// Sticky nav
	$(document).scroll(function	() {

		if ( jQuery(this).scrollTop() > 130 ) {
			jQuery('.main-menu').addClass('is-fixed');
			jQuery('.section-title,.next-event').addClass('added-margin');
		}
		else {
			jQuery('.main-menu').removeClass('is-fixed');
			jQuery('.section-title,.next-event').removeClass('added-margin');
		}
	});

});

