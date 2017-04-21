<?php
	require_once ("../classes/class-User.php");

	class UserControl {


		public function registeruser() /* registrando o usuário (sem validações) */
		{
			$User = new User($_POST['name'], $_POST['email'], $_POST['matricula'],$_POST['password']);

			$User->save();
		}
	}
	$UserControl = new UserControl();
	$UserControl->registeruser();

	
	
	
	header('location:../home-login-view.php');

?>
