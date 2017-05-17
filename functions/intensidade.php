<?php
function checkPacketLoss() {

	// Comando ping -c que retorna informações sobre pacotes de dados, como pacotes transmitidos, recebidos e perdidos;

    $command = 'iwconfig | grep "Signal level"';

    //Executa comando na máquina para pegar a intensidade do sinal de WiFi.

    $output = shell_exec($command);

    echo getSignalLevel($output); exit;
    // a função preg_match retorna um valor para saber se obtivemos sucesso ou não na busca. Neste casso ela irá procurar no resultado do comando acima a porcentagem de perda de pacotes, e armazená-la na variável martch.

   {

        // Se houver compatibilidade na procura
      //AQUIIIIIIIIIIIIIII ------>>>>>>  $packetLoss = (float)$match[1];
    	//
        throw new \Exception('Packet loss not found.');
    }

    return $packetLoss;
}

// Usaremos o servidor local para testes com contagem 40;
echo checkPacketLoss();

function getSignalLevel($unix_result) {
  return substr($unix_result, strpos($unix_result, '-'), strlen($unix_result) -60);
}

?>