<?php

class Pessoa
{
    public $nome; //atributo
    public $idade;

    public function falar()
    { //metodo
        return " O meu nome é" . " " . $this->nome . " " .
            "e eu tenho" . " " .  $this->idade . " " . "Anos";
    }
}

$thiago = new Pessoa(); //objeto

$thiago->nome = "Thiago Lopes";
$thiago->idade = 19;

echo $thiago->falar();
?>
