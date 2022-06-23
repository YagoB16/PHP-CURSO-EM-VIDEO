<?php

require_once 'contaBanco.php';

$p1 = new ContaBanco("145.567.980-12", "Joao");//criando a conta pessoa1, passando como parametro o cpf e o nome do titular.
$p2 = new ContaBanco("322.098.293-98", "Yago");//criando a conta pessoa2, passando como parametro o cpf e o nome do titular.

$p1->abrirConta("cc");//aqui defino o tipo da conta entre o ().
//$p1->setTitular("Joao");//aqui defino o titular da conta entre (). Sempre utilizar o set para modificar algo.
$p1->setnumConta(141003);//aqui defino o numero da conta entre ().
$p1->depositar(400);//aqui é feito um deposito no valor entre().


$p2->abrirConta("cp");
//$p2->setTitular("yago");
$p2->setnumConta(160800);
$p2->depositar(500);


$p1-> transefir(400, $p2);//aqui será feito uma transferencia, onde é retirado 400 da conta $p1 e passado para conta $p2.

print_r($p2);
print_r($p1);
