<?php

function tabuada($numeroDaTabuada, $numero = 1)
{

    if ($numero <= 10) {

        echo $numeroDaTabuada . " x " . $numero . " = " . $numeroDaTabuada * $numero;
        echo "<br/>";

        $numero++;
        tabuada($numeroDaTabuada, $numero);
    }
}
echo tabuada(1);


