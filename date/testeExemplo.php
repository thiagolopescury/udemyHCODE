<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo strftime("%A  %B");

echo "<br>";

$variable = strftime("%w");

switch ($variable) {
    case '0':
        echo "Hoje é domingo";
        break;

    case '1':
        echo "Hoje é Segunda-Feira";
        break;

    case '2':
        echo "Hoje é Terça-Feira";
        break;

    case '3':
        echo "Hoje é Quarta-Feira";
        break;

    case '4':
        echo "Hoje é Quinta-Feira";
        break;

    case '5':
        echo "Hoje é Sexta";
        break;

    case '6':
        echo "Hoje é Sabado";
        break;
}
