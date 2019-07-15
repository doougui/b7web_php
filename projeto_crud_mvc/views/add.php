<h3>Adicionar</h3>

<?php if ($error == 'exist'): ?>
	<div class="aviso">
		<p>E-mail já existe, tente outro.</p>
	</div>
<?php endif; ?>

<form method="POST" action="<?= BASE_URL ?>contatos/add_save">
	<label for="nome">Nome</label><br>
	<input type="text" name="nome" id="nome"><br><br>

	<label for="email">E-mail</label><br>
	<input type="email" name="email" id="email"><br><br>

	<input type="submit" value="Adicionar">
</form>