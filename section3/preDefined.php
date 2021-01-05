<?php 

$name = (int)$_GET["a"];
$number = (int)$_GET["b"];

// var_dump($name);
// echo "<br>";
// var_dump($number);

$ip = $_SERVER["SCRIPT_NAME"];
$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

?>