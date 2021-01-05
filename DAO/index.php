<?php 

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios)
// $root = new Usuario();
// $root->loadbyId(4);
// echo $root;

// $lista = Usuario::getList();
// echo json_encode($lista);

// Carega uma lista de usuários buscando pelo login 
// $search = Usuario::search("jo");
// echo json_encode($search);

// $usuario = new Usuario();
// $usuario-> login("user", "123456");
// echo $usuario;

// Criando um novo usuário
// $aluno = new Usuario("aluno", "@lun0");

// $aluno->setDeslogin("aluno");
// $aluno->setDesenha("@lun0");

// $aluno->insert();

// echo $aluno;

$usuario = new Usuario();

$usuario->loadById(4);

$usuario->update("joao", "123");

echo $usuario;

?>