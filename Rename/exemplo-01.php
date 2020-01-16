<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1); // Comando para criar diretorios  
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) { //Se não exitir o arquivo, cria ele na diretorio 01
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);
}

rename( // passar como parametros de onde esta para aonde vai
    $dir1 . DIRECTORY_SEPARATOR . $filename, //Origem
    $dir2 . DIRECTORY_SEPARATOR . $filename //destino
);

echo "Arquivo movido com sucesso ";