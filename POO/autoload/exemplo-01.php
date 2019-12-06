<?php
function  __autoload($nomeClasse){
    require_once("$nomeClasse.php");
}
//require_once("DelRey.php");
$carro = New DelRey();

$carro->acelerar(90);

?>