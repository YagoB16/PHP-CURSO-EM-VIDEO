<?php

$idade = 16;
$num = 3;

echo "Você só pode entrar a partir dos 18 anos ou " . PHP_EOL;
echo " a partir de 16 anos acompanhado.<br>";
    
if ($idade >= 18){
    echo "você tem $idade anos.<br>Pode entrar sozinho(a)";
} else if ($idade >= 16 and $num > 1) {
     echo "Você só tem $idade anos, mas está acompanhado(a) pode entrar";
} else {
     echo "Você só tem $idade não pode entrar";
}


echo "<br>";
echo "Adeus";
    
/* if(se); else(senao)*/

/*if ($idade >= 18 and $nome == 'Yago'){
    echo "você tem $idade anos. Pode entrar";
}*/
/*Quando a varaiavel for $nome e(and, &&) $idade=>18*/


/*if ($idade == 18 || $idade > 18){
    echo "você tem $idade anos. Pode entrar";
}*/
/* Quando for ($variavel => 18 ou(or, ||) $variavel ==18);*/   

/* Podemos tomar uma decisão no código através do if, elseif e else
   if e elseif vão avaliar uma condição, se for verdadeira executam o bloco associado
   O if é o primeiro comando, elseif e else são opcionais
   O bloco elseif sempre precisa de um if antes
   O bloco else sempre precisa de um if ou elseif antes -O bloco else só executa se nenhuma das condições anteriores forem verdadeiras
   Através do && (AND lógico) e do || (OR lógico) podemos avaliar mais de uma condição */