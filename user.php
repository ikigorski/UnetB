<?php

class User {
	private $name;
	private $email;
	private $matricula;
	private $password;
	private $curso;
	private $birthday;
	private $phone;
	private $gender;
	//posts deveriam ficar em outro arquivo?
	$name = $_POST['name'];
	$email = $_POST['email'];
	$matricula = $_POST['matricula'];
	$password = $_POST['password'];
	$curso = $_POST['curso'];
	$birthday = $_POST['birthday'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	
	
	public function set_name ($name){
	$this -> name = $name;
	}

	public function set_email ($email){
	$this -> email = $email;
	}

	public function set_matricula ($matricula){
	$this -> matricula = $matricula;
	}

	public function set_password ($password){
	$this -> password = $password;
	}

	public function set_curso ($curso){
	$this -> curso = $curso;
	}
	
	public function set_birthday ($birthday){
	$this -> birthday = $birthday;
	}
	
	public function set_phone ($phone){
	$this -> phone = $phone;
	}

	public function set_gender ($gender){
	$this -> password = $gender;
	}


	public function get_name (){
	return $this -> nome;
	}

	public function get_email (){
	return $this -> email;
	}

	public function get_matricula (){
	return $this -> matricula;
	}

	public function get_password (){
	return $this -> password;
	}

	public function get_curso (){
	return $this -> curso;
	}

	public function get_birthday (){
	return $this -> birthday;
	}

	public function get_phone (){
	return $this -> phone;
	}

	public function get_gender (){
	return $this -> gender;
	}
 
	public function __constructor ($name, $email, $matricula, $password, $curso, $birthday, $phone, $gender){
	$this -> name = $name;
	$this -> email = $email;
	$this -> matricula = $matricula;
	$this -> password = $password;
	$this -> curso = $curso;
	$this -> birthday = $birthday;
	$this -> phone = $phone;
	$this -> gender = $gender;
	}
	
	public function save()
	{
                
		$con = mysql_connect("localhost", "usuario", "0000") or 
			die('Nao foi possivel');

			
		mysql_select_db("UnetB",$con);
                	  

		mysql_query("INSERT INTO UnetB (name, email, matricula, password, curso, birthday, phone, gender) VALUES (this->$name, this->$email, this->$matricula, this->$password, this->$curso, this->$birthday, this->$phone, this->$gender) ");

		mysql_close($con);

	}

}

?>
