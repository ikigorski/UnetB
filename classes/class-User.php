<?php

class User{
	
	private $name;
	private $email;
	private $matricula;
	private $password;	
	
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


	public function __construct ($name, $email, $matricula, $password){
		$this->name = $name;
		$this->email = $email;
		$this->matricula = $matricula;
		$this->password = $password;
	}
	
	public function save(){
		
		global $con;
		$teste = mysqli_query($con,"INSERT INTO user (name, email, matricula, password) VALUES ('{$this->name}','{$this->email}','{$this->matricula}','{$this->password}')");
	}
}
?>