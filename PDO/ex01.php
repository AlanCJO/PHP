<?php 

ini_set('error_reporting', E_ALL);

$conn = new PDO("mysql:dbname=mydb;host=db", "root", "toor");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) 
{
    foreach ($row as $key => $value)
    {
        echo "<strong>".$key.": </strong>".$value."<br/>";
    }
    echo "======================================="."<br/>";
}

?>