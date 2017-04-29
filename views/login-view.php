<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">		
	<link rel="shortcut icon" href="_images/favicon.png" type="image/x-icon"/>
	<link href="_css/bootstrap.css" rel="stylesheet">
	<link href="_css/custom.css" rel="stylesheet">
	<title>Login</title>
</head>

<body>

	<!-- INCLUE O HEADER NA PÁGINA -->
	<?php include "_includes/header.php";?>
	

	<div class='container-fluid col-lg-4 col-md-4 col-sm-6 col-xs-10 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-1 child vertical' >
		<div class= "login-box well">
			<fieldset>
				<h1 class="register-legend"><center><b>Login</b></center></h1>
				<form action="login.php" method="post" id='form-contato' enctype='multipart/form-data'>

					<span class="msg-erro msg-login"></span>	
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Informe o E-mail">
						<span class='msg-erro msg-email'></span>
					</div>

					<div class="form-group">
						<label for="password">Senha</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Infome a Senha">
						<span class='msg-erro msg-password'></span>
					</div>

					<input type="hidden" name="acao" value="incluir">
					<center><button type="submit" class="btn btn-primary btn-lg btn-block" id='botao'>Entrar</button></center>
					
				</form>
			</fieldset>
		</div>
	</div>

</body>
	<script src="_js/valida_login.js"></script>
	<script src="_js/jquery.min.js"></script>
	<script src="_js/bootstrap.js"></script>
</html>
