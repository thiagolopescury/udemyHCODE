<?php

$conn = new mysqli("localhost", "root", "", "bdphp7");
if ($conn->connect_error){

    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tbl_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $senha);

$login = "user";
$senha = "123456";

$stmt->execute();

$login = "root";
$pass = "@#!@#!@";

$stmt->execute();

printf("%d Row inserted.\n", $stmt->affected_rows);

/* close statement and connection */
$stmt->close();

?>