<?php

require_once 'animal.php';
require_once 'ave.php';
require_once 'peixe.php';
require_once 'reptil.php';
require_once 'mamifero.php';
require_once 'cachorro.php';

$p = new peixe();
$m = new mamifero();
$r = new reptil();
$a = new ave();

$p ->setPeso( 30);
$p ->setMembros(3);
$p ->setIdade(2);
$p ->emitirSom();
$p ->locomover();
$p ->alimentar();
$p ->soltarBolha();

print_r($p);

$a ->setPeso(15);
$a ->setMembros(2);
$a ->setIdade(8);
$a ->emitirSom();
$a ->locomover();
$a ->alimentar();

print_r($a);

$c = new cachorro();
$c-> reagirDono(true);
$c-> reagirHora(17, 8);
$c-> reagirFrase("Tchau");
print_r($c);