<? 
set_time_limit(0); 
$tempo_micro[1]= microtime(); 
$q_espacos = explode(" ",$tempo_micro[1]); 
$tempo_[1]= $q_espacos[1]+$q_espacos[0]; 

$conteudo=file_get_contents('http://localhost/carregar_bytes.php'); /* mudar por path real (URL) http://seudominio/carregar_bytes.php)*/ 
$tamanho_KB= strlen($conteudo)/1024; 

$tempo_micro[2] = microtime(); 
$q_espacos= explode(" ",$tempo_micro[2]); 
$tempo_[2] =$q_espacos[1] + $q_espacos[0]; 
$tempo_utilizado = number_format(($tempo_[2] - $tempo_[1]),3, "." ,","); 

$velocidade= round($tamanho_KB/$tempo_utilizado,2); 
echo 'Sua velocidade de conexão é de: '.$velocidade.' Kbps <br> Foram enviados:'.$tamanho_KB. 
' Kb, Tempo utilizado: '.$tempo_utilizado.' Segundos <hr>'; 

for ($i=10; $i>=1; $i--){ 
$val_Kb=$i*100; 
if($velocidade>=800)$velocidade_=800; 
else $velocidade_=$velocidade/2; 

if($velocidade>=$val_Kb && !$col){ 
echo '<div style="background-color:#F0F0F0; width:500px; float:left"><img width="'.($velocidade_).'" height="8" style="background-color: #FF0000" border="0"></div><strong>Sua conexão</strong><br>'; 
$col=true; 
} 
echo '<div style="background-color:#F0F0F0; width:500px; float:left"><img width="'.($val_Kb/2).'" height="8" style="background-color: #000099" border="0"></div>'.$val_Kb.' Kbps<br>'; 
} 
?>
