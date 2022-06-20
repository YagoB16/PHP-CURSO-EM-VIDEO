<?php

use conta as GlobalConta;

//$this aponta para um objeto na memória, no caso o objeto em execução, aponta para si própria;
//Ela apontorá para o endereco de memoria onde a variavel esta sendo utilizada;
//É uma pseudo-variável.

class Conta 
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;


    public function definirCpf(string $cpf)
    {
        $this -> cpfTitular = $cpf;

    }

    public function definirNome(string $nome)
    {
        $this -> nomeTitular = $nome;
    }

    public function sacar(float $valorAsacar)
    {
        if($valorAsacar > $this->saldo){
            echo "Saldo indisponível" . PHP_EOL;
            return;
        }
            $this -> saldo -= $valorAsacar;
        

    }

    public function depositar(float $valorAdepositar): void
    {
        if ($valorAdepositar <0){
            echo "Você precisa digitar um valor válido";
            return;
        }
            $this -> saldo += $valorAdepositar;
        
    }

    public function transferir(float $valorAtransferir, conta $contaDestino): void
    {
        if($valorAtransferir > $this -> saldo){
            echo "Saldo indisponivel";
            return;
        }
            $this ->sacar($valorAtransferir);
            $contaDestino-> depositar($valorAtransferir);
        
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCpfTitular(): string
    {
        return $this -> cpfTitular;
    }

    public function recuperarNomeTitular(): string
    {
        return $this -> nomeTitular;
    }
}