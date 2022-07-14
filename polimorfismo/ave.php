<?php

require_once 'animal.php';

class ave extends animal
{
    private $corPena;

    public function locomover()
    {
        echo "voando" . PHP_EOL;
    }
    public function alimentar()
    {
        echo  "Comendo inseto" . PHP_EOL;
    }
    public function emitirSom()
    {
        echo "Piu piu" . PHP_EOL;
    }
    public function fazerNinho()
    {
        echo "Olha essa mansão aqui" . PHP_EOL;
    }
}