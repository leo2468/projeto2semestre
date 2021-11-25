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
			width: 100%;
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
						Escolha uma Opção
					</div>
					<div class="card-body d-flex">
						<div class="col-6 d-flex justify-content-center">
								<a href="abrir_chamado.php" class="text-center">
									<img src="abrir_chamado.png" width="80" height="80"/>
									<p>Nome Funcionario</p>
								</a>
							</div>
							<div class="col-6 d-flex justify-content-center">
								<a href="listar_chamados.php" class="text-center">
									<img src="listar_chamados.png" width="80" height="80"/>
									<p>Ver Chamados</p>
								</a>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>









