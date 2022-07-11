<?php

class lutador{
    //atributos
    private string $nome;
    private string $nacionalidade;
    private int $idade;
    private float $altura;
    private float $peso;
    private string $categoria;
    private int $vitorias;
    private int $derrotas;
    private int $empates;

    //metodos especiais
    public function __construct(string $no, string $na, int $id, float $al, float $pe, int $vi, int $de, int $em)
    {
        $this -> nome = $no;
        $this -> nacionalidade = $na;
        $this -> idade = $id;
        $this -> altura = $al;
        $this -> setPeso($pe);
        $this -> vitorias = $vi;
        $this -> derrotas = $de;
        $this -> empate = $em;
    }

    //metodos

    public function apresentar()
    {
        echo "Lutador: " . $this ->getNome() . PHP_EOL;
        echo "Origem: " . $this -> getNacionalidade() . PHP_EOL;
        echo "idade: " . $this -> getIdade() . PHP_EOL;
        echo "Altura: " . $this -> getAltura() . PHP_EOL;
        echo "Peso: " . $this -> getPeso() . PHP_EOL;
    }

    public function status()
    {
        echo "Nome: " . $this -> getNome() . PHP_EOL;
        echo "Categoria: " . $this -> getCategoria() . PHP_EOL;
        echo "Vitorias:" . $this -> getVitorias() . PHP_EOL;
        echo "Derrotas: " . $this -> getDerrotas() . PHP_EOL;
        echo "Empates: " . $this -> getEmpate() . PHP_EOL;
    }

    public function ganharLuta()
    {
        $this -> setVitorias($this -> getVitorias() + 1);
    }

    public function perderLuta()
    {
        $this -> setDerrotas($this -> getDerrotas() + 1);
    }

    public function empatarLuta()
    {
        $this -> setEmpate($this -> getEmpate() + 1);
    }
    //funcoes getters
    public function getNome()
    {
        return $this -> nome;
    }

    public function getPeso()
    {
        return $this -> peso;
    }

    public function getCategoria()
    {
        return $this -> categoria;
    }

    public function getVitorias()
    {
        return $this -> vitorias;
    }

    public function getDerrotas()
    {
        return $this -> derrotas;
    }

    public function getEmpate()
    {
        return $this -> empate;
    }

    public function getNacionalidade()
    {
        return $this -> nacionalidade;
    }

    public function getIdade()
    {
        return $this -> idade;
    }

    public function getAltura()
    {
        return $this -> altura;
    }

    //Funcoes setters
    public function setNome(string $no)
    {
        $this -> nome = $no;
    }

    public function setPeso(float $pe)
    {
        $this -> peso = $pe;
        $this-> setCategoria();
    }

    private function setCategoria()
    {
        if ($this -> peso < 52.2){
            $this -> categoria = "Inválido";
        }else if($this -> peso <= 70.3){
            $this -> categoria = "Leve";
        }else if($this -> peso <= 83.9){
            $this -> categoria = "Médio";
        }else if($this -> peso <=120.5 ){
            $this -> categoria = "Pesado";
        }else{
            $this -> categoria = "Inválido";
        }
    }

    public function setVitorias(int $vi)
    {
        $this -> vitoria = $vi;
    }

    public function setDerrotas(int $de)
    {
        $this -> derrotas = $de;
    }

    public function setEmpate(int $em)
    {
        $this -> empate = $em;
    }

    public function setNacionalidade(string $na)
    {
        $this -> nacionalidade = $na;
    }

    public function setIdade(int $id)
    {
        $this -> idade = $id;
    }

    public function setAltura(float $al)
    {
        $this -> altura = $al;
    }
}