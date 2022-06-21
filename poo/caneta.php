<?php

class Caneta{

   public  $modelo;
   public  $cor;
   private  $ponta;
   protected  $carga;
   protected  $tampada; 


public function escrever()
{
    if($this -> tampada == true){
        echo "Você não pode escrever";
        return;
    }
    echo "escreva";
}

public function tampar()//esse metodo dará acesso ao $tampada que atualmente é protected
{
    $this -> tampada = true; //aqui ele dará o valor true para a tampada
}

public function destampar()//esse metodo dará acesso ao $tampada que atualmente é protected
{
    $this -> tampada = false; // aqui ele dará o valor false para a tampada
}


}