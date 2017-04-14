var attempt = 3; // número máximo de tentativas.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("email").value;
var password = document.getElementById("password").value;
if ( userEmail == "email" && userPassword == "password"{ alert ("E-mail ou senha incorretos."); // implementar funções, em .php que busca email e senha no database;
window.location = "welcome.php"; // página inicial do usuário apos login;
return false;
}
else{
attempt --;// Menos 1 tentativa;
alert("You have left "+attempt+" attempt;");
// Ao atingir o número máximo de tentativas a função é desabilitada.
if( attempt == 0){
document.getElementById("email").disabled = true;
document.getElementById("passsword").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
