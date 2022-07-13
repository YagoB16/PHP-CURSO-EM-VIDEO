<?php
require_once 'pessoas.php';

class funcionario extends pessoas
{
    private string $setor;
    private bool $trabalhando;

    public function mudarTrabalho($setor)
    {
        $this -> setSetor($setor);
    }

    public function getSetor()
    {
        return $this -> setor;
    }
    public function setSetor($setor)
    {
        $this -> setor = $setor;
    }

    public function getTrabalhando()
    {
        return $this -> trabalhando;
    }
    public function setTrabalhando($trabalhando)
    {
        $this-> trabalhando = $trabalhando;
    }
}