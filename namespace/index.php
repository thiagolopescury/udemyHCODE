<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Thiago Lopes");
$cad->setEmail("thiagolopescury@hotmail.com");
$cad->setSenha("123456798");

$cad->registrarVenda();
?>