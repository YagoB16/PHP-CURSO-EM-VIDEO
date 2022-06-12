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
    12325678912 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ]
];


$contasCorrentes['123.456.789-11'] = sacar(
    $contasCorrentes['123.456.789-11'],
    valorASacar: 8
);

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    valorASacar: 200
);

$contasCorrentes[12325678912] = deposito(
    $contasCorrentes[12325678912],
    valorDeposito: 200
);

titularComMaiuscula($contasCorrentes['123.456.789.11']);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        mensagem: "$cpf $conta[titular]  $conta[saldo]"// outra maneira é mensagem: $cpf {$conta['titular']}  {$conta['saldo']}
    );
}
