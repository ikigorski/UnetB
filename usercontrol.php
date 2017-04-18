<?php
	require_once ("user.php");

	class UserControl {


		public function registeruser() /* registrando o usuário (sem validações) */
		{
			$User = new User($_POST['name'], $_POST['email'], $_POST['matricula'],$_POST['password'], $_POST['course'], $_POST['birthday'], $_POST['phone'] ,$_POST['gender']);

			$User->save();
		}
	}
	$UserControl = new UserControl();
	$UserControl->registeruser();
	header('location:index.php');

?>
