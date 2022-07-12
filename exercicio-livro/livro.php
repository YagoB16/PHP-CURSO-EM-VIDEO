<?php 

require_once 'pessoa.php';

class livro
{
    private string $titulo;
    private string $autor;
    private int $totPaginas;
    private int $pagAtual;
    private bool $aberto;
    private  $leitor;

    public function detalhes()
    {
        echo "Livro: " . $this -> titulo . PHP_EOL;
        echo "Autor: " . $this -> autor . PHP_EOL;
        echo "Paginas: " . $this -> totalPaginas . PHP_EOL;
        echo "Lido por: " . $this -> leitor ->getNome() . PHP_EOL;
        echo "Pagina atual: " . $this -> paginaAtual;
    }

    public function __construct(string $ti, string $au, int $totPg, $le)
    {
        $this -> titulo = $ti;
        $this -> autor = $au;
        $this -> totalPaginas = $totPg;
        $this -> paginaAtual = 0;
        $this -> aberto = false;
        $this -> leitor = $le;
    }

    public function getPgAtual()
    {
        return $this -> paginaAtual;
    }
    public function setPgAtual($pgA)
    {
        $this -> paginaAtual = $pgA;
    }

    public function setAberto(bool $ab)
    {
        $this -> aberto = $ab;
    }

    public function getLeitor()
    {
        return $this -> leitor;
    }
    public function setLeitor($le)
    {
        $this -> leitor = $le;
    }

    public function getPaginas()
    {
        return $this -> paginas;
    }
    public function setPaginas($totPg)
    {
        $this -> paginas = $totPg;
    }

    public function getAutor()
    {
        return $this -> autor;
    }
    public function setAutor($au)
    {
        $this -> autor = $au;
    }

    public function getTitulo()
    {
        return $this -> titulo;
    }
    public function setTitulo($ti)
    {
        $this -> titulo = $ti;
    }

    public function abrir()
    {
        $this-> setAberto(true);
    }
    public function fechar()
    {
        $this-> setAberto(false);
    }
    public function folhear($p)
    {
        if($p > $this -> totalPaginas){
            $this -> paginaAtual = 0;
        } else{
            $this -> paginaAtual = $p;
        }
    }
    public function avancarPg()
    {
        $this -> setPgAtual($this -> getPgAtual() + 1);
    }
    public function voltarPG()
    {
        $this -> setPgAtual($this -> getPgAtual() - 1);
    }
}