<?php 

$cep = isset($_GET["CEP"]) ? $_GET["CEP"] : "";

$endpoint = "http://viacep.com.br/ws/{$cep}/json/";

$ch = curl_init($endpoint);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

$data = json_decode($response, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        header h1 {
            text-align: center;
            padding-bottom: 20px;
        }

        div.data {
            display: grid;
            width: 95%;
            grid-auto-rows: 2fr;
            grid-template-columns: repeat(4, 1fr);          

            padding: 20px;
            gap: 8px;
            border-radius: 10px;

            background: #bec0c2;
        }

        div.data input {
            width: 80%;
            padding: 5px;

        }

        div.data label {
            font-weight: 700;
        }
        
    </style>
</head>
<body>

    <header>
        <h1>Resultado da busca</h1>
    </header>
    <div class="data">  
        <?php foreach($data as $key => $value): ?>
            <label for=<?=$key?>> <?=strtoupper($key)?></label>
            <input type="text" value="<?= $value ?>" id=<?=$key?> disabled>
        <?php endforeach ?>
    </div>

</body>
</html>