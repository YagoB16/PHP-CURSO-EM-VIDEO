<?php

$idade = 16;
$num = 3;

echo "Voc� s� pode entrar a partir dos 18 anos ou " . PHP_EOL;
echo " a partir de 16 anos acompanhado.<br>";
    
if ($idade >= 18){
    echo "voc� tem $idade anos.<br>Pode entrar sozinho(a)";
} else if ($idade >= 16 and $num > 1) {
     echo "Voc� s� tem $idade anos, mas est� acompanhado(a) pode entrar";
} else {
     echo "Voc� s� tem $idade n�o pode entrar";
}


echo "<br>";
echo "Adeus";
    
/* if(se); else(senao)*/

/*if ($idade >= 18 and $nome == 'Yago'){
    echo "voc� tem $idade anos. Pode entrar";
}*/
/*Quando a varaiavel for $nome e(and, &&) $idade=>18*/


/*if ($idade == 18 || $idade > 18){
    echo "voc� tem $idade anos. Pode entrar";
}*/
/* Quando for ($variavel => 18 ou(or, ||) $variavel ==18);*/   

/* Podemos tomar uma decis�o no c�digo atrav�s do if, elseif e else
   if e elseif v�o avaliar uma condi��o, se for verdadeira executam o bloco associado
   O if � o primeiro comando, elseif e else s�o opcionais
   O bloco elseif sempre precisa de um if antes
   O bloco else sempre precisa de um if ou elseif antes -O bloco else s� executa se nenhuma das condi��es anteriores forem verdadeiras
   Atrav�s do && (AND l�gico) e do || (OR l�gico) podemos avaliar mais de uma condi��o */