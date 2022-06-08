<?php
function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) { // Se (valor do saque for maior que o saldo da conta)
        exibeMensagem("Você não pode sacar este valor"); //vai exibir essa mensagem e não vai retirar o valor da conta.
    } else {// Se não, caso o valor do saldo seja maior que o valor para sacar
        $conta['saldo'] -= $valorASacar;// nessa linha será feito o saque 
    }
    return $conta;// Terminará imediatamente sua execução, e retornará seus argumentos como valor à chamada da função
}

function deposito(array $conta, float $valorDeposito)
{
    $conta['saldo'] += $valorDeposito; //adicionar o valor do deposito
    return $conta;
}

function titularComMaiuscula(array $conta)
{
  $conta['titular'] = strtoupper($conta['titular']); 
}