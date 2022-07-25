<?php

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0; //atributo estático é da classe

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        #Conta::$numeroDeContas++;
        # pode ser substituída a Conta por self:
        self::$numeroDeContas++;
    }

    # quando a instância deixa de existir, ou seja, quando não há mais nenhuma referência para o objeto em questão, entra no __destruct e faz a limpeza de memória
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    /**
     * Get the value of saldo
     */
    public function getSaldo(): float
    {
        return $this->saldo;
    }

   /**
     * Get the value of titular
     */
    public function recuperaNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->cpf->getCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}