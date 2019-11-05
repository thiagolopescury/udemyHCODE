<?php
$numero1 = (int)$_GET["a"];
$numero2 = (int)$_GET["b"];
$resultado =  $numero1 + $numero2;
//var_dump($resultado);

// variavel global para pegar o ip do usuario

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
?>