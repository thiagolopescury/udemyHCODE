<?php

$conn = new PDO("mysql:dbname=bdphp7;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tbl_usuarios SET deslogin = :LOGIN, dessenha =:PASSWORD WHERE id= :ID");

$login = "Badman";
$senha = "oiseusieujsi";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $senha);
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Alterado, OK";
?>