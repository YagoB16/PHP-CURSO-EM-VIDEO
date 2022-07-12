<?php

require_once "livro.php";

interface controleRemoto
{
    public function abrir();
    public function fechar();
    public function folhear();
    public function avancarPg();
    public function voltarPG();
}