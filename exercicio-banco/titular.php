<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    private function validaNomeTitular($nomeTitular)
    {
        if (strlen($nomeTitular) < 3) {
            echo "Nome precisa ter pelo menos 3 caracteres";
            exit();
        }
    }
}