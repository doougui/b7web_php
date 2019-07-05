$(function() {
	$('#form').on('submit', function(e) {
		e.preventDefault();

		var form = $('#form')[0];
		var data = new FormData(form);

		$.ajax({
			type: 'POST',
			url: 'recebedor.php',
			data: data,
			contentType: false,
			processData: false,
			success: function($msg) {
				alert($msg);
			}
		});
	});
});