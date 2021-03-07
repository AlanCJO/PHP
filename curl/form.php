<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de CEP</title>
</head>
<body>
    <header class="header">
        <h1>Buscador de CEP</h1>
    </header>
    
    <main class="principal">
        <form action="ex01.php" method="GET">        
            <div class="fields">
                <label for="CEP">Digite seu CEP:</label>
                <input type="search" name="CEP" id="CEP" pattern="[0-9]{8}" title="Ex.: 12345678" required>                
                <button type="submit">Buscar</button>
            </div>
        </form>
    </main>

</body>
</html>