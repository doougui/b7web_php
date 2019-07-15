<h3>Editar</h3>

<?php if ($error == 'exist'): ?>
	<div class="aviso">
		<p>E-mail já existe, tente outro.</p>
	</div>
<?php endif; ?>

<form method="POST" action="<?= BASE_URL ?>contatos/edit_save/<?= $info['id'] ?>">
	<label for="nome">Nome</label><br>
	<input type="text" name="nome" id="nome" value="<?= $info['nome'] ?>"><br><br>

	<label for="email">E-mail</label><br>
	<input type="email" name="email" id="email" value="<?= $info['email'] ?>"><br><br>

	<input type="submit" value="Editar">
</form>