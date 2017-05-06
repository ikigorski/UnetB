<!DOCTYPE html>
<html lang="pt-br">

	<!-- INCLUE O HEAD NA PÁGINA -->
	<?php include "_includes/head.php";?>

	<body>

		<!-- INCLUE O HEADER NA PÁGINA -->
		<?php include "_includes/header.php";?>

		<div class="pai">
			<div class="filho">
				<div class="container">
					<div class="row">
						<div class= "well col-md-4 col-sm-6 col-xs-12 col-md-offset-4 col-sm-offset-3">
							
							<center><h1 class="title-form">Cadastro</h1></center>
							
							<form action="../controllers/register-controller.php" method="post" id='form-contato' enctype='multipart/form-data'>

								<div class="form-group">
									<label for="email">*E-mail</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Informe o E-mail">
									<span class='msg-erro msg-email'></span>
								</div>

								<div class="form-group">
									<label for="password">*Senha</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Infome a Senha">
									<span class='msg-erro msg-password'></span>
								</div>

								<div class="form-group">
									<label for="confpass">*Confirmar Senha</label>
									<input type="password" class="form-control" id="confpass" name="confpass" placeholder="Digite a senha novamente">
									<span class='msg-erro msg-confpass'></span>
								</div>

								<div class="form-group">
									<label for="name">Nome</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Infome o Nome">
									<span class='msg-erro msg-name'></span>
								</div>

								<input type="hidden" name="acao" value="incluir">
								<button type="submit" class="btn btn-primary btn-lg btn-block" id='botao'>Gravar</button><br/>
								<span class='msg-erro msg-cadastro'></span>

							</form><!-- /formulário-->
							
						</div> <!-- /caixa do formulário-->
					</div> <!-- /row-->
				</div> <!-- /conteiner-->
			</div> <!-- filho -->
		</div> <!-- pai -->

	</body>
	
	<script src="_js/valida_cadastro.js"></script> <!-- Carrega JS para validar cadastro-->
	<script src="_js/jquery.min.js"></script> <!-- Carrega JS jquery-->
	<script src="_js/bootstrap.js"></script> <!-- Carrega JS do bootstrap-->

</html>
