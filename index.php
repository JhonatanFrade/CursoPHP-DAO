<?php

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

// carrega um usuário
/*
$root = new Usuario();
$root->loadById(4);
echo $root;
*/

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","!@#$");
//echo $usuario;

//INSERT de um usuario novo
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");
//$aluno->insert();
//echo $aluno;

//diminuindo o código:
//$aluno = new Usuario("aluno", "@alun0");
//$aluno->insert();
//echo $aluno;

//acrescentando o UPDATE
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor","teste123");
//echo $usuario;

//acrescentando o DELETE
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
?>