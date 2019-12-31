<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql ->select("SELECT * FROM tbl_usuarios ORDER BY deslogin");

print_r($usuarios)

?>