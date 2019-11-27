<?php 

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($frenar);
    public function trocarMarcha($trocarMarcha);
    
}

class Civic implements Veiculo{
    public function acelerar($velocidade)
    {
        echo " o veiculo acelerou ate" . $velocidade ;
    }

    public function frenar($frenar)
    {
        echo " o veiculo frenou ate " . $frenar ;


    }

    public function trocarMarcha($trocarMarcha)
    {
        echo " o veiculoengatou a marcha " . $trocarMarcha ;
    }
}

$carro = new Civic();

$carro->trocarMarcha(1);
?>