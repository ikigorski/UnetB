<?php

//main
$files = array('102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf');
$tamanho = count($files);

send_archives_multiples_times();

//funçoes

function send_archives_multiples_times(){

	global $files, $tamanho;

	$speed_vector = array();
	$sh = create_socket();
	
	for($i = 0; $i < $tamanho ; $i++){
		
		$get_speed = array();
		$get_speed = send_archive($files[$i], $sh);
		$speed = $get_speed[1];
		
		$speed_vector[$i] = $speed;

	}
	staticts($speed_vector);
}

function create_socket(){

	$sh = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);

	if(socket_bind($sh, '127.0.0.1', 4242)){
		echo "Socket liga corretamente. <br/>";
	
	}else{
		echo "Soquete não liga corretamente. <br/>";
		exit(0);
	}

	if(socket_connect($sh, '127.0.0.1', 4242) == TRUE){
		echo "Socket conectado. <br/>";
	
	}else{
		echo "Socket não conectado. <br/>";
		exit(0);
	}
	return $sh;
}

function send_file($file , $size , $sh){

	if(socket_sendto($sh, $file, $size, 0x8, '127.0.0.1', 4242) == TRUE){
		$time_after_send = microtime(true);
		return $time_after_send;
	}

	else {
		echo "Mensagem não enviada. <br/>";
		exit(0);
	}
}

function send_archive($file_to_send , $sh){

	$file = file_get_contents('archives_connectionspeed/'.$file_to_send);
	$size = strlen($file)/1024; //megabytes

	$time_before_send = microtime(true);
	$time_after_send = send_file($file, $size, $sh);


	$total_time = $time_after_send - $time_before_send;


	$speed = $size/$total_time;
	$speed = $speed/1000; //milisegundos

	$size_and_speed = array($size, $speed);

	return $size_and_speed;
}

function staticts($speed_vector){
	
	$tam = count($speed_vector);
	$sum = 0;
	//fazer um vetor com todas as velocidades para ver a media	
	for($i = 0; $i < $tam ; $i++){
		
		$sum = $sum + $speed_vector[$i];		
	}
	$media = $sum/$tam;

	echo 'Media: '.number_format($media, 2, ',', '.');
}

?>