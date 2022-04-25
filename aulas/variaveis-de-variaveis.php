<?php
/* 
Usar $ antes da variável vai criar uma variável da variável 

*/
$site = "cursoemvideo";
$$site = "cursoPHP"; // essa é uma variável de outra variável. No caso seria $cursoemvideo = "cursoPHP"
 echo $site . PHP_EOL;
 echo $cursoemvideo . PHP_EOL;

 $x = "abc";
 $$x = "def";

 echo "O conteudo da variável X recebe $x" . PHP_EOL;
 echo "A variável ABC criada recebeu o valor $abc";