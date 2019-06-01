<?php require 'pages/header.php'; ?>
	<div class="container">
		<h1>Cadastre-se</h1>

		<?php 
			require 'classes/usuarios.class.php';
			$u = new Usuarios();

			if (isset($_POST['nome']) && !empty($_POST['nome'])) {
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$senha = addslashes($_POST['senha']);
				$telefone = addslashes($_POST['telefone']);

				if (!empty($nome) && !empty($email) && !empty($senha)) { 
					if ($u -> cadastrar($nome, $email, $senha, $telefone)) { ?>
						<div class="alert alert-success">
							<p>Usuário cadastrado com sucesso.</p>
							<a href="login.php" class="alert-link">Entre na sua conta.</a>
						</div>
					<?php 
					} else { ?>
						<div class="alert alert-warning">
							<p>Este usuário já existe.</p>
							<a href="login.php" class="alert-link">Faça o login agora.</a>
						</div>
					<?php 
					}
				} else { ?>
					<div class="alert alert-warning">
						<p>Preencha todos os campos para continuar.</p>
					</div>
				<?php
				}
			}
		?>

		<form method="POST">
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input class="form-control" type="text" id="nome" name="nome">
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email">
			</div>

			<div class="form-group">
				<label for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha">
			</div>

			<div class="form-group">
				<label for="telefone">Telefone:</label>
				<input class="form-control" type="text" id="telefone" name="telefone">
			</div>

			<input class="btn btn-default" type="submit" value="Cadastrar">
		</form>
	</div>
<?php require 'pages/footer.php'; ?>