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

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    12325678912 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ]
];


$contasCorrentes['123.456.789-11'] = sacar(
    $contasCorrentes['123.456.789-11'],
    valorASacar: 8
);// aqui são passados dois valores([conta corrente nesse cpf], valor para ser adicionado ou tirado)

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    valorASacar: 200
);

$contasCorrentes[12325678912] = deposito(
    $contasCorrentes[12325678912],
    valorDeposito: 200
);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']
    );
}
