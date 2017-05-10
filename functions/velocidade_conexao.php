<? 
	set_time_limit(0);	
	
	$time_start= microtime(true);

	$conteudo=file_get_contents('archives_connectionspeed/800Kb.txt');
	$tamanho_KB= (strlen($conteudo)/1024);

	$time_end = microtime(true);
	


	$tempo_utilizado = number_format(($time_end - $time_start),3, "." ,",");
	$velocidade = round($tamanho_KB/$tempo_utilizado,2);
	

	
	echo 'Sua velocidade de conexão é de: '.$velocidade.' Kbps 
	 <br> Foram enviados: '.$tamanho_KB.' Kb 
	 <br> Tempo utilizado: '.$tempo_utilizado.' Segundos 
	 <hr>';
?>
