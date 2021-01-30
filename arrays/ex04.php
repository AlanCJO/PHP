<?php 

$array = array("Facebook", "Instagram", "Twitter", "Telegram", "Whatsapp");

$arrayToString = implode(", ", $array);

echo "\n".$arrayToString."\n";

$stringToArray = explode(', ', $arrayToString);

print_r($stringToArray);

echo "\n";

?>