<?php

function guardafuncao()
{
  /**  function exibeMensagem(string $mensagem){
        echo $mensagem . PHP_EOL;
    }
    
    function sacar(array $conta, float $valorASacar){
        if ($valorASacar > $conta['saldo']) { // Se (valor do saque for maior que o saldo da conta)
            exibeMensagem("Você não pode sacar este valor"); //vai exibir essa mensagem e não vai retirar o valor da conta.
        } else {// Se não, caso o valor do saldo seja maior que o valor para sacar
            $conta['saldo'] -= $valorASacar;// nessa linha será feito o saque 
        }
        return $conta;// Terminará imediatamente sua execução, e retornará seus argumentos como valor à chamada da função
    }
    
    function deposito(array $conta, float $valorDeposito){
        if($valorDeposito > 0){
            $conta['saldo'] += $valorDeposito; //adicionar o valor do deposito
        }else{
            exibeMensagem(mensagem:"Apenas depositos acima de 1$");
        }
        return $conta;
    }
    
    function titularComNomeMaiusculas(array &$conta) //Ao utilizar o & antes da variável é passada por referencia, 
    {
        $conta['titular'] = strtoupper($conta['titular']); //strtoupper usado para pegar uma string e colocar todos caracteres em maiuscula.
        echo $conta['titular'] . PHP_EOL;
        
    } */
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar)
{
    if ($valorASacar > $conta['saldo']) { 
        exibeMensagem("Você não pode sacar este valor"); 
    } else {
        $conta['saldo'] -= $valorASacar; 
    }
    return $conta;
}

function deposito(array $conta, float $valorDeposito)
{
    if($valorDeposito > 0){
        $conta['saldo'] += $valorDeposito; 
    }else{
        exibeMensagem(mensagem:"Apenas depositos acima de 1$");
    }
    return $conta;
}

function titularComNomeMaiusculas(array &$conta)// usado para passagem por referencia
{
    $conta['titular'] = strtoupper($conta['titular']);
       
}
