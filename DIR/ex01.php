<?php 

$name = "images";
$root = $_SERVER["DOCUMENT_ROOT"]; // pega o diretório onde se encontra o arquivo
$dir = $root.'/'.'PHP7'.'/'.'DIR'.'/'.$name.'/';

if (!is_dir($dir))
{
    mkdir($dir, 0755, true);
    echo "Diretório $name criado com sucesso!";

} else {

    echo "Já existe o diretório: $name";
}


?>