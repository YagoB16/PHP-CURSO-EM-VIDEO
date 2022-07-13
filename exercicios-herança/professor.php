<?php

require_once 'pessoas.php';

class professor extends pessoas
{
    private string $especialidade;
    private float $salario;

    public function receberAum($aumento)
    {
        $this-> setSalario($this -> getSalario() + $aumento);
    }

    public function getEspecialidade()
    {
        return $this -> especialidade;
    }
    public function setEspecialidade($especialidade)
    {
        $this -> especialidade = $especialidade;
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