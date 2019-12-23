<?php

interface Veiculo
{
    public function acelerar($velocidade);
    public function frenar($frenar);
    public function trocarMarcha($trocarMarcha);
}

abstract class Automovel implements Veiculo
{
    public function acelerar($velocidade)
    {
        echo " o veiculo acelerou ate" . $velocidade;
    }

    public function frenar($frenar)
    {
        echo " o veiculo frenou ate " . $frenar;
    }

    public function trocarMarcha($trocarMarcha)
    {
        echo " o veiculoengatou a marcha " . $trocarMarcha;
    }
}

class DelRey extends Automovel
{
    public function empurrar()
    {
    }
}

$carro = new DelRey();

$carro->acelerar(200);
