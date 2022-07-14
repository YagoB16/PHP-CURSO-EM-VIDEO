<?php

require_once 'pessoal.php';

class professor extends pessoal
{
    private float $salario;
    private string $especialidade;
    private float $aumento;

    public function receberAumento($aumento)
    {
        Echo "O professor recebeu um aumento de $aumento" . PHP_EOL;
        $this -> setSalario($this -> getSalario() + $aumento);
        Echo "Agora seu salário é  de {$this-> getSalario()}". PHP_EOL;
    }

    public function getAumento()
    {
        return $this-> aumento;
    }
    public function getSalario()
    {
        return $this -> salario;
    }

    public function setSalario($salario)
    {
        $this -> salario = $salario;
    }
}