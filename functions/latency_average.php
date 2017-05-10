<?php
// Function to check response time -- vulgo latência
function pingDomain($domain){
    $starttime = microtime(true); 
    $file      = fsockopen ($domain, 80, $errno, $errstr, 10);
    $stoptime  = microtime(true);
    $status    = 0;
 
    if (!$file) $status = -1;  // Site is down
    else {
        fclose($file);
        $status = ($stoptime - $starttime) * 1000;
        $status = floor($status); // função para arredondar o valor numérico
    }
    return $status . ' ms';
}

$pings = array (); //criando um array para armazenar os resultados de pingDomain

for ( $i = 0; $i < 100; $i++) //laço for para preencher o array com 100 pings
{
   $pings[$i] = pingDomain("www.google.com"); // pingando um domínio qualquer
}

$media  = array_sum ($pings) / sizeof($pings); //aqui somamos todos os pings e dividimos pela quantidade de pings (tamanho do array)
echo $media. '<br>';


$jitter = array();

for($i = 0; $i < 100; $i++)
{
	$pings[$i] = $pings[$i] + "0"; //Tentando transformar os numeros de string para floats

    $num = pow(($pings[$i] - $media) , 2); //calculando um dos termos da variancia

	$jitter[$i] = floor($num); //atribuindo ao array na posicao i o valor da variancia
}

$jitter_total = sqrt(array_sum($jitter) / 100);//tirando raiz da soma de variancias dividida pelo numero de termos somados -- vulgo calculando desvio padrao = jitter

echo $jitter_total;

?>

