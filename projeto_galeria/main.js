$(document).ready(function() {

	$('a.galeria').bind('click', function() {
		var img = $(this).find('img').attr('src');

		var imgWidth = $(this).find('img').width();
		var imgHeight = $(this).find('img').height();
		var btnHeight = $('button').height();

		console.log(btnHeight);

		$('.divbox').css('width', imgWidth);
		$('.divbox').css('height', imgHeight + btnHeight);

		$('.divbox img').attr('src', img);
		$('.divbox, .bgbox').fadeIn();
	});

	$('.bgbox, .divbox button').bind('click', function() {
		$('.divbox, .bgbox').fadeOut('fast');
	});

});	