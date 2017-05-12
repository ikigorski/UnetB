<?php


$kb1 = 100;
$kb2 = 200;
$kb3 = 400;
$kb4 = 800;
$kb5 = 1000;
$kb6 = 2000;
$kb7 = 10000;
$kb8 = 20000;

$kbm = (($kb1 + $kb2 + $kb3 + $kb4 + $kb5 + $kb6 + $kb7 + $kb8) / 8);
echo "streaming $kbm Kb...<!-";
flush();
$time = explode(" ",microtime());
$start = $time[0] + $time[1];
for($x=0;$x<$kb;$x++)
{
    echo str_pad('', 1024, '.');
    flush();
}
$time = explode(" ",microtime());
$finish = $time[0] + $time[1];
$deltat = $finish - $start;
echo "-> Test finished in $deltat seconds. Your speed is ". round($kbm / $deltat, 3)."Kb/s";
?>

