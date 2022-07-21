<?php


/*$this aponta para um objeto na memória, no caso o objeto em execução, aponta para si própria;
    Ela apontorá para o endereco de memoria onde a variavel esta sendo utilizada;
    É uma pseudo-variável.*/

class Conta//Classe
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    private static $numeroDeContas = 0;//É um atributo da classe e não da instancia (static).

    public function __construct($cpfTitular, $nomeTitular)//"Instancia".
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
        //$this -> $numeroDeContas++; // O resultado sempre será 1, pois está sendo acessada a instancia.
       //Conta::$numeroDeContas++; //nomeDaClasse::$variavel; é possível acessar os atributos estáticos. Utilizar o ex abaixo, pq caso eu mude o nome da classe, seria necessário mudar tem todos locais onde o static está sendo usado. 
        self::$numeroDeContas++; // É possível também utilizar self (É algo que utiliza o nome da classe em que ela está).
    }

    public function sacar(float $valorAsacar)
    {
        if($valorAsacar > $this->saldo){
            echo "Saldo indisponível para saque!" . PHP_EOL;
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
            echo "Saldo indisponivel para transferência!";
            return;
        }
            $this ->sacar($valorAtransferir);
            $contaDestino-> depositar($valorAtransferir);
        
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular()
    {
        return $this->nomeTitular;
    }
    
    public function recuperaCpfTitular()
    {
        return $this->cpfTitular;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 3){
            echo "Nome precisa ter pelo menos 3 caracteres";
            exit();
        }
    }

    public static function recuperaNumeroDeContas()
    {
        return self::$numeroDeContas; 
    }

}