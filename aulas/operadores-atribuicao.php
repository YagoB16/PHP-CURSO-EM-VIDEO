<?php
/*
 exercicio onde se calcula o aumento de preço 
 $_GET["p"] é o que vai receber o parametro/valor "p" escrito na url
 http://localhost/aulasp/01-operadores.php?p=10
 veja que no final da url o valor é escrito. */
 
  
         $preco = $_GET["p"];
         echo "O preço do produto é R$ $preco" . PHP_EOL;
         $preco += ($preco*10/100);
         echo "O novo preço do produto com 10% é R$$preco";
 ?>
