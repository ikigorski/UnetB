<!DOCTYPE html>
<html lang="pt-br" style="height: 100%;">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UNetB - Cadastro</title>
	<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/custom.css" rel="stylesheet">
</head>

<body>

	<div class="wrapper">

	<?php
		include "../public/header.inc";
	?>
	<div class='container'>
		<fieldset>
			<legend><h1>Cadastro de Cliente</h1></legend>
			
			<form action="#" method="post" id='form-contato' enctype='multipart/form-data'>
				
				<div class="row">
					<label for="nome">Selecionar Foto</label>
					<div class="col-md-2">
						<a href="#" class="thumbnail">
							<img src="../images/standard_profile_image.jpg" height="190" width="150" id="foto-cliente">
						</a>
					</div>
					<input type="file" name="foto" id="foto" value="foto" >
				</div>

				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Infome o Nome">
					<span class='msg-erro msg-nome'></span>
				</div>

				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Informe o E-mail">
					<span class='msg-erro msg-email'></span>
				</div>

				<div class="form-group">
					<label for="matricula">Matrícula</label>
					<input type="matricula" class="form-control" id="matricula" name="matricula" placeholder="Informe a Matrícula" maxlength = "10">
					<span class='msg-erro msg-matricula'></span>
				</div>

				<div class="form-group">
					<label for="senha">Senha</label>
					<input type="password" class="form-control" id="senha" name="senha" placeholder="Infome a Senha">
					<span class='msg-erro msg-senha'></span>
				</div>

				<div class="form-group">
					<label for="data_nascimento">Data de Nascimento</label>
					<input type="data_nascimento" class="form-control" id="data_nascimento" maxlength="10" name="data_nascimento" placeholder="Infome a Data de Nascimento">
					<span class='msg-erro msg-data'></span>
				</div>

				<div class="form-group">
					<label for="celular">Celular</label>
					<input type="celular" class="form-control" id="celular" maxlength="13" name="celular" placeholder="Informe o Celular">
					<span class='msg-erro msg-celular'></span>
				</div>

				<div class="form-group">
					<label for="sexo">Sexo</label>
					<select class="form-control" name="sexo" id="sexo">
						<option value="">Selecione o Sexo</option>
						<option value="feminino">Feminino</option>
						<option value="masculino">Masculino</option>
					</select>
					<span class='msg-erro msg-sexo'></span>
				</div>

				<input type="hidden" name="acao" value="incluir">
				<button type="submit" class="btn btn-primary" id='botao'>Gravar</button>
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
	<script type="text/javascript" src="../js/valida_cadastro.js"></script>	
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</html>