<?php

$n1 = $_GET["n"];
$n2 = $_GET["n2"];

$m = ($n1 + $n2)/2;

$sit = $m < 7 ? "reprovado" : "aprovado";
echo"O aluno foi $sit";