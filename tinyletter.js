jQuery(document).ready(function($) {
	$( '.tinyletter-form' ).submit(function() {
		$('.fieldtogglization').hide();
		$('.tinyletter-confirmation').slideDown();
	});
});