<?php 

class Pessoa 
{
    public $nome; // Atributo
    
    public function falar() // Método
    {
        return "O meu nome é ".$this->nome;
    }

}

$alan = new Pessoa();
$alan->nome = "Alan Oliveira";
echo $alan->falar();

?>