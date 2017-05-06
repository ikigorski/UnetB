<?php

	$name     = utf8_decode($_POST['name']);
	$email    = utf8_decode($_POST['email']);
	$password = utf8_decode($_POST['password']);


	//Carrega arquivos necessários para funcionamento
	require_once "../classes/class-UnetbDB.php"; //arquivo para a classe que conecta ao banco de dados
	require_once "../classes/class-User.php";	 //arquivos para a classe usuário
	require_once "../functions/hash.php";		 //arquivos para gerar o hash para a senha

	//Conecta ao bando de dados
	$mySQL = new MySQL;

	class UserControl {
		
		public function registeruser(){
		
			global $name, $email, $password;
			$User = new User($name, $email, b_hash($password));

			return $User->save();
		}
	}

	function check_on_database($valor,$coluna){

		global $mySQL;
		$query = "select {$coluna} from user where {$coluna} = '{$valor}'";
		$executaQuery = $mySQL->executeQuery("SELECT {$coluna} FROM user WHERE {$coluna} = '{$valor}'");
		
		if(mysqli_num_rows($executaQuery) > 0 ){
			return true;
		}
		
		return false;
	}

	if(check_on_database($email, "email")){
		
		$mySQL->disconnect();
		echo "<script>location.href='../views/user-register-view.php?email';</script>";
	}
	else{

		$UserControl = new UserControl();
		if($UserControl->registeruser()){
			
			// Se a sessão não existir, inicia uma
			//if (!isset($_SESSION)) session_start();
			//$_SESSION['email'] = $email;
			//$_SESSION['nome'] = $name;
			//header('location:../views/home-login-view.php');
			echo "<script>location.href='../views/user-register-view.php?success';</script>";
		}else{
			echo "<script>location.href='../views/user-register-view.php?error';</script>";
		}
		
		$mySQL->disconnect();
	}
?>
