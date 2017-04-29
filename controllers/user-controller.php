<?php
	require_once ("../classes/class-User.php");

	class UserControl {


		public function registeruser() /* registrando o usuário (sem validações) */
		{
			$User = new User(utf8_decode($_POST['name']), utf8_decode($_POST['email']), utf8_decode($_POST['matricula']), utf8_decode($_POST['password']));

			$User->save();
		}
	}
	$UserControl = new UserControl();
	$UserControl->registeruser();

	
	
	
	header('location:../home-login-view.php');

?>
