<?php

require_once 'conta.php';

$umaConta = new conta();

$umaConta -> definirNome('Yago');
$umaConta -> definirCpf('123.465.987-09');
$umaConta -> depositar(980);

$umaConta -> sacar(500);

echo "Saldo: " . $umaConta -> recuperarSaldo() . PHP_EOL;
echo "CPF: ". $umaConta -> recuperarCpfTitular() . PHP_EOL;
echo "Nome: ". $umaConta -> recuperarNomeTitular();