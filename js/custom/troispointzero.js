$(document).ready(function() {

	// Sticky nav
	$(document).scroll(function	() {

		if ( $(this).scrollTop() > 130 ) {
			$('.main-menu').addClass('is-fixed');
			$('.section-title,.next-event').addClass('added-margin');
		}
		else {
			$('.main-menu').removeClass('is-fixed');
			$('.section-title,.next-event').removeClass('added-margin');
		}
	});

	$(document).scroll(function() { 

		if ( $(this).scrollTop() > 900 ) {
			$('#back-to-top').fadeIn('fast');
		}
		else {
			$('#back-to-top').fadeOut('fast');
		}

	});

	// Back to top avec un petit effet de smooth scroll trop sympatoche
	$('a[href^="#top"]').click(function(){

		var the_id = $(this).attr("href");

		$('html, body').animate({ scrollTop: $(the_id).offset().top }, 'slow');
		return false;
	});

});

