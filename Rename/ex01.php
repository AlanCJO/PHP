<?php 

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1))
{
    mkdir($dir1);
    echo "diretório criado";
}

$filename = "README.md";

if (!is_dir($dir2)) mkdir($dir2);

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) 
{
    $file = fopen('./'. $dir . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);
}

?>