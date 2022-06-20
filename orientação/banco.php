<?php

require_once 'conta.php';

$umaConta = new conta();

$umaConta -> depositar(980);

$umaConta -> sacar(500);

echo $umaConta -> recuperarSaldo();