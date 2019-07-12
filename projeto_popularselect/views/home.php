<form method="POST">
	<label for="modulos">Escolha o módulo:</label><br>
	<select name="modulos" id="modulos" onchange="pegarAulas(this)">
		<option></option>
		<?php foreach ($modulos as $modulo): ?>
			<option value="<?= $modulo['id'] ?>"><?= utf8_encode($modulo['titulo']) ?></option>
		<?php endforeach; ?>
	</select><br><br>

	<label for="aulas">Escolha a aula:</label><br>
	<select name="aulas" id="aulas">
		
	</select><br><br>

	<input type="submit" value="Enviar">
</form>