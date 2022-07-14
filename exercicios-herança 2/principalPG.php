<?php

require_once 'alunos-bolsista.php';
require_once 'alunos.php';
require_once 'pessoal.php';
require_once 'visitante.php';
require_once 'profe.php';

$a1 = new alunos();
$a1-> setNome("jose");
$a1-> pagarMensalidade();
print_r($a1);

$b1 = new bolsista();
$b1 ->setNome("Yago");
$b1 ->setIdade(21);
$b1 ->setMatr(3);
$b1 ->setCurso("Filosofia");
$b1 ->setbolsa(39.4);
$b1-> pagarMensalidade();
print_r($b1); 

$p1 = new professor();
$p1 -> setNome("Jorel");
$p1 -> setSalario(500);
$p1 -> receberAumento(900);
print_r($p1);
/*

$b1 -> setNome("carlos");
$b1 -> setBolsa(50);

$v1 = new visitante();
$v1 -> setNome("lucas");





print_r($v1);
*/