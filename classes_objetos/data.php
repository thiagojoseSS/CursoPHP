<div class="titulo">Classe Data</div>

<?php
class DesafioData
{

    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function construct($d, $m, $a)
    {
        $this->dia = $d !== $this->dia ? $d : $this->dia;
        $this->mes = $m !== $this->mes ? $m : $this->mes;
        $this->ano = $a !== $this->ano ? $a : $this->ano;
    }

    public function apresentar()
    {
        echo "{$this->dia}/{$this->mes}/{$this->ano}<br>";
    }
}


$d1 = new DesafioData();
$d1->apresentar();
$d1->construct(16, 2, 1996);
$d1->apresentar();
