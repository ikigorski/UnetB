<?php

	$name = utf8_decode($_POST['name']);
	$email = utf8_decode($_POST['email']);
	$password = hash('sha256', utf8_decode($_POST['password']));

	$con = mysqli_connect("127.0.0.1", "root", "", "unetb") or die ("Sem conexão com o servidor");
	
	require_once "../classes/class-User.php";

	class UserControl {

		public function registeruser(){
		
			global $name, $email, $password;
			$User = new User($name, $email, $password);

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
	}

?>
