<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tibia</title>
</head>
<body>
    <header class="header">
        <h1>Buscador de Personagem Tibia</h1>
    </header>
    
    <main class="principal">
        <form action="ex01.php" method="GET">        
            <div class="fields">
                <label for="char">Nome do personagem:</label>
                <input type="search" name="char" id="char" title="Ex.: 12345678" required>                
                <button type="submit">Buscar</button>
            </div>
        </form>
    </main>

</body>
</html>
<!-- pattern="[0-9]{8}" -->