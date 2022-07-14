<?php

require_once 'animal.php';

class peixe extends animal
{
    private $corEscama;

    public function locomover()
    {
        echo "Nadando" . PHP_EOL;
    }
    public function alimentar()
    {
        echo  "Comendo alga" . PHP_EOL;
    }
    public function emitirSom()
    {
        echo "Peixe nao faz som" . PHP_EOL;
    }
    public function soltarBolha()
    {
        echo "Glub glub" . PHP_EOL;
    }
}