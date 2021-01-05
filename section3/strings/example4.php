<?php 

$phrase = "A repetição é mãe da retenção.";

$word = "mãe";

$q = strpos($phrase, "mãe");

// var_dump($q);

$text = substr($phrase, 0, $q);

var_dump($text);
echo "<br>";

$text2 = substr($phrase, $q + strlen($word), strlen($phrase));

var_dump($text2)


?>