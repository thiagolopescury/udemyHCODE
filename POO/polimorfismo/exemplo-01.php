<?php

abstract class Animal {
    public function falar(){
        return "som";
    }

    public function mover(){
        return "Andar" ; 
    }

}

class Cachorro extends Animal{

    public function falar(){
        return "Latido";
    }
}

class Gato extends Animal{

    public function falar(){
        return "Miado";
    }
}

class Passaro extends Animal{

    public function falar(){
        return "canta";
    }

    public function mover(){
        return " O função do passaro é voar e  "  . parent ::mover();
    }
}

$pluto = new Cachorro();

echo $pluto->falar();

echo "<br>";

echo $pluto->mover();
echo "<br>";

echo "--------------------<br>";


$garfield = new Gato();

echo $garfield->falar();

echo "<br>";

echo $garfield->mover();

echo "<br>";

echo "--------------------<br>";

$valor = new Passaro();

echo $valor->falar();

echo "<br>";

echo $valor->mover();
echo "<br>";

echo "--------------------<br>";


?>