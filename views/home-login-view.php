<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="_images/favicon.png" type="image/x-icon"/>
	<link href="_css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="_css/bootstrap-theme.css">
	<link href="_css/custom.css" rel="stylesheet">
	<title>UNetB - Home</title>


<?php
	
	session_start();
	
	if(!isset($_SESSION['email'])){
		header('location:login-view.php');
	}

	include "_includes/header.php";
	$logado = $_SESSION['email'];
?>
</head>

<body>
	<div class="panel">
		<h3>
		<?php 
			echo" Bem vindo $logado";
		?>
		</h3>
	</div>
</body>
</html>