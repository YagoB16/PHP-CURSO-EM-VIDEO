<?php
/**
 * O foreach é ideal para percorrer listas de dados (como arrays).
 */
$contasCorrentes = [
    12345678890 => [
        'titular' => 'Yago',
        'saldo' => 1000
    ],
    12334768901 => [
        'titular' => 'Samuel',
        'saldo'=> 1200
    ],
    87266123445 => [
        'titular' => 'Caio',
        'saldo' => 1500
    ]
];
//Para acessar um item
echo $contasCorrentes[12345678890]['saldo'] . PHP_EOL;

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL;
}