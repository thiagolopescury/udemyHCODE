<?php

$conn = new PDO("mysql:dbname=bdphp7;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tbl_usuarios(deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "Thiago";
$senha = "123456789";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $senha);
$stmt->execute();

echo "Dados inseridos, OK";
?>