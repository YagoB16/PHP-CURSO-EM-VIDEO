<?php

$conta1 = [
    'titular' => 'Yago',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Samuel',
    'saldo'=> 1200
];
$conta3 = [
    'titular' => 'Caio',
    'saldo' => 1500
];

$contasCorrentes = [$conta1, $conta2, $conta3];
//Esse For irá mostrar apenas o titular das contas 
for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}