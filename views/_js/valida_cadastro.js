/* Atribui ao evento submit do formulário a função de validação de dados */
var form = document.getElementById("form-contato");
if (form.addEventListener) {                   
    form.addEventListener("submit", validaCadastro);
} else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", validaCadastro);
}

/* Atribui ao evento keypress do input matricula a função para formatar a matricula (00/0000000) */
var inputMatricula = document.getElementById("matricula");
if (inputMatricula.addEventListener) {                   
    inputMatricula.addEventListener("keypress", function(){mascaraTexto(this, '##/#######')});
} else if (inputMatricula.attachEvent) {                  
    inputMatricula.attachEvent("onkeypress", function(){mascaraTexto(this, '##/########')});
}

/* Função para validar os dados antes da submissão dos dados */
function validaCadastro(evt){
	var name = document.getElementById('name');
	var email = document.getElementById('email');
	var matricula = document.getElementById('matricula');
	var password = document.getElementById('password');
	var filtro_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var filtro_name = /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ' ]+$/;
	var filtro_matricula = /^[0-9 /]+$/;
	var contErro = 0;


	/* Validação do campo name */
	caixa_name = document.querySelector('.msg-name');
	if(name.value.length != 0){
		if(name.value.length < 3){
			caixa_name.innerHTML = "O nome deve conter no mínimo 3 letras";
			caixa_name.style.display = 'block';
			contErro += 1;
		}else if(!filtro_name.test(name.value)){
			caixa_name.innerHTML = "O nome deve conter apenas letras";
			caixa_name.style.display = 'block';
			contErro += 1;
		}else{
			caixa_name.style.display = 'none';
		}
	}


	/* Validação do campo email */
	caixa_email = document.querySelector('.msg-email');
	if(email.value == ""){
		caixa_email.innerHTML = "Favor preencher o E-mail";
		caixa_email.style.display = 'block';
		contErro += 1;
	}else if(!filtro_email.test(email.value)){
		caixa_email.innerHTML = "E-mail no formato inválido";
		caixa_email.style.display = 'block';
		contErro += 1;
	}else{
		caixa_email.style.display = 'none';
	}

	/* Validação do campo Matrícula*/
	caixa_matricula = document.querySelector('.msg-matricula');
	if(matricula.value.length != 0){
		if(matricula.value.length != 10){
			caixa_matricula.innerHTML = "Favor preencher a Matrícula por completo";
			caixa_matricula.style.display = 'block';
			contErro += 1;
		}else if(!filtro_matricula.test(matricula.value)){
			caixa_matricula.innerHTML = "Favor preencher a Matrícula usando apenas números";
			caixa_matricula.style.display = 'block';
			contErro += 1;
		}else{
			caixa_matricula.style.display = 'none';
		}
	}

	/* Validação do campo password*/
	caixa_password = document.querySelector('.msg-password');
	if(password.value == ""){
		caixa_password.innerHTML = "Favor preencher a senha";
		caixa_password.style.display = 'block';
		contErro += 1;
	}else if(password.value.length < 6){
		caixa_password.innerHTML = "Senha deve ter no mínimo 6 caracteres";
		caixa_password.style.display = 'block';
		contErro += 1;
	}else{
		caixa_password.style.display = 'none';
	}


	if(contErro > 0){
		evt.preventDefault();
	}
}

/* Função para formatar dados conforme parâmetro enviado, DATA e CELULAR */
function mascaraTexto(t, mask){
	var i = t.value.length;
	var saida = mask.substring(1,0);
	var texto = mask.substring(i);

	if (texto.substring(0,1) != saida){
		t.value += texto.substring(0,1);
	}
}