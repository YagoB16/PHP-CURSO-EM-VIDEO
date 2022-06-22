<?php

require_once 'contaBancaria.php';

$p1 = new ContaBanco();
$p2 = new ContaBanco();

$p1->abrirConta("cc");
$p1-> setTitular("Joao");
$p2->abrirConta("cp");
$p2->setTitular("yago");
$p2->setSaldo(600);

var_dump($p2);