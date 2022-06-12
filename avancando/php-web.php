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
     exibeMensagem("Apenas depositos acima e 1$");
    }
    return $conta;
}

function titularComNomeMaiusculas(array &$conta)// usado para passagem por referencia
{
    $conta['titular'] = strtoupper($conta['titular']);
       
}

function exibeConta(array &$conta)
{
  echo  "<li>Titular: $conta[titular], Saldo: $conta[saldo] </li>";
}



$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.456.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ]
];


$contasCorrentes['123.456.789-10'] = deposito(
    $contasCorrentes['123.456.789-10'], 540
);
$contasCorrentes['123.456.789-11'] = deposito(
    $contasCorrentes['123.456.789-11'],  400
);
$contasCorrentes['123.456.789-12'] = sacar(
    $contasCorrentes['123.456.789-12'], 500
);

unset($contasCorrentes['123.456.789-11']); //unset é usado para excluir algum item da lista

titularComNomeMaiusculas($contasCorrentes['123.456.789-10']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

  <dl>
    <?php foreach($contasCorrentes as $cpf => $conta){ ?>
  
    <dt>
      <h3><?= $conta['titular'];?> -<?= $cpf;?> </h3>
    </dt>
    <dd>
      Saldo: <?=  $conta['saldo'];?>
    </dd>
    <?php } ?> 
  </dl>
  
</body>
</html>