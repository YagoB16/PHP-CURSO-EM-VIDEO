<?php
//count($idadeList) funcionalidade que vai receber uma lista e contar quantos itens tem na lista
$idadeList = [10, 20, 30, 40, 50, 90, 55];


/* caso a lista seja muito grande, usar o count no lugar do 7
for ($i = 0; $i < 7; $i++){
    echo $idadeList[$i] . PHP_EOL;
}*/
for ($i = 0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}

