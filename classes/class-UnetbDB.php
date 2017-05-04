<?php 

	class MySQL{
		var $host="127.0.0.1";
		var $user="root";
		var $password="";
		var $database="unetb";
	
		var $query;
		var $condb;
		var $result;
	
		function MySQL(){
			//Apenas instancia o Objeto
		}
	
		//Esta função faz a conexão com o Banco de Dados
		function connect(){

			$this->condb=mysqli_connect($this->host,$this->user,$this->password,$this->database);
				
			if(!$this->condb){
				echo "Falha na conexão com o Banco de Dados!";
				exit;
			}			
		}

		//Esta função executa uma Query
		function executeQuery($query){
			$this->connect();
			$this->query=$query;

			if($this->result=mysqli_query($this->condb,$this->query)){
				
				return $this->result;

			}else{				
				return false;
				exit;
			}
		}

		//Esta função desconecta do Banco
		function disconnect(){
			return mysqli_close($this->condb);
		}
	}
?>