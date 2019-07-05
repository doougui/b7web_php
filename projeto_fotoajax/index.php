<!DOCTYPE html>
<html>
<head>
	<title>Projeto: Upload de foto com AJAX</title>
	<meta charset="UTF-8">
</head>
<body>
	<form id="form" method="POST" enctype="multipart/form-data" action="recebedor.php">
		Nome:<br>
		<input type="text" name="nome"><br><br>

		Foto:<br>
		<input type="file" name="foto"><br><br>

		<input type="submit" value="Enviar">
	</form>

	<script src="jquery-3.4.1.min.js"></script>
	<script src="script.js"></script>
</body>
</html>