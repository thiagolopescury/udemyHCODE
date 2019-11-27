<?php 

class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }
}

class CPF extends Documento{
    public function validarCPF() :bool
    {
        $numeroCPF = $this->getNumero();
        return true;
    }
}

$doc = new CPF();

$doc->setNumero("1234569632-20");
var_dump($doc->validarCPF());

echo "<br>";

echo $doc->getNumero();
?>