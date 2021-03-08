<?php 

// $cep = isset($_GET["CEP"]) ? $_GET["CEP"] : "27321600";
$character = isset($_GET["char"]) ? $_GET["char"] : "streckzenho";

// $endpoint = "http://viacep.com.br/ws/{$cep}/json/";
$endpoint = "https://api.tibiadata.com/v2/characters/{$character}.json";

$ch = curl_init($endpoint);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

$data = json_decode($response, true);
$data = $data["characters"]["data"];
// echo "<pre>";
// print_r($data);
// echo "</pre>";
// exit;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">        
</head>
<body>

    <header>
        <h1>Informações do seu Personagem</h1>
    </header>
    <div class="data">  
        <?php foreach($data as $key => $value): ?>
            <label for=<?=$key?>> <?=strtoupper($key)?></label>
            <input type="text" value="<?= $value ?>" id=<?=$key?> disabled>
        <?php endforeach ?>
    </div>

    <?php include_once 'model.php' ?>

</body>
</html>
