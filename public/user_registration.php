<!DOCTYPE html>
<html lang="pt-br">

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

			<form action="../user.php" method="post" id='form-contato' enctype='multipart/form-data'>

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
					<label for="name">*Nome</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Infome o Nome">
					<span class='msg-erro msg-name'></span>
				</div>

				<div class="form-group">
					<label for="email">*E-mail</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Informe o E-mail">
					<span class='msg-erro msg-email'></span>
				</div>

				<div class="form-group">
					<label for="matricula">*Matrícula</label>
					<input type="matricula" class="form-control" id="matricula" name="matricula" placeholder="Informe a Matrícula" maxlength = "10">
					<span class='msg-erro msg-matricula'></span>
				</div>

				<div class="form-group">
					<label for="password">*Senha</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Infome a Senha">
					<span class='msg-erro msg-password'></span>
				</div>

				<div class="form-group">
					<label for="course">*Curso</label>
					<select class="form-control" name="course" id="course">
						<option value="">Selecione o Seu Curso</option>
						<option value="administração">ADMINISTRAÇÃO</option>
						<option value="agronomia">AGRONOMIA</option>
						<option value="arquitetura">ARQUITETURA E URBANISMO</option>
						<option value="arquivologia">ARQUIVOLOGIA</option>
						<option value="cenicas">ARTES CÊNICAS</option>
						<option value="visuais">ARTES VISUAIS</option>
						<option value="biblioteconomia">BIBLIOTECONOMIA</option>
						<option value="biotecnologia">BIOTECNOLONIA</option>
						<option value="cienciacomputacao">CIÊNCIA DA COMPUTAÇÃO</option>
						<option value="cienciapolitica">CIÊNCIA POLÍTICA</option>
						<option value="cienciasambientais">CIÊNCIAS AMBIENTAIS</option>
						<option value="cienciascontabeis">CIÊNCIAS CONTÁBEIS</option>
						<option value="cienciaseconomicas">CIÊNCIAS ECONÔMICAS</option>
						<option value="cienciasnaturais">CIÊNCIAS NATURAIS</option>
						<option value="cienciassociais">CIÊNCIAS SOCIAIS</option>
						<option value="computacao">COMPUTAÇÃO</option>
						<option value="comunicacaosocial">COMUNICAÇÃO SOCIAL</option>
						<option value="design">DESIGN</option>
						<option value="direito">DIREITO</option>
						<option value="educacaoartistica">EDUCAÇÃO ARTÍSTICA</option>
						<option value="educacaodocampo">EDUCAÇÃO DO CAMPO</option>
						<option value="educacaofisica">EDUCAÇÃO FÍSICA</option>
						<option value="enfermagem">ENFERMAGEM</option>
						<option value="engenhariaambiental">ENGENHARIA AMBIENTAL</option>
						<option value="engenhariacivil">ENGENHARIA CIVIL</option>
						<option value="engenhariadecomputacao">ENGENHARIA DE COMPUTAÇÃO</option>
						<option value="engenhariadeproducao">ENGENHARIA DE PRODUÇÃO</option>
						<option value="engenhariaderedes">ENGENHARIA DE REDES DE COMUNICAÇÃO</option>
						<option value="engenhariaeletrica">ENGENHARIA ELÉTRICA</option>
						<option value="engenhariaflorestal">ENGENHARIA FLORESTAL</option>
						<option value="engenhariamecanica">ENGENHARIA MECÂNICA</option>
						<option value="engenhariamecatronica">ENGENHARIA MECATRÔNICA</option>
						<option value="engenhariaquimica">ENGENHARIA QUÍMICA</option>
						<option value="estatistica">ESTATÍSTICA</option>
						<option value="farmacia">FARMÁCIA</option>
						<option value="filosofia">FILOSOFIA</option>
						<option value="fisica">FÍSICA</option>
						<option value="geofisica">GEOFÍSICA</option>
						<option value="geografia">GEOGRAFIA</option>
						<option value="geologia">GEOLOGIA</option>
						<option value="gestaoambiental">GESTÃO AMBIENTAL</option>
						<option value="gestaodeagronegocios">GESTÃO DE AGRONEGÓCIOS</option>
						<option value="gestaodepoliticas">GESTÃO DE POLÍTICAS PÚBLICAS</option>
						<option value="historia">HISTÓRIA</option>
						<option value="jornalismo">JORNALISMO</option>
						<option value="lestras">LETRAS</option>
						<option value="traducao">LETRAS - TRADUÇÃO</option>
						<option value="espanhol">LETRAS - TRADUÇÃO ESPANHOL</option>
						<option value="libras">LIBRAS</option>
						<option value="entrangeiraaplicada">LINGUA ESTRANGEIRA APLICADA</option>
						<option value="matematica">MATEMÁTICA</option>
						<option value="medicina">MEDICINA</option>
						<option value="medicinaveterinaria">MEDICINA VETERINÁRIA</option>
						<option value="museologia">MUSEOLOGIA</option>
						<option value="musica">MÚSICA</option>
						<option value="nutricao">NUTRIÇÃO</option>
						<option value="odontologia">ODONTOLOGIA</option>
						<option value="pedagogia">PEDAGOGIA</option>
						<option value="psicologia">PSICOLOGIA</option>
						<option value="quimica">QUÍMICA</option>
						<option value="quimicatecnologica">QUÍMICA TECNOLÓGICA</option>
						<option value="relacoesinternacionais">RELAÇÕES INTERNACIONAIS</option>
						<option value="saudecoletiva">SAÚDE COLETIVA</option>
						<option value="servicosocial">SERVIÇO SOCIAL</option>
						<option value="teatro">TEATRO</option>
						<option value="historiadaarte">TEORIA CRÍTICA E HISTÓRIA DA ARTE</option>
						<option value="turismo">TURISMO</option>
					</select>
					<span class='msg-erro msg-course'></span>
				</div>

				<div class="form-group">
					<label for="gender">*Sexo</label>
					<select class="form-control" name="gender" id="gender">
						<option value="">Selecione o Sexo</option>
						<option value="F">Feminino</option>
						<option value="M">Masculino</option>
					</select>
					<span class='msg-erro msg-gender'></span>
				</div>

				<div class="form-group">
					<label for="birthday">Data de Nascimento</label>
					<input type="date" class="form-control" id="birthday" name="birthday">
					<span class='msg-erro msg-birthday'></span>
				</div>

				<div class="form-group">
					<label for="phone">Celular</label>
					<input type="phone" class="form-control" id="phone" maxlength="13" name="phone" placeholder="Informe o Celular">
					<span class='msg-erro msg-phone'></span>
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
