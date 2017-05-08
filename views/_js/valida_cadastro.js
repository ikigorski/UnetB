/* Atribui ao evento submit do formulário a função de validação de dados */
var form = document.getElementById("form-contato");
if (form.addEventListener) {                   
    form.addEventListener("submit", validaCadastro);
} else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", validaCadastro);
}

/* Função para validar os dados antes da submissão dos dados */
function validaCadastro(evt){
	var name = document.getElementById('name');
	var email = document.getElementById('email');
	var password = document.getElementById('password');
	var confpass = document.getElementById('confpass');
	var filtro_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var filtro_name = /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ' ]+$/;
	var contErro = 0;

	/* Validação do campo email */
	caixa_email = document.querySelector('.msg-email');
	if(email.value == ""){
		formataErro(caixa_email," Favor preencher o E-mail.");
		contErro += 1;
	}else if(!filtro_email.test(email.value)){
		formataErro(caixa_email," E-mail no formato inválido.");
		contErro += 1;
	}else{
		caixa_email.style.display = 'none';
	}

	/* Validação do campo password*/
	caixa_password = document.querySelector('.msg-password');
	if(password.value == ""){
		formataErro(caixa_password," Favor preencher a senha.");
		contErro += 1;
	}else if(password.value.length < 6){
		formataErro(caixa_password," Senha deve ter no mínimo 6 caracteres.");
		contErro += 1;
	}else{
		caixa_password.style.display = 'none';
	}

	/* Confirmar senha*/
	caixa_confpass = document.querySelector('.msg-confpass');
	if(confpass.value == ""){
		formataErro(caixa_confpass," Favor preencher a confirmação de senha.");
		contErro += 1;
	}else if(confpass.value != password.value){
		formataErro(caixa_confpass," As senhas são diferentes.");
		contErro += 1;
	}else{
		caixa_confpass.style.display = 'none';
	}

	/* Validação do campo name */
	caixa_name = document.querySelector('.msg-name');
	caixa_name.style.display = 'none';
	if(name.value.length != 0){
		if(name.value.length < 3){
			formataErro(caixa_name," O nome deve conter no mínimo 3 letras.");
			contErro += 1;
		}else if(!filtro_name.test(name.value)){
			formataErro(caixa_name," O nome deve conter apenas letras.");
			caixa_name.style.display = 'block';
			contErro += 1;
		}else{
			caixa_name.style.display = 'none';	
		}
	}

	caixa_cadastro = document.querySelector('.msg-cadastro');
	caixa_cadastro.style.display = 'none';

	if(contErro > 0){
		evt.preventDefault();
	}
}		
/* Função para formatar as mansagens de erro*/
function formataErro(elemento,texto){
	elemento.innerHTML = "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>" + texto;
	elemento.style.color = '#a94442';
	elemento.style.backgroundColor = '#f2dede';
	elemento.style.padding ="2px";
	elemento.style.border ='1px solid #ebccd1';
	elemento.style.display = 'block';
	
}

/* Função para formatar as mansagens de sucesso*/
function formataSuccess(elemento,texto){
	elemento.innerHTML = "<span class='glyphicon glyphicon glyphicon-ok' aria-hidden='true'></span>" + texto;
	elemento.style.color = '#3c763d';
	elemento.style.backgroundColor = '#dff0d8';
	elemento.style.padding ="2px";
	elemento.style.border ='1px solid #d6e9c6';
	elemento.style.display = 'block';
	
}

var url = window.location.search;

if(url == "?email"){	
	caixa_cadastro = document.querySelector('.msg-cadastro');
	formataErro(caixa_cadastro,' E-mail já cadastrado.');

}else if(url == "?error"){
	caixa_cadastro = document.querySelector('.msg-cadastro');
	formataErro(caixa_cadastro,' Erro interno ao realizar o cadastro.');

}else if(url == "?success"){
	caixa_cadastro = document.querySelector('.msg-cadastro');
	formataSuccess(caixa_cadastro,' Cadastro realizado com sucesso.');
	window.setTimeout("location.href='login-view.php'",4000);

}