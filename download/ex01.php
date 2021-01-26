<?php

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

echo "<pre>"; print_r($parse); echo "</pre>"; exit;
$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

echo "<pre>"; var_dump($file); echo "</pre>"; exit;
?>

<img src="<?=$basename?>">