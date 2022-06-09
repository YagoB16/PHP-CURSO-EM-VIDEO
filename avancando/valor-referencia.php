<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.456.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ]
];


$contasCorrentes['123.456.789-10'] = deposito(
    $contasCorrentes['123.456.789-10'],
    valorDeposito: 500
);
$contasCorrentes['123.456.789-11'] = deposito(
    $contasCorrentes['123.456.789-11'], 
    valorDeposito: 500
);
$contasCorrentes['123.456.789-12'] = sacar(
    $contasCorrentes['123.456.789-12'],
    valorASacar: 500
);

titularComNomeMaiusculas($contasCorrentes['123.456.789-10']);

foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta; // ou  ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        mensagem: "$cpf $titular $saldo"
    );
}
