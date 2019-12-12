<?php

$conn = new mysqli("localhost", "root", "", "bdphp7");

 if ($conn->connect_error){

    echo "Error: " . $conn->connect_error;

}

$result = $conn->query("SELECT * FROM tbl_usuarios");

$data = array();

while ($row = $result->fetch_assoc()) {
    array_push($data , $row);
}

//Gerando um json
echo json_encode($data);
?>