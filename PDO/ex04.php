<?php 

$conn = new PDO("mysql:host=db;dbname=mydb", "root", "toor");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD
                        WHERE id = :ID");

$login = "Joao";
$password = "qwerty";
$id = 8;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado com sucesso!";

?>