<?php
 // valores de parametros que não contem um valor padrão, SEMPRE  colocar primeiro 
 function Oi($letra, $periodo = "Bom dia"){
     return " Ola  $letra $periodo<br>";
 }

 echo oi("Thiago");
 echo oi("Lopes ", "Boa noite");
 echo oi("Cury", "Boa tarde");
 ?>