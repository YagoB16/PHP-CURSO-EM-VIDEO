<?php

for($contador = 1; $contador <= 15; $contador++){
    if($contador== 13){
      continue;   
    }
    echo "#$contador" . PHP_EOL;
    
}


//$contador = $contador + 1

//$contador +=1

//$contador++
/*  Existem algumas varia��es de la�os, dentre elas:
    while que possui uma condi��o de entrada
    do-while que possui uma condi��o de perman�ncia (sempre executa o bloco pelo menos uma vez)
    for que possui a declara��o de uma vari�vel, uma condi��o entrada e o increment
    Dentro do bloco do la�o podemos pular uma intera��o com o comando continue
    Com o comando break podemos sair do la�o
    A vari�vel contador normalmente se chama i
 * 
 * 
 * */