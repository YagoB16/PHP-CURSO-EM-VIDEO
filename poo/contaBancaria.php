<?php

class ContaBanco{
    public int $numConta;
    protected string $tipo;
    private string $titular;
    private float $saldo;
    private bool $status;
    private string $cpf;


  //metodos
    public function abrirConta($type)
    {
        $this -> setTipo($type);
        $this -> setStatus(true);

        if($type == 'cc'){
            $this -> setSaldo(50);//setSaldo, o set é utilizado para modificar informação(nesse caso adiciona 50 ao saldo).
            echo "Sua conta corrente foi criada." . PHP_EOL;
            

        }elseif($type == 'cp'){
            $this -> setSaldo(150);//setSaldo, o set é utilizado para modificar informação(nesse caso adiciona 150 ao saldo).
            echo "Sua conta poupança foi criada." . PHP_EOL;
           
        }
    }

    public function fecharConta()
    {
        if($this -> getSaldo() > 0){ //getSaldo o get é usado para acessar informação(nesse caso) no Saldo.
            echo "Você tem um saldo na sua conta.";
        }elseif($this -> getSaldo() < 0){
            echo "Você tem um saldo devedor.";
        }else{
            $this -> setStatus(false);//setStatus o set é usado para modificar a informação(nesse caso) alterar o status para false.
            echo "Sua conta foi finalizada com sucesso.";
        }
    }


    public function sacar($valorAsacar)
    {   
        if($this -> getStatus(true)){
            if($valorAsacar > $this -> saldo ){
                echo "Você não tem esse valor disponivel para saque.";
            }else{
                $this -> setSaldo($this -> getSaldo() - $valorAsacar);
                echo "Saque autorizado na conta de {$this-> getTitular()}" . PHP_EOL;
            }
        }else{
            echo"a conta está fechada";
        }
    }

    public function depositar($valorAdepositar)
    {
        if($this -> getStatus(true)){
            if($valorAdepositar < 0){
                echo "Digite um valor válido para depósito." . PHP_EOL;
            }else{
                $this -> setSaldo($this -> getSaldo() + $valorAdepositar);//dentro do setSaldo(o getSaldo ira buscar o valor presente nessa conta  + o valor passado pela variável $valorAdepositar). o set é utilizado para modificar as informações.
            }
            }else {
                echo "Não existe conta aberta ";
        }
    }

    public function transefir(float $valorAtransferir,  $contaDestino)//quando fizer uma transferencia passar os paramentros "conta que ira transferir -> transferir(valor para tranferir, variavel da conta que ira receber)
    {
        if($valorAtransferir > $this->getSaldo()){
            echo "Você não pode transferir esse valor." . PHP_EOL;
            return;
        }
        $this -> setSaldo($this -> getSaldo()- $valorAtransferir);//setSaldo irá alterar o saldo $this(conta nessa variável), e dentro do (o getSaldo trará o valor do saldo em conta que será "-" o valor da transferencia).
        $contaDestino -> depositar($valorAtransferir);
        echo "Transferencia da conta de {$this->getTitular()} feita com sucesso." . PHP_EOL;
    }

    public function pagarMensalidade()
    {
        if($this->getTipo()== "cc"){
            $vmensalidade = 12;
        }elseif($this -> getTipo()=="cp"){
            $vmensalidade =20;
        }
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo()-$vmensalidade);
        }else{
            echo "não posso cobrar";
        }
    }

  //metodos especiais

    public function __construct(string $cpfTitular, string $titular) //sempre que criar uma conta, as informações abaixo serão os padrões.
    {
        $this-> setcpfTitular($cpfTitular);//Se não for passado esse valore por parametro, dará um erro.
        $this -> setTitular($titular);//Se não for passado esse valore por parametro, dará um erro.
        $this-> ambiente ="Banco do Yagu";
        $this -> setSaldo(0); //O Saldo irá receber 0.
        $this -> setStatus(false); //O Status será false.
        echo "Conta criada com sucesso" . PHP_EOL;
    }

    public function getNumConta()//get não recebe parametro, e é utilizado para acessar/mostrar informações.
    {
        return $this -> numConta ;
    }

    public function setnumConta(int $nconta)// set recebe parametro, e é utilizado para modificar informações.
    {
        $this -> numConta = $nconta;// numConta é um atributo e $nconta é uma variavel.
    }

    public function getTipo()//get não recebe parametro, e é utilizado para acessar/mostrar informações.
    {
        return $this -> tipo;
    }

    public function setTipo(string $type)// set recebe parametro, e é utilizado para modificar informações.
    {
        $this -> tipo = $type;
        
    } 

    public function getcpfTitular()
    {
        return $this -> cpf;

    }

    public function setcpfTitular(string $cpfTitular)
    {
        $this -> cpf = $cpfTitular;
    }
    
    public function getTitular()//get não recebe parametro, e é utilizado para acessar/mostrar informações.
    {
        return $this -> titular;
    }   

    public function setTitular(string $dono)// set recebe parametro, e é utilizado para modificar informações.
    {
        $this -> titular = $dono;
    }

    public function getSaldo()//get não recebe parametro, e é utilizado para acessar/mostrar informações.
    {
        return $this -> saldo;
    }

    public function setSaldo(float $sal)// set recebe parametro, e é utilizado para modificar informações.
    {
        $this -> saldo = $sal;
    }

    public function getStatus()//get não recebe parametro, e é utilizado para acessar/mostrar informações.
    {
        return $this -> status;
    }

    public function setStatus(bool $st)// set recebe parametro, e é utilizado para modificar informações.
    {
        $this -> status = $st;
    }
    

}
