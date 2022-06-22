<?php

require_once 'contaBancaria.php';

$p1 = new ContaBanco();//criando a conta pessoa1
$p2 = new ContaBanco();//criando a conta pessoa2

$p1->abrirConta("cc");//aqui defino o tipo da conta entre o ().
$p1->setTitular("Joao");//aqui defino o titular da conta entre ().
$p1->setnumConta(141003);//aqui defino o numero da conta entre ().
$p1->depositar(300);//aqui é feito um deposito no valor entre().

$p2->abrirConta("cp");
$p2->setTitular("yago");
$p2->setnumConta(160800);
$p2->depositar(500);
$p2->sacar(100);

print_r($p2);
print_r($p1);