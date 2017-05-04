<?php

	// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
	if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['password']))){
		header("Location: login-view.php"); exit;
	}
	
	//Pega as informações que o usuário digitou via POST
	$email = utf8_decode($_POST['email']);
	$password = utf8_decode($_POST['password']);

	//Inclue a classe para conexão com o Banco de Dados
	require_once "../classes/class-UnetbDB.php";
        require_once "../controllers/user-controller.php";
	$user = new UserControl();

	//Conecta ao bando de dados
	$mySQL = new MySQL;

	
	$executaQuery_hash = $mySQL->executeQuery("SELECT * FROM `user` WHERE (`email` = '". $email ."') LIMIT 1");
                 
        $userhash = mysqli_fetch_assoc($executaQuery_hash);
	$varhash = $userhash['name'];
	if($user->verify($password, $varhash) = 1){

	//$executaQuery = $mySQL->executeQuery("SELECT * FROM `user` WHERE (`email` = '". $email ."') AND (`password` = '".$password ."') LIMIT 1");
	//$totalRows = mysqli_num_rows($executaQuery);	
	$mySQL->disconnect();


	
	//if ($totalRows != 1) {
	// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
		require_once 'login-view.php';
		echo"
			<script>
				caixa_login = document.querySelector('.msg-login');
				formataErro(caixa_login,' Usuário ou senha inválido.');
			</script>
		";
	//} else {
		echo "Conectado";
		// Salva os dados encontados na variável $resultado
		$resultado = mysqli_fetch_assoc($executaQuery);
		
		// Se a sessão não existir, inicia uma
		if (!isset($_SESSION)) session_start();
		$_SESSION['email'] = $resultado['email'];
		$_SESSION['nome'] = $resultado['name'];
		
		header('location:http://localhost/UnetB/views/home-login-view.php');
	}

?>
