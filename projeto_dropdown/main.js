$(document).ready(function() {
	$('li').hover(function() {
		$(this).find('.menu-2').slideDown();
	}, function() {
		$(this).find('.menu-2').slideUp();
	});
});