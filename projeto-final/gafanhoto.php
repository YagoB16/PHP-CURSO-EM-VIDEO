<?php

require_once 'pesso.php';

class gafanhoto extends pessoa
{
    private $login;
    private $totAssistindo;

    public function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome, $idade, $sexo);
        $this-> login =  $login;
        $this-> totAssistindo = 0;
    }

    public function viuMaisUm()
    {
        $this-> totAssistindo++;
    }

    public function getLogin()
    {
        return $this-> login;
    }
    public function setLogin($login)
    {
        $this -> login = $login;
    }

    public function getTotAssistindo()
    {
        return $this -> totAssistindo;
    }
    public function setTotAssistindo($totAssistindo)
    {
        $this -> totAssistindo = $totAssistindo;
    }
}