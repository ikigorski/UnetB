<?php

//main


send_archives_multiples_times();

//funçoes
function create_socket()
{
	$sh = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);

	 if (socket_bind($sh, '127.0.0.1', 4242)) 
	{
	        echo "Socket bound correctly";
    	}
	else {
		exit(0);
	     }

	if(socket_connect($sh, '127.0.0.1', 4242) == TRUE)
	{
	echo "Connected";
	}
	else {
		exit(0);
	     }
	return $sh;
}

function send_file($file , $size , $sh)
{

if(socket_sendto($sh, $file, $size, 0x8, '127.0.0.1', 4242) == TRUE) {	
	echo "Message sent";
	$time_after_send = microtime();
	return $time_after_send;
	}

else {
	exit(0);
     }
}


function send_archive($file_to_send , $sh)
{

$file = file_get_contents($file_to_send);
$size = strlen($file)/1024; //megabytes

$time_before_send = microtime();
$time_after_send = send_file($file, $size, $sh);
	


$total_time = $time_after_send - $time_before_send;


$speed = $size/$total_time;
$speed = $speed/1000; //milisegundos

$size_and_speed = array($size, $speed);

return $size_and_speed;
}

function staticts($speed_vector)
{
	$sum = 0;
	//fazer um vetor com todas as velocidades para ver a media	
	for($i = 0; $i < 10 ; $i++)
	{
		
		$sum_vec[$i] = $speed_vector[$i] + $speed_vector[$i++];
		$sum = $sum + $sum_vec[$i];		
	}
	$media = $sum/10;
	echo $media;
}




function send_archives_multiples_times()
{
$speed_vector = array();
$all_speeds_vector = array();
$sh = create_socket();
$files = array('102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf','102kb.php', '178kb.pdf','220kb.pdf', '606kb.pdf', '1.6mb.pdf', '1mb.pdf', '2mb.pdf', '3mb.pdf', '4mb.pdf','6.7mb.pdf') ;

echo 'tam:   ';
$result = count($files);
echo $result;			
		for($i = 0; $i < 750 ; $i++)
		{
			
			$get_speed = array();			
			$get_speed = send_archive($files[$i], $sh);			
			$speed = $get_speed[1];
			
			$speed_vector[$i] = $speed;
						
		}	

staticts($speed_vector);
}






?>
