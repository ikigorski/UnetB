<?php

	// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
	if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['password']))){
		header("Location: login-view.php"); exit;
	}
	
	$email    = utf8_decode($_POST['email']);
	$password = utf8_decode($_POST['password']);

	
	require_once "../classes/class-UnetbDB.php"; //arquivo para a classe que conecta ao banco de dados
	require_once "../functions/hash.php";		 //arquivos para gerar o hash para a senha
	
	
	//Conecta ao bando de dados
	$mySQL = new MySQL;

	$query = "SELECT * FROM `user` WHERE (`email` = '". $email ."') LIMIT 1";
	$executaQuery = $mySQL->executeQuery($query); //selecionando * (all) da tabela e conferindo o email
	
	$totalRows = mysqli_num_rows($executaQuery); //variável para armazenar o número de linha(s)
	$mySQL->disconnect();
	$resultado = mysqli_fetch_assoc($executaQuery);// Salva os dados encontados na variável $resultado
	
	

	if ($totalRows == 1 && verify($password ,$resultado['password']) == 1){
		echo "Conectado";
	}else{
		echo "Usuário ou senha inválido";
	}
?>