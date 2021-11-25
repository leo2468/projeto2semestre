<?php 

	session_start();

	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null; //1 = admin; 2 = usuário comum

	$lista_usuarios = array(
		array('id' => 1, 'email' => 'admin@teste.com', 'senha' => '1234', 'perfil' => 1),
		array('id' => 2, 'email' => 'admin2@teste.com', 'senha' => '1234', 'perfil' => 1),
		array('id' => 3, 'email' => 'usuario@teste.com', 'senha' => '1234', 'perfil' => 2),
		array('id' => 4, 'email' => 'iara@teste.com', 'senha' => '1234', 'perfil' => 1),
		array('id' => 5, 'email' => 'bruna@teste.com', 'senha' => '1234', 'perfil' => 1)
	);

	foreach($lista_usuarios as $user){
		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['password']){
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil'];
			break;
		}
	}

	//paramos aqui!

	if($usuario_autenticado){
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php');
	}else{
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	}

?>






