<?php 
require_once 'campeoes.php';
require_once 'classeLuta.php';

$l = [0, 1, 2, 3];

$l[0] = new lutador( //Objeto
    "João", //nome
    "Brasil", //nacionalidade
    31, //idade
    1.75, //altura
    68.9, //peso
    1, //vitorias
    2, // derrotas
    3 // empates
);
$l[1] = new lutador(
    "caio",
    "Angola",
    22,
    1.73,
    52.3,
    3,
    1,
    4,
);
$l[2] = new lutador(
    "Yago",
    "Bahia",
    21,
    1.78,
    71.2,
    2,
    1,
    4
);
$l[3] = new lutador(
    "Samuel",
    "Afeganistão",
    20,
    1.77,
    73.2,
    3,
    1,
    3
);

$luta = new luta();
$luta -> marcarLuta($l[2], $l[2]);
$luta -> lutar();
$l[2] -> status();
$l[3] -> status();