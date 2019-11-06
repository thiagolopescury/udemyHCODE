 <?php

$nome = "thiago lopes";
//deixando tudo maiusculo
$nome = strtoupper($nome);

echo $nome;
//deixando tudo minusculo
$nome = strtolower($nome);

echo "<br>";

echo $nome;

echo "<br>";
//deixando so a primeira letra maiuscula
echo ucfirst($nome);

echo "<br>";
//deixando a primeira letra de cada palavra maiuscula
echo ucwords($nome);

 ?>