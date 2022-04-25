<?php
    
/*Feito no Eclipse
sendo necessário usar web para adicionar valor á variável
*/

    
    $atual = $_GET["aa"]; // Essa linha vai pegar o ano na URL
    echo "O ano atual é $atual" . PHP_EOL ;
    echo "O ano anterior é" . --$atual . PHP_EOL; 
    $atual++;// Usado para retornar o valor do ano para o que está na URL
    echo "O ano posterior é" . ++$atual;