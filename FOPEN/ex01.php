<?php 

$file = fopen("README.md", "w+");

// fwrite($file, "Y-m-d H:i:s");
fwrite($file, "# Readme criado através do PHP");

fclose($file);

echo "Arquivo criado com sucesso!";

?>