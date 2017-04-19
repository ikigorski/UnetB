<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UNetB - Cadastro</title>
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
</head>

<body>

	<div class="wrapper">

	<?php
		include "header.inc";
	?>
	<div class='container'>
		
			<legend><h1>Cadastro de Cliente</h1></legend>

			<form action="../usercontrol.php" method="post" id='form-contato' enctype='multipart/form-data'>

				<div class="row">
					<label for="nome">Selecionar Foto</label>
					<div class="col-md-2">
						<a href="#" class="thumbnail">
							<img src="images/standard_profile_image.jpg" height="190" width="150" id="foto-cliente">
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
						<option value="Administração">ADMINISTRAÇÃO</option>
						<option value="Agronomia">AGRONOMIA</option>
						<option value="Arquitetura">ARQUITETURA E URBANISMO</option>
						<option value="Arquivologia">ARQUIVOLOGIA</option>
						<option value="Artes Cênicas">ARTES CÊNICAS</option>
						<option value="Artes Visuais">ARTES VISUAIS</option>
						<option value="Biblioteconomia">BIBLIOTECONOMIA</option>
						<option value="Biotecnologia">BIOTECNOLONIA</option>
						<option value="Ciência Da Computação">CIÊNCIA DA COMPUTAÇÃO</option>
						<option value="Ciência Política">CIÊNCIA POLÍTICA</option>
						<option value="Ciências Ambientais">CIÊNCIAS AMBIENTAIS</option>
						<option value="Ciências Contábeis">CIÊNCIAS CONTÁBEIS</option>
						<option value="Ciências Econômicas">CIÊNCIAS ECONÔMICAS</option>
						<option value="Ciências Naturais">CIÊNCIAS NATURAIS</option>
						<option value="Ciências Sociais">CIÊNCIAS SOCIAIS</option>
						<option value="Computação">COMPUTAÇÃO</option>
						<option value="Comunicacão Social">COMUNICAÇÃO SOCIAL</option>
						<option value="Design">DESIGN</option>
						<option value="Direito">DIREITO</option>
						<option value="Educacão Artística">EDUCAÇÃO ARTÍSTICA</option>
						<option value="Educacão Do Campo">EDUCAÇÃO DO CAMPO</option>
						<option value="Educação Física">EDUCAÇÃO FÍSICA</option>
						<option value="Enfermagem">ENFERMAGEM</option>
						<option value="Engenharia Ambiental">ENGENHARIA AMBIENTAL</option>
						<option value="Engenharia Civil">ENGENHARIA CIVIL</option>
						<option value="Engenharia De Computação">ENGENHARIA DE COMPUTAÇÃO</option>
						<option value="Engenharia De Produção">ENGENHARIA DE PRODUÇÃO</option>
						<option value="Engenharia De Redes">ENGENHARIA DE REDES DE COMUNICAÇÃO</option>
						<option value="Engenharia Elétrica">ENGENHARIA ELÉTRICA</option>
						<option value="Engenharia Florestal">ENGENHARIA FLORESTAL</option>
						<option value="Engenharia Mecânica">ENGENHARIA MECÂNICA</option>
						<option value="Engenharia Mecatrônica">ENGENHARIA MECATRÔNICA</option>
						<option value="Engenharia Química">ENGENHARIA QUÍMICA</option>
						<option value="Estatística">ESTATÍSTICA</option>
						<option value="Farmácia">FARMÁCIA</option>
						<option value="Filosofia">FILOSOFIA</option>
						<option value="Física">FÍSICA</option>
						<option value="Geofísica">GEOFÍSICA</option>
						<option value="Geografia">GEOGRAFIA</option>
						<option value="Geologia">GEOLOGIA</option>
						<option value="Gestão Ambiental">GESTÃO AMBIENTAL</option>
						<option value="Gestão De Agronegócios">GESTÃO DE AGRONEGÓCIOS</option>
						<option value="Gestão De Políticas Públicas">GESTÃO DE POLÍTICAS PÚBLICAS</option>
						<option value="História">HISTÓRIA</option>
						<option value="Jornalismo">JORNALISMO</option>
						<option value="Letras">LETRAS</option>
						<option value="Letras - Tradução">LETRAS - TRADUÇÃO</option>
						<option value="Letras - Tradução Espanhol">LETRAS - TRADUÇÃO ESPANHOL</option>
						<option value="Libras">LIBRAS</option>
						<option value="Lingua Entrangeira Aplicada">LINGUA ESTRANGEIRA APLICADA</option>
						<option value="Matemática">MATEMÁTICA</option>
						<option value="Medicina">MEDICINA</option>
						<option value="Medicina Veterinária">MEDICINA VETERINÁRIA</option>
						<option value="Museologia">MUSEOLOGIA</option>
						<option value="Música">MÚSICA</option>
						<option value="Nutrição">NUTRIÇÃO</option>
						<option value="Odontologia">ODONTOLOGIA</option>
						<option value="Pedagogia">PEDAGOGIA</option>
						<option value="Psicologia">PSICOLOGIA</option>
						<option value="Química">QUÍMICA</option>
						<option value="Química Tecnológica">QUÍMICA TECNOLÓGICA</option>
						<option value="Relacões Internacionais">RELAÇÕES INTERNACIONAIS</option>
						<option value="Saúde Coletiva">SAÚDE COLETIVA</option>
						<option value="Serviço Social">SERVIÇO SOCIAL</option>
						<option value="Teatro">TEATRO</option>
						<option value="Teoria Crítica E História Da Arte">TEORIA CRÍTICA E HISTÓRIA DA ARTE</option>
						<option value="Turismo">TURISMO</option>
					</select>
					<span class='msg-erro msg-course'></span>
				</div>

				<div class="form-group">
					<label for="gender">*Sexo</label>
					<select class="form-control" name="gender" id="gender">
						<option value="">Selecione o Sexo</option>
						<option value="F">Feminino</option>
						<option value="M">Masculino</option>
						<option value="O">Outros</option>
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
			include "footer.inc";
		?>
	</div>


</body>
	<script type="text/javascript" src="js/valida_cadastro.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>
