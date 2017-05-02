<?php	
	session_start();
	
	if(!isset($_SESSION['email'])){
		header('location:login-view.php');
	}
	$logado = $_SESSION['email'];
?>


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
	</head>

	<body>

		<!-- INCLUE O HEADER NA PÁGINA -->
		<?php include "_includes/header-logado.php";?>

		<div class="container">
			<h3 style="margin-top: 50px;"><?php echo" Bem vindo $logado";?></h3>
		</div>

	</body>
	
	<script src="_js/jquery.min.js"></script> <!-- Carrega JS jquery-->
	<script src="_js/bootstrap.js"></script> <!-- Carrega JS do bootstrap-->
</html>