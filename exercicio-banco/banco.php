<?php

require_once 'conta.php';
require_once 'titular.php';
require_once 'cpf.php';


$yago = new conta(new titular(new cpf('298.984.870-01'), "Yago"));




//echo $c[] -> recuperaCpfTitular() . PHP_EOL;
//echo $c[] -> recuperaNomeTitular() . PHP_EOL;
print_r($yago);
echo conta::recuperanumeroDeContas(); //Mostrará o numero de contas criadas