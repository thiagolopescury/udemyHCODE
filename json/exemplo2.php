<?php

$json = '[{"nome":"Thiago","idade":26},{"nome":"Henrique","idade":25}]';

$data = json_decode($json, true);
var_dump($data);

?>