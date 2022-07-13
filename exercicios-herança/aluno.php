<?php
require_once 'pessoas.php';

class aluno extends pessoas
{
    private int $matr;
    private string $curso;

    public function cancelarMatr()
    {
        $this -> matricula = 0;
    }

    public function getMatr()
    {
        return $this -> matricula;
    }
    Public function setMatr($matr)
    {
        $this -> matricula = $matr;
    }

    public function getCurso()
    {
        return $this -> curso;
    }
    public function setCurso($curso)
    {
        $this -> curso = $curso;
    }
}