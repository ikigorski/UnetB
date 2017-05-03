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
			$this->condb=mysqli_connect($this->host,$this->user,$this->password);
			
			if(!$this->con){

				echo "Falha na conexão com o Banco de Dados!<br/>";
				echo "Erro: " . mysqli_error();
				die();
			
			}elseif(!mysqli_select_db($this->database, $this->condb)){
				echo "O Bando de Dados solicitado não pode ser aberto!<br />";
				echo "Erro: " . mysqli_error();
				die();
			}
		}

		//Esta função executa uma Query
		function executeQuery($query){
			$this->connect();
			$this->query=$query;

			if($this->result=mysqli_query($this->query)){
				$this->disconnect(); 
				return $this->result;

			}else{
				echo "Ocorreu um erro na execução da SQL";
				echo "Erro :" . mysqli_error();
				echo "SQL: " . $query;
				die();
				disconnect();
			}
		}

		//Esta função desconecta do Banco
		function disconnect(){
			return mysqli_close($this->condb);
		}
	}
?>