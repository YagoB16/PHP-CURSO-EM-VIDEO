<?php

class pessoa
{
    private string $nome;
    private int $idade;
    private string $sexo;

    public function __construct(string $no, int $id, string $se)
    {
        $this -> nome = $no;
        $this -> idade = $id;
        $this -> sexo = $se;
    }

    public function aniversario()
    {
        $this -> setIdade($this -> getIdade() + 1);
    }

    public function getIdade()
    {
        return $this -> idade;
    }
    public function setIdade($id)
    {
        $this -> idade = $id;
    }

    public function getNome()
    {
        return $this -> nome;
    }
    public function setNome($no)
    {
        $this -> nome = $no;
    }

    public function getSexo()
    {
        return $this -> sexo;
    }
    public function setSexo($se)
    {
        $this -> sexo = $se;
    }
}