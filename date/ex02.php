<?php 

// $ts = strtotime("2001-09-11"); // convertendo data para TimeStamp
$ts = strtotime("+1 week");

echo date("l, d/m/Y", $ts);

?>