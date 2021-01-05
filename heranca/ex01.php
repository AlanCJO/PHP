<?php 

class Documento 
{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($n)
    {
        $this->numero = $n;
    }
}

class CPF extends Documento 
{
    public function validar():bool
    {
        $numeroCPF = $this->getNumero();
        // Validação CPF
        echo $numeroCPF;

        return true;
    }
}

$doc = new CPF();

$doc->setNumero("111111-23232");
echo "<br/>";
var_dump($doc->validar());

?>