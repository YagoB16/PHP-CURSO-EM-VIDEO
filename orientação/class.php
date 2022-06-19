<?php

class conta // classe seria o modelo utilizado para criar um objeto
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
}


$primeiraConta = new conta();

$primeiraConta -> saldo = 200;

$primeiraConta -> cpfTitular = '123.456.789-10';

$primeiraConta -> nomeTitular = 'Yago';

$segundaConta = new conta();

$segundaConta -> saldo = 2000;

$segundaConta -> cpfTitular = '123.456.789-11';



var_dump($primeiraConta, $segundaConta);

echo $segundaConta -> saldo; // para acessar uma informação utilizar ->