<?php
	function b_hash ($password){ //função geradora de HASH para as senhas
		if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH){ // o método utilizado é o BLOWFISH
			
			$salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22); // gerando um salt aleatório para evitar colisões de hash e aumentar a segurança
			return crypt($password, $salt);
		}
	}


	function verify($password, $hashedPassword){
		
		return crypt($password, $hashedPassword) == $hashedPassword;
	}
?>