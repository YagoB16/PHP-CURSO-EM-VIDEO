<?php
/**
 * O foreach é ideal para percorrer listas de dados (como arrays).
 */
$contasCorrentes = [
    12345678890 => [
        'titular' => 'Yago',
        'saldo' => 1000
    ],
    19334768901 => [
        'titular' => 'Samuel',
        'saldo'=> 1200
    ],
    17266123445 => [
        'titular' => 'Caio',
        'saldo' => 1500
    ]
];
//Para adicionar um item
/*$contasCorrentes [123123432] = [
    'titular' => 'Dhiogo',
    'saldo' => 100
]; //sera adicionado os valores presentes aqui que no caso são "titular" com o valor "dhiogo" e "saldo" com o valor "100" e seu cpf será o que esta entre[]*/

$contasCorrentes [] = [
    'titular' => 'Dhiogo',
    'saldo' => 100
]; //sera adicionado com o indice do maior numero dentre os demais gerados anteriormente  e acrescentado + 1 no ultimo.
//por exemplo o maior numero é 87266123445 (cpf do caio) o do cpf do dhiogo será (87266123446), mudando o final 45 para 46

$contasCorrentes [] = [
    'titular' => 'Dhiogo2',
    'saldo' => 1000
]; // aqui é outro exemplo que sera com o final 47

foreach($contasCorrentes as $cpf => $conta){  //o valor de $contasCorrentes é atribuido a $cpf 
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

/*O valor dos cpf são passados como um INT, não teremos problemas para gerar um indice no [] em branco
$contasCorrentes [] = [
    'titular' => 'Dhiogo2',
    'saldo' => 1000
];

Porém essa situação muda caso seja uma STRING, veremos no arquivo conta2.php

*/
