<?php 

$conn = new mysqli("localhost", "root", "root", "dbphp7");

if ($conn->connect_error)
{
    echo "Error: ".$conn;
    exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (?, ?)");

// statement
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "123456";

$stmt->execute();

$login = "root";
$pass = "!?#$";

$stmt->execute();

?>

