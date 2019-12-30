<?php

require_once("config.php");


/*CARREGA um Usuario
$root = new Usuario();
$root->loadById(3);
echo $root;
*/

//CARREGA UMA LISTA DE USUARIOS
//$lista = Usuario::getList();
//echo json_encode($lista);

//CARREGA uma lista de usuarios buscando pelo login
//$search = Usuario::search("ba");
//echo json_encode($search);

//CARREGA UM USUARIO  USANDO LOGIN E SENHA

//$usuario = new Usuario();
//$usuario->login("barata","sads");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("aluno","badmanboladao");
//$aluno->insert();
//echo $aluno;

//Alterar um usuario
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("Professor", "5465456");
//echo $usuario;


$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;
?>