<?php

require_once 'animal.php';

class mamifero extends animal
{
    private $corPelo;

    public function locomover()
    {
        echo "Correndo" . PHP_EOL;
    }
    public function alimentar()
    {
        echo  "Mamando" . PHP_EOL;
    }
    public function emitirSom()
    {
        echo "Som de mamífero" . PHP_EOL;
    }
}