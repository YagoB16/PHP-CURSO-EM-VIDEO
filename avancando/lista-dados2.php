<?php
 //Para o php adicionar em uma lista numerica, basta por entre [] vazio
$idadeList = [20, 19, 27, 41, 12]; // as posiçoes [0, 1, 2, 3, 4] estão ocupadas, o valor passado depois sera adicionado na posição 5

// $idadeList[5] =22; aqui o valor será adicionado na indice(posição) 5, mas caso não seja possivel contar quantos indices tem, utilizar a expressão abaixo:
$idadeList[] = 22; //nessa linha o php vai adicionar o valor 22 no lugar posterior ao ultimo indice, que no caso é valor 12 posiçao [4]

foreach ($idadeList as $idade){
    echo $idade . PHP_EOL;
}
