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

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this -> cpfTitular = $cpfTitular;
            if(strlen($nomeTitular) < 3){
                echo "Nome precisa ter no minímo 3 caracteres";
                exit();
            }
        $this -> nomeTitular = $nomeTitular;
        $this -> saldo = 0;
    }

    public function sacar(float $valorAsacar)
    {
        if($valorAsacar > $this->saldo){
            echo "Saldo indisponível" . PHP_EOL;
            return;
        }
            $this -> saldo -= $valorAsacar;
        

    }

    public function depositar(float $valorAdepositar)
    {
        if ($valorAdepositar <0){
            echo "Você precisa digitar um valor válido";
            return;
        }
            $this -> saldo += $valorAdepositar;
        
    }

    public function transferir(float $valorAtransferir, conta $contaDestino)
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

    public function getRecuperarCpfTitular()
    {
        return $this -> cpfTitular;
    }

    public function setRecuperarCpfTitular($cpf)
    {
        $this -> cpfTitular = $cpf;
    }

    public function recuperarNomeTitular()
    {
        return $this -> nomeTitular;
    }
}