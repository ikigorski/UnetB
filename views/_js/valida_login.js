/* Atribui ao evento submit do formulário a função de validação de dados */
var form = document.getElementById("form-contato");
if (form.addEventListener) {                   
    form.addEventListener("submit", validaCadastro);
} else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", validaCadastro);
}

/* Função para validar os dados antes da submissão dos dados */
function validaCadastro(evt){
	
	var email = document.getElementById('email');
	var login = document.getElementById('login');
	var password = document.getElementById('password');
	var filtro_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var contErro = 0;

	/* Validação do campo email */
	caixa_email = document.querySelector('.msg-email');
	if(email.value == ""){
		caixa_email.innerHTML = "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> Favor preencher o E-mail";
		caixa_email.style.display = 'block';
		contErro += 1;
	}else if(!filtro_email.test(email.value)){
		caixa_email.innerHTML = "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> E-mail no formato inválido";
		caixa_email.style.display = 'block';
		contErro += 1;
	}else{
		caixa_email.style.display = 'none';
	}

	/* Validação do campo password*/
	caixa_password = document.querySelector('.msg-password');
	if(password.value == ""){
		caixa_password.innerHTML = "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> Favor preencher a senha";
		caixa_password.style.display = 'block';
		contErro += 1;
	}else if(password.value.length < 6){
		caixa_password.innerHTML = "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> Senha deve ter no mínimo 6 caracteres";
		caixa_password.style.display = 'block';
		contErro += 1;
	}else{
		caixa_password.style.display = 'none';
	}
	
	caixa_login = document.querySelector('.msg-login');
	caixa_login.style.display = 'none';
	if(contErro > 0){
		evt.preventDefault();
	}
}