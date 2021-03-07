<?php 

$conn = new PDO("mysql:host=db;dbname=mydb", "root", "toor");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id = :ID");

$id = 8;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado com sucesso!";

?>