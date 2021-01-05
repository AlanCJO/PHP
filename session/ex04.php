<?php 

session_id('1dohej3ech5ocsqivup4cmi189');

require_once("config.php");

session_regenerate_id(); // gerar um novo id

echo session_id();

echo "<br><br>";

var_dump($_SESSION);

?>