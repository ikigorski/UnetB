<?php

	// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
	if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['password']))){
		header("Location: login-view.php"); exit;
	}
	
	//Pega as informações que o usuário digitou via POST
	$email = utf8_decode($_POST['email']);
	$password = utf8_decode($_POST['password']);

	//Inclue as classes para conexão com o Banco de Dados e controle de usuário
	require_once "../classes/class-UnetbDB.php";
	$user = new UserControl();

	//Conecta ao bando de dados
	$mySQL = new MySQL; // como está sendo feita a conexão ? mysqli_connect é executado quando se cria um obj MySQL?


	// não seria melhor selecionar apenas email e senha ao invés de selecionar tudo da tabela?
	$executaQuery = $mySQL->executeQuery("SELECT * FROM `user` WHERE (`email` = '". $email ."') LIMIT 1"); //selecionando * (all) da tabela e conferindo o email
	$totalRows = mysqli_num_rows($executaQuery); //variável para armazenar o número de linha(s)	
	$mySQL->disconnect();
	$resultado = mysqli_fetch_assoc($executaQuery);// Salva os dados encontados na variável $resultado
	
	if ($totalRows And $user->verify($password ,$resultado['password'])!= 1) {
	// Mensagem de erro quando a senha é inválida e/ou o usuário não foi encontrado  
		require_once 'login-view.php';
		echo"
			<script>
				caixa_login = document.querySelector('.msg-login');
				formataErro(caixa_login,' Usuário ou senha inválido.');
			</script>
		";
	} else {
	
		echo "Conectado";
		// Se a sessão não existir, inicia uma
		if (!isset($_SESSION)) session_start();
		$_SESSION['email'] = $resultado['email'];
		$_SESSION['nome'] = $resultado['name'];
		
		header('location:http://localhost/UnetB/views/home-login-view.php');
	}

?>
