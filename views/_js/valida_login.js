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
	var password = document.getElementById('password');
	var filtro_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
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
	
	caixa_login = document.querySelector('.msg-login');
	caixa_login.style.display = 'none';
	
	if(contErro > 0){
		evt.preventDefault();
	}
}

/* Função para formatar as mansagens de erro*/
function formataErro(elemento,texto){
	elemento.innerHTML = "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>" + texto;
	elemento.style.padding ="5px";
	elemento.style.border ='1px solid #ebccd1';
	elemento.style.display = 'block';
	elemento.style.borderRadius = '4px';
}