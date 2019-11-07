<?php
//1. Escreva um	 programa para	ler	 2	valores (considere que não serão	
//informados valores iguais) e escreve o maior deles



$numero1=10;
$numero2=20;

if ($numero1 > $numero2) {
    echo $numero1;
}else{
    echo $numero2;
}

echo"<br>";

//Questao 2

$anoNascimento = 1993;
$anoAtual = date('o');
intval($anoAtual);
$idade = $anoAtual - $anoNascimento;

if ($idade >=16) {
   echo"Pode votar ";
}else{
    echo"Não pode votar ";
}

?>

