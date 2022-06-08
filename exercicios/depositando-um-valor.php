<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valorASacar){
    if ($valorASacar > $conta['saldo']) { 
        exibeMensagem("Você não pode sacar este valor"); 
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function deposito($conta, $valorDeposito){
    if($valorDeposito > 0 ){
        $conta['saldo'] += $valorDeposito; 
    }else{
        exibeMensagem(mensagem:"Apenas depositos acima de 1$");
    }
    
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
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


$contasCorrentes['123.456.789-10'] = deposito($contasCorrentes['123.456.789-10'], 500);// aqui são passados dois valores([conta corrente nesse cpf], valor para ser adicionado ou tirado)

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
