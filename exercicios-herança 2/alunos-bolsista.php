<?php
require_once 'alunos.php';


class bolsista extends alunos
{
    private float $bolsa;
    
    public function renovarBolsa()
    {
        echo "Bolsa renovada";
    }

    public function pagarMensalidade()
    {
        echo "{$this->getnome()} é bolsista! Então tem desconto" . PHP_EOL; 
    }

    public function getBolsa()
    {
        return $this-> bolsa;
    }
    public function setBolsa($bolsa)
    {
        $this -> bolsa =  $bolsa;
    }
}