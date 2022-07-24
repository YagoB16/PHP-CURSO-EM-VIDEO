<?php

class titular
{
    protected $nome;
    protected $cpf;

    public function __construct(string $cpf, string $nome)
    {
        $this -> cpf = $cpf;
        $this -> nome = $nome;
    }


    public function getNome()
    {
        return $this -> nome;
    }
    public function setNome($nome)
    {
        $this -> nome = $nome;
    }
    public function getCpf()
    {
        return $this -> cpf;
    }
    public function setCpf($cpf)
    {
        $this -> cpf = $cpf;
    }

}