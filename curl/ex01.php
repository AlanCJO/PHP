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
    <style>
        header h1 {
            text-align: center;
            padding-bottom: 20px;

            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        body {
            background-image: url('background-artwork.jpg');
            background-attachment: fixed;
            background-position-x: 50%;
            background-position-y: 50%;
            background-size: cover;

            padding: 0 60px;
            height: 100vh;
            margin: 0;

            color: white;
            font-size: 18px;
        }

        div.data {
            display: grid;
            width: 95%;
            grid-auto-rows: 2fr;
            grid-template-columns: repeat(4, 1fr);          

            padding: 20px;
            gap: 8px;
            border-radius: 10px;

            background: rgba(0, 0, 0, 0.4);
        }

        div.data input {
            width: 80%;
            padding: 5px;
            color: black;
            font-size: 18px;

        }

        div.data label {
            font-weight: 700;
        }
        
    </style>
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

</body>
</html>