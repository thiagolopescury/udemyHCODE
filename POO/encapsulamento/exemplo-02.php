<?php

class Pessoa {
    public $nome = "Thiago Lopes Cury";
    protected $idade = 26;
    private $senha = "123456789";

    public function verDados(){
        echo $this ->nome . "<br>";
        echo $this ->idade . "<br>";
        echo $this ->senha . "<br>";
    }
}

class Programador extends Pessoa{
    public function verDados(){
        echo get_class($this) . "<br> ";

        echo $this ->nome . "<br>";
        echo $this ->idade . "<br>";
        echo $this ->senha . "<br>";
    }
}

$pessoa = new Programador();

$pessoa->verDados();  
?>