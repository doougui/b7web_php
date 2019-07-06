$(function() {
	$('#form').on('submit', function(e) {
		e.preventDefault();

		var email = $('#email').val();
		var senha = $('#password').val();

		$.ajax({
			type: 'POST',
			url: 'login.submit.php',
			data: {email:email, senha:senha},
			success: function(r) {
				if (r == 1) {
					window.location.href = 'index.php';
				} else if (r == 0) {
					alert('Informações incorretas.');
				} else {
					alert(r);
				}
			}
		});
	});
});