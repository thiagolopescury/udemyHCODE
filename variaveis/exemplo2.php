<?php
$anoNascimento = 1993;
$nomeCompleto = "Thiago";
$sobrenome = "Lopes";

echo $nomeCompleto . " " . "$sobrenome";

echo "<br/>";

unset($nomeCompleto);

//verificando se a varivel $nomeCompleto esta setada
if (isset($nomeCompleto)) {
    echo $nomeCompleto;
}else{
    echo " Variavel não definida";
}
