<?php 

$pessoas  = array();
array_push($pessoas,array(
    'nome' => 'Thiago',
    'idade'=> 26
));

array_push($pessoas,array(
    'nome' => 'Henrique',
    'idade'=> 25
));

echo json_encode($pessoas);
?>