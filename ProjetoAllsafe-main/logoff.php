<?php

	session_start();

	// echo '<pre>';
	// print_r($_SESSION);
	session_destroy();
	header('Location: ./?login=logoff');

?>