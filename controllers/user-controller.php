<?php

	$name = utf8_decode($_POST['name']);
	$email = utf8_decode($_POST['email']);
	$password = utf8_decode($_POST['password']);

	$con = mysqli_connect("127.0.0.1", "root", "", "unetb") or die ("Sem conexão com o servidor");
	
	require_once "../classes/class-User.php";

	class UserControl {

    	 function b_hash ($password) /* função geradora de HASH para as senhas */
			{
				if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) 
	 			  {
					$salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22);
					return crypt($password, $salt);
	   		          }
			}

	function verify($password, $hashedPassword) {
    		return crypt($password, $hashedPassword) == $hashedPassword;
			}

		public function registeruser(){
		
			global $name, $email, $password;
			$User = new User($name, $email, b_hash($password));

			$User->save();			
		}
	}

	function check_on_database($valor,$coluna){

		global $con;
		$query = "select {$coluna} from user where {$coluna} = '{$valor}'";
		$result = mysqli_query($con,$query);
		
		if(mysqli_num_rows($result) > 0 ){
			return true;
		}
		
		return false;
	}
	
	if(check_on_database($email, "email")){
		echo "Email Já existe";
		mysqli_close($con);
	}
	else{
		$UserControl = new UserControl();
		$UserControl->registeruser();
		mysqli_close($con);
		echo "Cadastro realizado com sucesso";
		// Se a sessão não existir, inicia uma
		if (!isset($_SESSION)) session_start();
		$_SESSION['email'] = $email;
		$_SESSION['nome'] = $name;
		header('location:../views/home-login-view.php');

	}

?>
