<?php

abstract class animal
{
    protected float $peso;
    protected int $idade;
    protected int $membros;

    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();


    public function getIdade()
    {
        return $this-> idade;
    }
    public function setIdade($idade)
    {
        $this -> idade = $idade;
    }
    public function getpeso()
    {
        return $this -> peso;
    }
    public function setPeso($peso)
    {
        $this -> peso = $peso;
    }
    public function getMembros()
    {
        return $this -> membros;
    }
    public function setMembros($membros)
    {
        $this -> membros = $membros;
    }
    
}

