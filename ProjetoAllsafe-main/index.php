<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>ALLSAFE</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">	

	<style>
		.card-login {
			padding: 40px 0 0 0;
			width: 350px;
			margin: 0 auto;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-white bg-white">
		<a href="#" class="navbar-brand">
			<img src="logo.jpg" width="33" height="33" class="d-inline-block align-top">
			AllSafe
		</a>
	</nav>

	<div class="container">
		<div class="row">
			<div class="card-login">

      			<?php if(isset($_GET['login']) && $_GET['login'] == 'logoff'){ ?>
					<div class="text-success text-center">
						<h5>Deslogado com sucesso!</h5>
					</div>
				<?php } ?>

				<div class="card">
					<div class="card-header">
						Login
					</div>
					<div class="card-body">
						<form method="post" action="valida_login.php">

							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="E-mail">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Senha">
							</div>

							<!-- verifica se o usuário não conseguiu autenticar: -->
							<?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
								<div class="text-danger">
									Usuário ou senha inválido(s)!
								</div>
							<?php } ?>

							<!-- verifica se o usuário foi redirecionado para o login por ter tentado acessar uma página protegida: -->
							<?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>
								<div class="text-danger">
									Faça login antes de continuar!
								</div>
							<?php } ?>
							
							<button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>