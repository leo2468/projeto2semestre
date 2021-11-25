<?php
	require_once "validador_acesso.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>AllSafe</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<style>
		.card-home {
			padding: 40px 0 0 0;
			width: 80%;
			margin: 0 auto;
		}		
	</style>

</head>
<body>
	<nav class="navbar navbar-white bg-white">
		<a href="#" class="navbar-brand">
			<img src="logo.jpg" width="40" height="40" class="d-inline-block align-top">
			AllSafe
		</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="logoff.php" class="nav-link">Sair</a>
			</li>
		</ul>
	</nav>
	<div class="container">
		<div class="row">
			<div class="card-home">
				<div class="card">
					<div class="card-header">
						Informe o Nome do Usuario
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<form method="post" action="registra_chamado.php">
									<div class="form-group">
										<label>Nome do Funcionario</label>
										<input type="text" name="titulo" class="form-control" placeholder="Nome">
									</div>

									<div class="form-group">
										<label>Selecione</label>
										<select class="form-control" name="categoria">
											<option disabled selected="true">Selecione o Problema</option>
											<option>Problema com algum software</option>
											<option>Problema com o Windows</option>
											<option>Problema com a rede</option>
											<option>Problema com a impressora</option>
											<option>Problema com acesso</option>
											<option>Problema com senhas</option>
											<option>Outro...</option>
										</select>
									</div>
									<div class="form-group">
										<label>Cadatro de E-mail</label>
										<select class="form-control" name="categoria">
											<option disabled selected="true">E-mail Desejado</option>
											<option>bruna@teste.com</option>
											<option>lucas@teste.com</option>
											<option>ronaldo@teste.com</option>
											<option>carlos@teste.com</option>
											<option>maicon@teste.com</option>
											<option>maicon@teste.com</option>
											<option>Outro...</option>
										</select>
									</div>

									<div class="form-group">
										<label>Descrição dos problemas</label>
										<textarea name="descricao" class="form-control" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label>Acessos</label>
										<textarea name="acesso" class="form-control" rows="3"></textarea>
									</div>

									<div class="row">
										<div class="col-6">
											<a href="home.php" class="btn btn-lg btn-secondary btn-block">Voltar</a>
										</div>

										<div class="col-6">
											<button class="btn btn-lg btn-info btn-block" type="submit">Abrir chamados</button>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>




