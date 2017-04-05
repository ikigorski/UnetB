<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UNetB - Login</title>
	<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/custom.css" rel="stylesheet">
</head>

	<body>

		<div class="wrapper">
			
			<?php
				include "../public/header.inc";
			?>
			
			<div class="container">
				<div class="well bg-white box-login">
					<h1 class="ls-login-logo">UnetB</h1>
					<form role="form">
						<fieldset>

							<div class="form-group ls-login-user">
								<label for="userLogin">E-mail</label>
								<input class="form-control ls-login-bg-user input-lg" id="userLogin" aria-label="E-mail" placeholder="E-mail" type="text">
							</div>

							<div class="form-group ls-login-password">
								<label for="userPassword">Senha</label>
								<input class="form-control ls-login-bg-password input-lg" id="userPassword" aria-label="Senha" placeholder="Senha" type="password">
							</div>

							<a href="#" class="ls-login-forgot">Esqueci minha senha</a>

							<input value="Entrar" class="btn btn-primary btn-lg btn-block" type="submit">
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
	<script type="js/jquery.min.js"></script>
	<script type="js/bootstrap.min.js"></script>
</html>
