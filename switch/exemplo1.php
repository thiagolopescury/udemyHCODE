<?php 

$hoje = date("w");


switch ($hoje) {
    case '0':
        echo "Hoje é Domingo";
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
        echo "Hoje é Sexta-Feira";
        break;

    default:
        echo "Hoje é Sabado";
        break;
}





?>
