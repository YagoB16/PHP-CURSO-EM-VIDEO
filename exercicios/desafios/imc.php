<?php

$peso = 97 ;
$altura = 1.76 ;
$imc = $peso/($altura*2);

echo "seu imc é " . number_format($imc, 2) . PHP_EOL;

if ($imc >= 18.5 && $imc< 24.9){
    echo "Você está normal";
} elseif($imc > 25.0 && $imc < 29.9){
    echo "Você está acima do peso";
} elseif($imc > 40){
    echo" Você está uma baleia";
}