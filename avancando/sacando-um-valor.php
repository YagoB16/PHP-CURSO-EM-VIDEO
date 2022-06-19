<?php
 //Foi criado uma função para exibir a mensagem, o codigo ficou isolado. Subrotina
 /**
  *Nesse  exemplo demonstro uma função matematica 
    *f(x)= X + 2
    *    f(2)= 2 + 2
   *         f(2)=4
  *  x = 2

  *essa fara a mesma coisa 
  * function nomeDaRotina ($parametro)
{
   * // código da subrotina
}
 */
function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

function sacar()
{
    $contasCorrentes

    if(500 > $contas['saldo']){
        exibeMensagem(mensagem:"você não pode sacar");

    }else{
        $conta['saldo'] -=500; 
    }
}


$contasCorrentes = [
    12345678890 => [
        'titular' => 'Yago',
        'saldo' => 1200
    ],
    12334768901 => [
        'titular' => 'Samuel',
        'saldo'=> 1200
    ],
    87266123445 => [
        'titular' => 'Caio',
        'saldo' => 1500
    ]
];

 //$contasCorrentes[12345678890]['saldo'] -= 700 ;
 //O sinal de -= é para  $contasCorrentes[12345678890]['saldo'] = $contasCorrentes[12345678890]['saldo'] - 500 ;
 //Na expressão acima, eu retirei 500 do saldo do cliente cujo o cpf é 12345678890


 if (500 > $contasCorrentes[87266123445]['saldo']){
    exibeMensagem(mensagem: "Você não pode sacar este valor");
 } else{
    $contasCorrentes[87266123445]['saldo'] -= 900;
 }
foreach($contasCorrentes as $cpf => $conta){
  exibeMensagem($cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo']); 
}