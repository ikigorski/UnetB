<?php

	session_start();
	if(empty($_POST['email']) || empty($_POST['password']) ){
		header('location:http://localhost/UnetB/views/login-view.php');
		exit;
	}

	$password = $_POST['password'];
	$email    = $_POST['email'];

	require_once "../classes/class-UnetbDB.php";   //arquivo para a classe que conecta ao banco de dados
	require_once "../functions/hash.php";		   //arquivos para gerar o hash para a senha

	//Conecta ao bando de dados
	$mySQL = new MySQL;
	$executaQuery = $mySQL->executeQuery("SELECT * FROM 'user' WHERE ('email' = '". $email ."') LIMIT 1");
	$mySQL->disconnect();

	$resultado = mysqli_fetch_assoc($executaQuery);// Salva os dados encontados na variável $resultado

	if (mysqli_num_rows($executaQuery) == 1 && verify($password ,$resultado['password'])){

		$_SESSION['email'] = $resultado['email'];
		$_SESSION['nome']  = $resultado['name'];

		header('location:http://localhost/UnetB/views/home-login-view.php');

	}else
		header('location:http://localhost/UnetB/views/login-view.php?failed');
?>