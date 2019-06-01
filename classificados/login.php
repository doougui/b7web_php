<?php require 'pages/header.php'; ?>
	<div class="container">
		<h1>Login</h1>

		<?php 
			require 'classes/usuarios.class.php';
			$u = new Usuarios();

			if (isset($_POST['email']) && !empty($_POST['email'])) {
				$email = addslashes($_POST['email']);
				$senha = addslashes($_POST['senha']);

				if ($u -> login($email, $senha)) { ?>
					<script type="text/javascript" >window.location.href = './';</script>
				<?php 
				} else { ?>
					<div class="alert alert-danger">
						<p>Usuário e/ou senha incorretos!</p>
					</div>
				<?php 
				}
 			}
		?>

		<form method="POST">
			<div class="form-group">
				<label for="email">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email">
			</div>

			<div class="form-group">
				<label for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha">
			</div>

			<input class="btn btn-default" type="submit" value="Entrar">
		</form>
	</div>
<?php require 'pages/footer.php'; ?>