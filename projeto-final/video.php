[11:32, 20/07/2022] Yago: <?php

require_once 'pesso.php';
require_once 'interfacee.php';

class video implements acoesVideo
{
    private $titulo;
    private $avaliacao;
    private $views;
    private $like;
    private $reproduzindo;


    public  function __construct($titulo)
    {
        $this -> titulo =  $titulo;
        $this -> avaliacao = 1;
        $this -> views = 0;
        $this -> like =  0;
        $this -> reproduzindo = false;
    }

    public function getTitulo()
    {
        return $this-> titulo;
    }
    public function setTitulo($titulo)
    {
        $this -> titulo = $titulo;
    }

    public function getReproduzindo()
    {
        return $this -> reproduzindo;
    }
    public function setReproduzindo($reproduzindo)
    {
        $this -> reproduzindo = $reproduzindo;
    }

    public function getViews()
    {
        return $this -> views;
    }
    public function setViews($views)
    {
        $this -> views = $views;
    }

    public function getAvaliacao()
    {
        return $this -> avaliacao;
    }
    public function setAvaliacao($avaliacao)
    {
        $media = ($this->avaliacao + $avaliacao)/$this ->views;
        $this -> avaliacao = $media;
    }

    public function play()
    {
        $this -> reproduzindo = true;
    }


    public function pause()
    {
        $this -> reproduzindo = false;
    }

    public function like()
    {
        $this -> like++;
    }

}