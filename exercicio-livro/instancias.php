<?php

require_once 'pessoa.php';
require_once 'livro.php';

$p[1] = new pessoa("Yago", 21, "M");
$p[2] = new pessoa("Ygor", 19, "M");

$l[0] = new livro("Pequeno Principe", "Antoine de Saint-Exupéry", 200, $p[1]);
$l[1] = new livro("Dom casmurro", "Machado de Assis", 251, $p[2]);


$l[0] -> avancarPg();
$l[0] -> folhear(50);
$l[0] -> detalhes();