<?php 

$data = [
    "empresa" => "Zemis Tecnologia"
];

setcookie("COOKIE_NAME", json_encode($data), time() + 3600);

echo "OK";