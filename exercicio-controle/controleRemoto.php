<?php 
require_once 'controlador.php';

class controleRemoto implements Controlador
{
    //Atributos
    private int $volume;
    private bool $ligado;
    private bool $tocando;

    //Métodos especiais
    public function __construct()
    {   
        $this -> volume = 50;
        $this -> ligado = false;
        $this -> tocando = false;
        $this -> abrirMenu();
    }

    public function Ligar()
    {
        $this -> setLigado(true);
    }

    public function Desligar()
    {
        $this -> setLigado(false);
    }

    public function abrirMenu()
    {   
        echo "------ MENU ------" . "<br><br>";
        echo "Está ligado? " . ($this -> getLigado()?"SIM" : "NÃO") . "<br>";// Expressão ? verdadeiro : falso
        echo "Está tocando? " . ($this -> getTocando()?"SIM" : "NÃO") . "<br>";// Expressão ? verdadeiro : falso
        echo "Volume: " . $this -> getVolume();
        for($i=0; $i < $this->getVolume(); $i+=10){
            echo("|");
        }
    }                                   

    public function fecharMenu()
    {
        echo "Fechando menu";
    }

    public function maisVolume()
    {
        if($this -> getLigado()){ //Se getLigado for true, então executará o codigo abaixo
            $this -> setVolume($this -> getVolume() +  10); //setVolume vai receber o getVolume + 1. aumentará o volume em 1
        }else{
            echo "<br>" . "Erro! Não posso aumentar o volume";
        }
    }
    
    public function menosVolume()
    {
        if($this -> getLigado()){ //Se getLigado for true, então executará o código abaixo
            $this -> setVolume($this -> getVolume() - 1);//setVolume vai receber o getVolume - 1. diminuirá o volume em 1
        } else{
            echo "<br>" . "Erro! Não posso diminuir o volume";
        }
    }

    public function ligarMudo()
    {
        if($this -> getLigado() && $this -> getVolume() > 0 ){ //Se getLigado for true e o getVolume for maior que 0, executará o código abaixo
            $this -> setVolume(0);//volume ficará no 0
        }
    }

    public function desligarMudo()
    {
        if($this -> getLigado() && $this -> getVolume() == 0){//Se getLigado for true e o getVolume for igual a 0, executará o código abaixo
            $this -> setVolume(50);//volume ficará no 50
        }
    }

    public function play()
    {
        if($this -> getLigado() && !($this -> getTocando())){//Se getLigado for treu e o getTocando for diferente de true, executará o código abaixo
        $this -> setTocando(true);// setTocando será true agora
        }
    }

    public function pause()
    {
        if($this -> getLigado() && $this -> getTocando()){
        $this -> setTocando(false);
        }
    } 


    private function getVolume()
    {
        return $this -> volume;
    }
    private function getLigado()
    {
        return $this -> ligado;
    }
    private function getTocando()
    {
        return $this -> tocando;        
    }
    private function setVolume(int $v)
    {
        $this -> volume = $v;
    }
    private function setLigado(bool $l)
    {
        $this -> ligado = $l;   
    }
    private function setTocando(bool $t)
    {
        $this -> tocando = $t;   
    }

}