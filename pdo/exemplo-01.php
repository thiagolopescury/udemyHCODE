<?php

$conn = new PDO("mysql:dbname=bdphp7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tbl_usuarios");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>".$key.":</strong>".$value."<br>";
    }

    echo "=====================================<br>";
}

?>