<?php

$conn = new PDO("mysql:dbname=bdphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tbl_usuarios WHERE id= :ID");

$id = 4;

$stmt->bindParam(":ID", $id);


$stmt->execute();

//$conn->rollBack();
$conn->commit();
echo "Deletado  , OK";
?>