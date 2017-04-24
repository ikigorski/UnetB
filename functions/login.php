<?php

	session_start();

	$email = $_POST['email'];
	$password = $_POST['password'];
	$con = mysqli_connect("127.0.0.1", "root", "", "unetb") or die ("Sem conexão com o servidor");	
	$select = mysqli_select_db($con,"unetb");

	$result = mysqli_query($con,"SELECT * FROM `alunos` WHERE `email` = '$email' AND `password`= '$password'");

	if(mysqli_num_rows ($result) > 0 ){
		$_SESSION['email'] = $email;
		header('location:public/logado.php');

	}else{
		session_destroy();
		header('location:public/loginInterface.php');
	}

?>