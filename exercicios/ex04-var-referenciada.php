<?php
$a = 3;
$b = &$a; // o "&" é usado para criar um referencia para variável
$b += 5;
echo "A variável A vale $a" . PHP_EOL;
echo "A variável B vale $b";
