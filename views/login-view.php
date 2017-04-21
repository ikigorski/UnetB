<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">		
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<title>Login</title>
</head>

<body class= "body-login">

	<div class="wrapper">

		<!-- INCLUE O HEADER NA PÁGINA -->		
		<?php include "header.inc";?>

		<div class="well login-box">
			<h3 class="login-title"><center><b>Entrar<b></center></h3>
			<form action="../login.php" method="post" id='form-contato' enctype='multipart/form-data'>
				<fieldset>
					<div class="form-group-login ls-login-user">
						<label for="email">E-mail</label>
						<input class="form-control ls-login-bg-user input-lg" id="userEmail" name="email" placeholder="E-mail" type="text">
					</div>

					<div class="form-group-login ls-login-password">
						<label for="password">Senha</label>
						<input class="form-control ls-login-bg-password input-lg" id="userPassword" placeholder="Senha" type="password" name="password">
					</div>

					<input class="btn login-button" type="submit" value="Entrar">
					<p class="no-account-text">Não possui conta no UnetB?<a href="user_registration.php" class= "register-link">Cadastre-se agora</a></p>

				</fieldset>
			</form>
		</div>

		<div class="push"></div>
	</div>

	<!-- INCLUE O FOOTER NA PÁGINA -->
	<div class="footer"><?php include "../public/footer.inc";?></div>

	</body>

	<script src= "js/login.js"></script>
	<script type="js/jquery.min.js"></script>
	<script type="js/bootstrap.min.js"></script>
</html>
