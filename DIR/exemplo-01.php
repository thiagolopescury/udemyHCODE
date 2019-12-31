<?php

$name = "images";

if(!is_dir($name)){
    mkdir($name);
    echo " Diretorio $name criado com sucesso";
}else{

    
    echo "ja existe um diretorio com o nome $name foi removido";
}
 
 
?>