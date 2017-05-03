<?php

	// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
	if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['password']))){
  		header("Location: login-view.php"); exit;
 	}
	
	// Tenta se conectar ao servidor MySQL
	$con = mysqli_connect('127.0.0.1', 'root', '','unetb') or trigger_error(mysqli_error());
	

	$email = utf8_decode($_POST['email']);
	$password = hash('sha256',utf8_decode($_POST['password']));

	// Validação do usuário/senha digitados
	$sql = "SELECT `name`,`email`, `password` FROM `user` WHERE (`email` = '". $email ."') AND (`password` = '". $password ."') LIMIT 1";
	$query = mysqli_query($con,$sql);
	
	if (mysqli_num_rows($query) != 1) {
  	// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
		require_once 'login-view.php';
		echo"
			<script>
				caixa_login = document.querySelector('.msg-login');
				formataErro(caixa_login,' Usuário ou senha inválido.');
			</script>
		";
	} else {

	  	// Salva os dados encontados na variável $resultado
		$resultado = mysqli_fetch_assoc($query);

		var_dump($resultado);
		// Se a sessão não existir, inicia uma
		if (!isset($_SESSION)) session_start();
		$_SESSION['email'] = $resultado['email'];
		$_SESSION['nome'] = $resultado['name'];

		header('location:http://localhost/UnetB/views/home-login-view.php');

	}

	?>