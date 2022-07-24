<?php

require_once 'conta.php';

$c[0] = new conta('298.984.877-01', "Ygor");
$c[1] = new conta('238.098.087-53', 'Joares');

$c[0] -> depositar(200);
$c[1]-> sacar(10);

//echo $c[] -> recuperarSaldo() . PHP_EOL;
//echo $c[] -> recuperaCpfTitular() . PHP_EOL;
//echo $c[] -> recuperaNomeTitular() . PHP_EOL;

var_dump($c);
echo conta::recuperanumeroDeContas(); //Mostrará o numero de contas criadas