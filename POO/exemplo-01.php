<?php

class Pessoa{
    public $nome; //atributo

    public function falar(){//metodo
        return " O meu nome é" . " " . $this->nome;
    }
}

$thiago = new Pessoa();

$thiago->nome = "Thiago Lopes";

echo $thiago->falar();


?>