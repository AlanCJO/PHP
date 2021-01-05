<?php 

$name = "Alan";

function test()
{
    global $name;
    echo $name;
}

function test2() 
{
    $name = "João";
    echo $name." agora no Teste 2";
}

// test();
// echo "<br>";
// test2();




?>