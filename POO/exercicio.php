<?php

class Media{

    public $numero1;
    public $numero2;
    public $numero3;
    public $resultado;

    public function tirarMedia()
    {
        return $this->numero1 + $this->numero2 + $this->numero3;
    }
}

$med =new Media();

$med ->numero1 = 10;
$med ->numero2 = 10;
$med ->numero3 = 10;

echo $med->tirarMedia() /3 ;

?>