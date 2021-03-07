<?php 

$cep = isset($_GET["CEP"]) ? $_GET["CEP"] : "valor não digitado";

$link = "http://viacep.com.br/ws/{$cep}/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

// $data = json_decode($response, true);

print_r($response);

?>