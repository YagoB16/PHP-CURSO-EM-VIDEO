<?php
//Qualquer outro tipo diferente desses vai ser convertido para uma string ou inteiro
//Quando adicionamos o valor b, definimos uma string 1 como chave.
//O PHP reconhece que uma chave tem um valor que pode ser representado numericamente, ele tenta convertê-la para um inteiro.
//Nessa conversão, ele sobrescreveu o primeiro índice pq o valor será 1 - dessa forma, o "b" substituiu o "a".
//Tentamos adicionar um valor booleano true como índice. Porém, ele também é convertido para um inteiro 1, sobrescrevendo novamente o valor.
$array = [ 
    1 => 'a',
    '1' => 'b',
    1.5 => 'c', //Será convertido para 1 inteiro, caso seja outro numero, ele sempre ira aproximar para o numero inteiro anterior.
    true => 'd'
]; //Essa aqui irá aparecer apenas o "d" pois o valor será 1 e sobrescreverá os anteriores

/*$array = [ 
    1 => 'a',
    '1' => 'b',
    2.5 => 'c', 
    false => 'd'
];// Essa aqui irá mostrar "b, c, d" pois os valores serão diferentes e não serão subscritos
*/
foreach ($array as $item){
    echo $item . PHP_EOL;
}
