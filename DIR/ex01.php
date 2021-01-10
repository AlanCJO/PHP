<?php 

$name = "images";
// $root = $_SERVER["DOCUMENT_ROOT"]; // pega o diretório onde se encontra o arquivo
// $name = $root.'/'.'PHP7'.'/'.'DIR'.'/'.$name.'/';

if (!is_dir($name))
{
    mkdir($name);
    echo "Diretório $name criado com sucesso!";

} else {

    rmdir($name);
    echo "Já existe o diretório: $name foi removido";
}

?>