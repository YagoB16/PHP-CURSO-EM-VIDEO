<?php

require_once 'animal.php';

class reptil extends animal
{
    private $corEscama;

    public function locomover()
    {
        echo "Rastejando" . PHP_EOL;
    }
    public function alimentar()
    {
        echo  "Comer inseto" . PHP_EOL;
    }
    public function emitirSom()
    {
        echo "Som de reptil" . PHP_EOL;
    }
}