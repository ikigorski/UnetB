<?php

	session_start();

	$email = $_POST['email'];
	$password = $_POST['password'];
	$con = mysqli_connect("127.0.0.1", "root", "", "unetb") or die ("Sem conexão com o servidor");	
	$select = mysqli_select_db($con,"unetb");

	$result = mysqli_query($con,"SELECT * FROM `alunos` WHERE `email` = '$email' AND `password`= '$password'");

	if(mysqli_num_rows ($result) > 0 ){
		$_SESSION['email'] = $email;
		header('location:http://localhost/UnetB/views/home-login-view.php');

	}else{
		session_destroy();
		$teste = '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Usuário ou senha inválido';		
		include "login-view.php";
		echo"
			<script>
				caixa_login = document.querySelector('.msg-login');
				caixa_login.innerHTML = '$teste';
				caixa_login.style.display = 'block';
			</script>
		";
	}

?>