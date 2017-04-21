<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<link rel="stylesheet" href="css/custom_login.css">
	</head>
	<body class="body-login"> 
		<div class ="wrapper">

			<?php
				include "header.inc";
			?>

			<div class="well login-box">
				<fieldset>
					<h3 class="login-title"><center><b>Entrar</b></center></h3>
					<form action="../login.php" method="post" id='form-contato' enctype='multipart/form-data'>
						<div class="form-group-login ls-login-user">
							<label for="email">E-mail</label>
							<input class="form-control ls-login-bg-user input-lg" id="userEmail " name="email" placeholder="E-mail" type="text">
						</div>
						<div class="form-group-login ls-login-password">
							<label for="password">Senha</label>
							<input class="form-control ls-login-bg-password input-lg" id="userPassword" placeholder="Senha" type="password" name="password">
						</div>
						<input class="btn login-button" type="submit" value="Entrar">
							<p class="no-account-text">Não possui conta no UnetB? <a href="user_registration.php" class= "register-link">Cadastre-se!</a></p>

					</form>

				</fieldset>	
			</div>
				<div class="push"></div>
		</div>
		<div class="footer">
			<?php
				include "../public/footer.inc";
			?>
		</div>
	</body>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>