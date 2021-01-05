<?php 

class Endereco
{
    private $logradouro;
    private $numero;
    private $cidade; 

    public function __construct($a, $b, $c)
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct() // último bloco a ser executado antes de liber memória
    {
        echo "<br>";
        // var_dump("Destruir");
    }

    public function __toString()
    {
        return $this->logradouro.", ".$this->numero.", ".$this->cidade.".";
    }

}

$meuEndereco = new Endereco("Estrada Fazenda Ano Santo", 780, "Barra Mansa");

echo $meuEndereco;

// var_dump($meuEndereco);
// unset($meuEndereco);

?>