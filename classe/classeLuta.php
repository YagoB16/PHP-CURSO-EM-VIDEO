<?php
require_once 'campeoes.php';

class luta 
{
    private lutador $desafiado;
    private lutador $desafiante;
    private int $rounds;
    private bool $aprovada;

    public function marcarLuta( $l1, $l2)
    {   
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this -> aprovada = true;
            $this -> desafiado = $l1;
            $this -> desafiante = $l2;
        }else{
            $this -> aprovada = false;
            
        }

    }

    public function lutar()
    {
        if($this -> aprovada == true){
        echo "Chegou a hora da luta" . PHP_EOL;
        $this -> desafiado -> apresentar() . $this -> desafiado ->status(); 
        echo "-----------------" . PHP_EOL;
        $this -> desafiante -> apresentar() . $this -> desafiante ->status();
        echo "-----------------" . PHP_EOL;
        $vencedor = random_int(0,2);
        
        switch($vencedor){
            case 0:
                echo "Empate" . PHP_EOL;
                $this -> desafiado -> empatarLuta();
                $this -> desafiante -> empatarLuta();
                break;
            case 1:
                echo $this -> desafiado -> getNome() . " Venceu" . PHP_EOL;
                $this -> desafiado -> ganharLuta();
                $this -> desafiante -> perderLuta();
               
                
                break;
            case 2:
                echo $this -> desafiante ->getNome() . " Venceu" . PHP_EOL;
                $this -> desafiante -> ganharLuta();
                $this -> desafiado -> perderLuta();
                
                break;
        }   
        }else{
            echo "Essa luta não pode acontecer" . PHP_EOL;
        }
    }

    public function getDesafiado()
    {
        return $this -> desafiado;
    }
    public function setDesafiado(lutador $dd)
    {
        $this -> desafiado = $dd;
    }

    public function getDesafiante()
    {
        return $this -> desafiante;
    }
    public function setDesafiante(lutador $dt)
    {
        $this -> desafiante = $dt;
    }

}