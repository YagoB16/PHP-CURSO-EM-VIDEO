<?php

 $roupa = [
     'Nike' =>[
         'tipo' => 'tenis',
         'tamanho' => 'M',
         'cor' => 'azul'
     ],
     'Adidas' =>[
         'tipo' => 'blusa',
         'tamanho' => 'G',
         'cor' => 'vermelha'
     ],
     'Puma' => [
         'tipo' => 'calça',
         'tamanho' => 'g',
         'cor' => 'preta'
     ]
     ];

     foreach($roupa as $peca => $roupa){
         echo $peca . ': ' . $roupa['tipo'] .  ' ' . $roupa['cor'] . PHP_EOL;
     }

   
