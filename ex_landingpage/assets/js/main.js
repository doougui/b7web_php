$(document).ready(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 5) {
			$('.header').css('padding', '0px 0px');
			$('.header-bg').css('background-color', '#FFFFFF');
			$('.header-bg').addClass('header-shadow');
			$('.header a').css('color', '#115ffc');
			$('.header-logo img').attr('src', 'assets/img/logo_2.png');

			$('.header nav a').hover(function() {
				$(this).css('color', '#375bc0');
			}, function() {
				$(this).css('color', '#115ffc');
			});

			if ($(window).width() <= 603) {
				$('.header-logo img').css('border', '0px');
				$('.login-section').css('border', '0px');
			} else {
				$('.header-logo img').css('border-right', '1px solid #115ffc');
				$('.login-section').css('border-left', '1px solid #115ffc');
			}
		} else {
			$('.header').css('padding', '10px 0px');
			$('.header-bg').css('background-color', '#115ffc');
			$('.header-bg').removeClass('header-shadow');
			$('.header a').css('color', '#FFFFFF');
			$('.header-logo img').attr('src', 'assets/img/logo.png');

			$('.header nav a').hover(function() {
				$(this).css('color', '#CCCCCC');
			}, function() {
				$(this).css('color', '#FFFFFF');
			});

			if ($(window).width() <= 603) {
				$('.header-logo img').css('border', '0px');
				$('.login-section').css('border-left', '1px solid #115ffc');
			} else {
				$('.header-logo img').css('border-right', '1px solid #FFFFFF');
				$('.login-section').css('border-left', '1px solid #FFFFFF');
			}
		}
	});

	var windowHeight = $(window).height();

	$('.readmore').bind('click', function() {
		$("html, body").animate({
			scrollTop: windowHeight - 50
		}, 500);
		return false;
	});
});