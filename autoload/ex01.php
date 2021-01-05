<?php

// function __autoload($nomeclasse)
// {
//     require_once("/var/www/html/PHP_7_Completo/$nomeclasse.php/");
// }


// $carro = new DelRey();

// $carro->acelerar(80);

spl_autoload_register(function($class_name){
    var_dump($class_name);
    require_once $class_name.'.php';
});

$carro = new DelRey();
$carro->acelerar(80);

?>