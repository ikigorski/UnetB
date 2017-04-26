<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="_images/favicon.png" type="image/x-icon"/>
	<link href="_css/bootstrap.css" rel="stylesheet">
	<link href="_css/custom.css" rel="stylesheet">
	<title>UNetB - Home</title>


<?php
	
	session_start();
	
	if(!isset($_SESSION['email'])){
		header('location:loginInterface.php');
	}

	include "_includes/header.php";
	$logado = $_SESSION['email'];
?>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SISTEMA WEB</title>
</head>

<body>
<table width="800" height="748" border="50">
	<tr>
		<td height="90" colspan="2" bgcolor="#CCCCCC">
		<?php 
			echo" Bem vindo $logado";
		?>
		</td>
	</tr>
	<tr>
		<td width="103" height="410" bgcolor="#CCCCCC">MENU AQUI</td>
		<td width="546">CONTEUDO E ICONES AQUI</td>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#000000"> </td>
	</tr>
</table>
</body>
</html>
