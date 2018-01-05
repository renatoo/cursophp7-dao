<?php

require_once("config.php");

// $sql = new Sql();
//
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
//
// echo json_encode($usuarios);

//CARREGA UM USUÁRIO
// $root = new Usuario();
// $root->loadById(4);
//
// echo $root;

//CARREGA UMA LISTA
// $lista = Usuario::getList();
// echo json_encode($lista);

//CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN
// $search = Usuario::search("ma");
// echo json_encode($search);

//CARREGA UM USUÁRIO USANDO O LOGIN E A SENHA
// $usuario = new Usuario();
// $usuario->login("marzo", "bento45");
//
// echo $usuario;

//CRIAR UM NOVO USUÁRIO
// $aluno = new Usuario("student", "poi987");
// $aluno->insert();
//
// echo $aluno;

//ATUALIZAR USÁRIO
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("professor", "prof123");

echo $usuario;

 ?>
