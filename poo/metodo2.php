<?php 

require_once 'caneta2.php';

$c1 = new Caneta();
$c1 ->setModelo('Bic');// passar os valores através do ()
$c1 ->setPonta(0.5);

var_dump($c1);