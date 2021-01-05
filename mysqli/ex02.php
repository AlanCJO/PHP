<?php 

$conn = new mysqli("localhost", "root", "root", "dbphp7");

if ($conn->connect_error)
{
    echo "Error: ".$conn;
    exit;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = [];
// $data = array();

while ($row = $result->fetch_assoc())
{
    array_push($data, $row);
}

echo json_encode($data);

/*
while ($row = $result->fetch_object())
{
    var_dump($row);
    echo "<br/><br/>";
}
*/

?>