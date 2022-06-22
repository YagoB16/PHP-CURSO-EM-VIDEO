
<?php

class ContaBanco{
    public int $numConta;
    protected string $tipo;
    private string $titular;
    private float $saldo;
    private bool $status;


  //metodos
    public function abrirConta($type)
    {
        $this -> setTipo($type);
        $this -> setStatus(true);

        if($type == 'cc'){
            $this -> setSaldo(50);//setSaldo, o set é utilizado para modificar informação(nesse caso adiciona 50 ao saldo).
            echo "Sua conta corrente foi criada.";
            

        }elseif($type == 'cp'){
            $this -> setSaldo(150);//setSaldo, o set é utilizado para modificar informação(nesse caso adiciona 150 ao saldo).
            echo "Sua conta poupança foi criada.";
           
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
            }
        }else{
            echo"a conta está fechada";
        }
    }

    public function depositar($valorAdepositar)
    {
        if($this -> getStatus(true)){
            if($valorAdepositar < 0){
                echo "Digite um valor válido para depósito.";
            }else{
                $this -> setSaldo($this -> getSaldo() + $valorAdepositar);//dentro do setSaldo(o getSaldo ira buscar o valor presente nessa conta  + o valor passado pela variável $valorAdepositar).
            }
            }else {
                echo "Não existe conta aberta ";
        }
    }

    public function pagarMensalidade(){
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

    public function __construct() //sempre que criar uma conta
    {
        $this -> setSaldo(0); //o Saldo irá receber 0.
         $this -> setStatus(false); //o Status será false.
         echo "Conta criada com sucesso" . PHP_EOL;
    }

    public function getNumConta()//get não recebe parametro
    {
        return $this -> numConta ;
    }

    public function setnumConta(int $nconta)// set recebe parametro
    {
        $this -> numConta = $nconta;// numConta é um atributo e $nconta é uma variavel.
    }

    public function getTipo()
    {
        return $this -> tipo;
    }

    public function setTipo(string $type)
    {
        $this -> tipo = $type;
        
    } 
    
    public function getTitular()
    {
        return $this -> titular;
    }   

    public function setTitular(string $dono)
    {
        $this -> titular = $dono;
    }

    public function getSaldo()
    {
        return $this -> saldo;
    }

    public function setSaldo(float $sal)
    {
        $this -> saldo = $sal;
    }

    public function getStatus()
    {
        return $this -> status;
    }

    public function setStatus(bool $st)
    {
        $this -> status = $st;
    }
    

}