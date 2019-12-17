<?php

$conn = new PDO("mysql:dbname=bdphp7;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tbl_usuarios WHERE id= :ID");

$id = 2;

$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Deletado  , OK";
?>