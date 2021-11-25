<?php
	require_once "validador_acesso.php";

	//lista de chamados, iniciada vazia
	$chamados = array();

	//abertura do arquivo de chamados
	$arquivo = fopen('chamados.uni', 'r');

	//leituira do arquivo e, para cada linha encontrada, incluir na lista
	while(!feof($arquivo)){
		$linha = fgets($arquivo);
		$chamados[] = $linha;
	}

	fclose($arquivo);
	// echo '<pre>';
	// var_dump($chamados);
	// echo '</pre>';

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
	<nav class="navbar navbar-white bg-white ">
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
						Lista de chamados
					</div>
					<div class="card-body">
						<?php foreach($chamados as $chamado) { 

								$chamado_dados = explode('#', $chamado);

								if($_SESSION['perfil_id'] == 2){
									//o usuário só vê seus próprios chamados
									if($chamado_dados[0] != $_SESSION['id']){
										continue;
									}
								}

								if(count($chamado_dados) < 3){
									continue;
								}
						?>

						<div class="card mb-3 bg-light">
							<div class="card-body">
								<h5 class="card-title"><?= $chamado_dados[1] ?></h5>
								<h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2] ?></h6>
								<p class="card-text"><?= $chamado_dados[3] ?></p>
							</div>
						</div>

					<?php } ?>
					</div>					
				</div>
			</div>
		</div>
	</div>

</body>
</html>








