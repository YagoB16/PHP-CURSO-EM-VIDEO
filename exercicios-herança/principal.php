<?php

require_once 'pessoas.php';
require_once 'funcionario.php';
require_once 'professor.php';
require_once 'aluno.php';

$p1 = new pessoas();
$p2 = new aluno();
$p3 = new professor();
$p4 = new funcionario();


$p1 ->fazerAniv();

$p2 ->setNome("Yago");
$p2 ->setIdade(21);
$p2 ->setMatr(3);
$p2 ->setCurso("Filosofia");
$p2 ->cancelarMatr();

$p3 ->setNome("Joares");
$p3 ->setIdade(30);
$p3 ->setEspecialidade("Português");
$p3 ->setSalario(1500.00);
$p3 ->receberAum(900);

$p4 ->setNome("Igor");
$p4 ->setIdade(41);
$p4 ->setSetor("Pecuaria");
$p4 ->setTrabalhando(true);

print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);

