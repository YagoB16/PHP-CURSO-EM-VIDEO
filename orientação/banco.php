<?php

require_once 'conta.php';

$umaConta = new conta("458.980.758-01", "Yago");






echo "Saldo: " . $umaConta -> recuperarSaldo() . PHP_EOL;
echo "CPF: ". $umaConta -> getRecuperarCpfTitular() . PHP_EOL;
echo "Nome: ". $umaConta -> recuperarNomeTitular() . PHP_EOL;

var_dump($umaConta);