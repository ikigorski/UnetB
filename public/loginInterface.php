<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/custom.css" rel="stylesheet">
</head>

	<body>

		<div class="wrapper">

			<?php
				include "../public/header.inc";
			?>

			<div class="center-panel">
				<div class="well bg-write box-login">
					<h1 class="ls-login-logo">
						<center>UNetB
						</center>
					</h1>
					<form action="../login.php" method="post" id='form-contato' enctype='multipart/form-data'>
						<fieldset>

							<div class="form-group ls-login-user">
								<label for="email">E-mail</label>
								<input class="form-control ls-login-bg-user input-lg" id="userEmail" name="email" placeholder="E-mail" type="text">
							</div>

							<div class="form-group ls-login-password">
								<label for="password">Senha</label>
								<input class="form-control ls-login-bg-password input-lg" id="userPassword" placeholder="Senha" type="password" name="password">
							</div>

							<input class="btn btn-primary btn-lg btn-block bg-color-blue" type="submit" value="Entrar">
							<p class="txt-center ls-login-signup">Não possui conta no UnetB?<a href="user_registration.php">Cadastre-se agora</a></p>

							

						</fieldset>
					</form>
				</div>
			</div>
			<div class="push"></div>
		</div>

		<div class="footer">
			<?php
				include "../public/footer.inc";
			?>
		</div>

	</body>
	<script src= "../js/login.js"></script>
	<script type="../js/jquery.min.js"></script>
	<script type="../js/bootstrap.min.js"></script>
</html>
