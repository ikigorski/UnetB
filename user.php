<?php

class User {
	
	private $name;
	private $email;
	private $matricula;
	private $password;
	private $course;
	private $birthday;
	private $phone;
	private $gender;
	
	
	
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

	public function set_course ($course){
		$this -> course = $course;
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

	public function get_course (){
	return $this -> course;
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

	public function __construct ($name, $email, $matricula, $password, $course, $birthday, $phone, $gender){
	$this->name = $name;
	$this->email = $email;
	$this->matricula = $matricula;
	$this->password = $password;
	$this->course = $course;
	$this->birthday = $birthday;
	$this->phone = $phone;
	$this->gender = $gender;
	}
	
	public function save()
	{

		$con = mysqli_connect("127.0.0.1", "root", "", "unetb");

		mysqli_query($con,"INSERT INTO alunos (name, email, matricula, password, course, birthday, phone, gender) 
								VALUES ('{$this->name}','{$this->email}','{$this->matricula}','{$this->password}','{$this->course}','{$this->birthday}','{$this->phone}','{$this->gender}')
					");	

		mysqli_close($con);

	}

}

  $obj = new User($_POST['name'], $_POST['email'], $_POST['matricula'], $_POST['password'], $_POST['course'], $_POST['birthday'], $_POST['phone'] ,$_POST['gender']);

  	var_dump($obj);
  	$obj->save();

?>
