<?php
/**
 * O foreach é ideal para percorrer listas de dados (como arrays).
 * Se tiver um array associativo onde as chaves tem algum significado, sempre que for adicionar um novo item é preciso adicionar a chave que no caso seria o cpf entre ['aqui']
 * $contasCorrentes ['198.768.987-32'] = [
    'titular' => 'Dhiogo',
    'saldo' => 100
];
 */
$contasCorrentes = [
    '123.456.788-90' => [
        'titular' => 'Yago',
        'saldo' => 1000
    ],
    '193.347.689-01' => [
        'titular' => 'Samuel',
        'saldo'=> 1200
    ],
    '172.661.234-45' => [
        'titular' => 'Caio',
        'saldo' => 1500
    ]
];
//Para adicionar um item
/*$contasCorrentes [123123432] = [
    'titular' => 'Dhiogo',
    'saldo' => 100
]; //sera adicionado o item com os valores presentes aqui que no caso são "titular" com o valor "dhiogo" e "saldo" com o valor "100" e seu cpf será o que esta entre[]*/

$contasCorrentes [] = [
    'titular' => 'Dhiogo',
    'saldo' => 100
]; //sera adicionado com o indice numerico 0, porque no esse será o primeiro indice numerico, ja que os que estão sendo passados anteriormente são string


$contasCorrentes [87266123445] = [
    'titular' => 'Dhiogo2',
    'saldo' => 1000
]; // aqui é outro exemplo onde é colocado um valor numerico dentro dos []

$contasCorrentes [] = [
    'titular' => 'Dhiogo3',
    'saldo' => 1000
]; // aqui o valor será 87266123445 + 1, pois o ultimo valor é o cadastrado acima Dhiogo02

foreach($contasCorrentes as $cpf => $conta){  //o valor de $contasCorrentes é atribuido a $cpf 
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

/* Aqui vemos que o valor do cpf é uma string, sendo assim, eles não terão nenhum indice numerico, por isso os dois ultimos cadastrados estão como 0 e 1, pois serão os primeiros valores INT */
