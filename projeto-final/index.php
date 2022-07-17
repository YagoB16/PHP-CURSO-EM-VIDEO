<?php
    require_once 'video.php';
    require_once 'interfacee.php';
    require_once 'gafanhoto.php';


$v[0] = new video("Aula 1");

$p = new pessoa("Jubileu", 22, "m");
$g[0] = new gafanhoto("Creuza", 25, "f", "bez");

print_r($v[0]);
print_r($p);
print_r($g[0]);