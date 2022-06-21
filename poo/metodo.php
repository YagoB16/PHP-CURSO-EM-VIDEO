<?php

require_once 'caneta.php';

$canetao = new Caneta();

$canetao -> modelo ='bic cristal';
$canetao -> cor ='Azul';
//$canetao -> ponta = 0.5;
//$canetao -> carga = 99;

var_dump($canetao);


$canetao -> destampar();
$canetao -> escrever();