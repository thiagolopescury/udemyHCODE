<?php 
$nome = "Thiago";
function mostrarNome(){
    global $nome;
    echo $nome .  " ". "Essa é a função numero 1";
    echo "<br>";
}

function teste2(){
    $nome = "Andre";
    echo $nome."função numero 2";
}

mostrarNome();
teste2();
?>