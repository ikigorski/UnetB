function validate(){
var Email = document.getElementById('userEmail').value;
var Password = document.getElementById('userPassword').value;
if (Email == "teste@email.com" && Password == "teste"){
  window.location = "../public/netinfo.php";
  //alert ("Bem vindo(a)"); // implementar funções, em .php que busca email e senha no database;
 // página inicial do usuário apos login;
//  return false;
}
else{
alert("Senha ou E-mail incorretos");
// Ao atingir o número máximo de tentativas a função é desabilitada.
//if( attempt == 0){
//document.getElementById("userEmail").disabled = true;
//document.getElementById("userPassword").disabled = true;
//document.getElementById("submit").disabled = true;
//return false;
}
}
