<?php

class conta // classe seria o modelo utilizado para criar um objeto
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
}


$primeiraConta = new conta();// aqui criaremos uma nova conta $primeiraConta

$primeiraConta -> saldo = 200; // adicionamos saldo nessa primeira conta atraves do -> e =

$primeiraConta -> cpfTitular = '123.456.789-10';// adicionamos cpfTitular

$primeiraConta -> nomeTitular = 'Yago';// adicionamos nomeTitular

$segundaConta = new conta();// aqui criaremos outra conta $segundaConta e o ciclo se repete

$segundaConta -> saldo = 2000;

$segundaConta -> cpfTitular = '123.456.789-11';



var_dump($primeiraConta, $segundaConta);

echo $segundaConta -> saldo; // para acessar uma informação utilizar 'local onde está a informação'-> 'informação que quer buscar'