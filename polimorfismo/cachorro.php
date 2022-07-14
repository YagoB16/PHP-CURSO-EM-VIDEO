<?php

    require_once 'lobo.php';
class cachorro extends lobo
{
    public function  reagirFrase($frase)
    {
        if( $frase == "toma comida" || $frase == "Ola"){
            echo "Abanar e latir" . PHP_EOL;
        }else{
            echo "Rosnar" . PHP_EOL;
        }
    }
    public function  reagirHora($hora, $min)
    {
        if($hora <12){
            echo "Abanar" . PHP_EOL;
        }elseif($hora >= 18){
            echo "Ignorar" . PHP_EOL;
        }else{
            echo "Abanar e Latir" . PHP_EOL;
        }
    }
    public function  reagirDono(bool $dono)
    {
        if( $dono == true){
            echo "Abanar " . PHP_EOL;
        }else{
            echo"Rosnar e latir" . PHP_EOL;
        }
    }
    public function  reagirIdade($idade,  $peso)
    {
        if( $idade <5){
            if($peso<10){
                echo "Abanar" . PHP_EOL;
            }else{
                echo "Latir" . PHP_EOL;
            }
            }else{
                if( $peso>10){
                    echo "Rosnar" . PHP_EOL;
            }else{
                echo "Ignorar" . PHP_EOL;
            }
        }
    }
}