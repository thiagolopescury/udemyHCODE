<?php 

$condicao = true;

while ($condicao) {
    $numero = rand(1,10);

    if ($numero === 3) {
        echo "Tres é seu numero da sorte amigo";
        $condicao = false;
        break;
    }
    echo $numero . " ";
}
?>