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

	<?php
		include "header.inc";
	?>

	<div class='container'>
		<fieldset>
			<legend><h1>Formulário de Cadastro</h1></legend>

			<form action="../action_cliente.php" method="post" id='form-contato' enctype='multipart/form-data'>
				<div class="row">
					<label for="nome">Selecionar Foto</label>
			      	<div class="col-md-2">
					    <a href="#" class="thumbnail">
					      <img src="../images/standard_profile_image.jpg" height="150" width="150" id="foto-cliente">
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
			      <input type="matricula" class="form-control" id="matricula" name="matricula" placeholder="Informe a Matrícula" maxlength="10">
			      <span class='msg-erro msg-matricula'></span>
			    </div>

				<div class="form-group">
			      <label for="senha">Senha</label>
			      <input type="password" class="form-control" id="senha" name="senha" placeholder="Infome a Senha">
			      <span class='msg-erro msg-senha'></span>
			    </div>

			    <div class="form-group">
			      <label for="data_nascimento">Data de Nascimento</label>
			      <input type="data_nascimento" class="form-control" id="data_nascimento" maxlength="10" name="data_nascimento" placeholder= "Data de Nascimento">
			      <span class='msg-erro msg-data'></span>
			    </div>


			    <div class="form-group">
			      <label for="celular">Celular</label>
			      <input type="celular" class="form-control" id="celular" maxlength="13" name="celular" placeholder="Informe o Celular">
			      <span class='msg-erro msg-celular'></span>
			    </div>

			    <div class="form-group">
			      <label for="status">Sexo</label>
			      <select class="form-control" name="status" id="status">
				    <option value="">Sou do sexo...</option>
					  <option value="">Masculino</option>
				    <option value="">Feminino</option>
				  </select>
				  <span class='msg-erro msg-status'></span>
			    </div>


					<div class="form-group">
							<label for="status">Curso</label>
							<select class="form-control" name="status" id="status">
								<option value="">Curso</option>
								<option value="">ADMINISTRAÇÃO</option>
								<option value="">AGRONOMIA</option>
								<option value="">ARQUITETURA E URBANISMO</option>
								<option value="">ARQUIVOLOGIA</option>
								<option value="">ARTES CÊNICAS</option>
								<option value="">ARTES VISUAIS</option>
								<option value="">BIBLIOTECONOMIA</option>
								<option value="">BIOTECNOLONIA</option>
								<option value="">CIÊNCIA DA COMPUTAÇÃO</option>
								<option value="">CIÊNCIA POLÍTICA</option>
								<option value="">CIÊNCIAS AMBIENTAIS</option>
								<option value="">CIÊNCIAS CONTÁBEIS</option>
								<option value="">CIÊNCIAS ECONÔMICAS</option>
								<option value="">CIÊNCIAS NATURAIS</option>
								<option value="">CIÊNCIAS SOCIAIS</option>
								<option value="">COMPUTAÇÃO</option>
								<option value="">COMUNICAÇÃO SOCIAL</option>
								<option value="">DESIGN</option>
								<option value="">DIREITO</option>
								<option value="">EDUCAÇÃO ARTÍSTICA</option>
								<option value="">EDUCAÇÃO DO CAMPO</option>
								<option value="">EDUCAÇÃO FÍSICA</option>
								<option value="">ENFERMAGEM</option>
								<option value="">ENGENHARIA AMBIENTAL</option>
								<option value="">ENGENHARIA CIVIL</option>
								<option value="">ENGENHARIA DE COMPUTAÇÃO</option>
								<option value="">ENGENHARIA DE PRODUÇÃO</option>
								<option value="">ENGENHARIA DE REDES DE COMUNICAÇÃO</option>
								<option value="">ENGENHARIA ELÉTRICA</option>
								<option value="">ENGENHARIA FLORESTAL</option>
								<option value="">ENGENHARIA MECÂNICA</option>
								<option value="">ENGENHARIA MECATRÔNICA</option>
								<option value="">ENGENHARIA QUÍMICA</option>
								<option value="">ESTATÍSTICA</option>
								<option value="">FARMÁCIA</option>
								<option value="">FILOSOFIA</option>
								<option value="">FÍSICA</option>
								<option value="">GEOFÍSICA</option>
								<option value="">GEOGRAFIA</option>
								<option value="">GEOLOGIA</option>
								<option value="">GESTÃO AMBIENTAL</option>
								<option value="">GESTÃO DE AGRONEGÓCIOS</option>
								<option value="">GESTÃO DE POLÍTICAS PÚBLICAS</option>
								<option value="">HISTÓRIA</option>
								<option value="">JORNALISMO</option>
								<option value="">LETRAS</option>
								<option value="">LETRAS - TRADUÇÃO</option>
								<option value="">LETRAS - TRADUÇÃO ESPANHOL</option>
								<option value="">LIBRAS</option>
								<option value="">LINGUA ESTRANGEIRA APLICADA</option>
								<option value="">MATEMÁTICA</option>
								<option value="">MATEMÁTICA - SEGUNDA LICENCIATURA</option>
								<option value="">MEDICINA</option>
								<option value="">MEDICINA VETERINÁRIA</option>
								<option value="">MUSEOLOGIA</option>
								<option value="">MÚSICA</option>
								<option value="">NUTRIÇÃO</option>
								<option value="">ODONTOLOGIA</option>
								<option value="">PEDAGOGIA</option>
								<option value="">PEDAGOGIA - 1ª LICENCIATURA</option>
								<option value="">PSICOLOGIA</option>
								<option value="">QUÍMICA</option>
								<option value="">QUÍMICA TECNOLÓGICA</option>
								<option value="">RELAÇÕES INTERNACIONAIS</option>
								<option value="">SAÚDE COLETIVA</option>
								<option value="">SERVIÇO SOCIAL</option>
								<option value="">TEATRO</option>
								<option value="">TEORIA CRÍTICA E HISTÓRIA DA ARTE</option>
								<option value="">TURISMO</option>


							</select>
							<span class='msg-erro msg-status'></span>
					 </div>

			    <input type="hidden" name="acao" value="incluir"/>
			    <button type="submit" class="btn btn-primary" id='botao'>
			      Gravar
			    </button>
			</form>
		</fieldset>

	</div>

		<?php
			include "..public/footer.inc";
		?>
	</body>

	<script type="text/javascript" src="../js/valida_cadastro.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</html>
