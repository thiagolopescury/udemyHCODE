<?php

function soma(int ...$valores){
    return array_sum($valores);
}

echo soma(10,10,10,10,10);
echo"<br>";
echo soma(20,10);
echo"<br>";
echo soma(30,10);
echo"<br>";
?>