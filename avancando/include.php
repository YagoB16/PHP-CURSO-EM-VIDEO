<?php
include 'funcoes.php'; //ira buscar as funçoes em outro arquivo e trará para esse. caso nao tenha o arquivo, ele ira executar o codigo e depois mostrar o erro
require 'funcoes.php';// esse só rodara o codigo se encontrar o arquivo, ou seja, obrigatório para rodar.
require_once // seja passado duas vezes para o mesmo arquivo, o código será executado corretamente
//include não dá erro (apenas avisa) se o arquivo não existe, require dá erro
//require_once garante que o arquivo será incluído apenas uma vez
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
        mensagem: "$cpf $conta[titular]  $conta[saldo]"// outra maneira é mensagem: $cpf {$conta['titular']}  {$conta['saldo']}
    );
}
