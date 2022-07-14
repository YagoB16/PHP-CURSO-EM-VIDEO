<?php


require_once 'pessoal.php';

class alunos extends pessoal 
{
    private $matricula;
    private $curso;

    public function pagarMensalidade()
    {
        echo "Pagando a mensalidade do aluno: " .  $this-> getnome() . PHP_EOL;
    }

    public function getCurso()
    {
        return $this -> curso;
    }
    public function setCurso($curso)
    {
        $this -> curso = $curso;
    }

    public function getMatr()
    {
        return $this -> matricula;
    }
    Public function setMatr($matricula)
    {
        $this -> matricula = $matricula;
    }

}
