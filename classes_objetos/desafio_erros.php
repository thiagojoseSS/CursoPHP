<div class="titulo">Desafio Erros</div>

<?php
interface Template
{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template
{
    public function metodo1()
    {
        echo "Exetado método 1<br>";
    }
    public function metodo2($parametro)
    {
        echo "Exetado método 2, com parametro $parametro<br>";
    }
    public function metodo3()
    {
        echo "Estou funcionando<br>";
    }
}

class Classe extends ClasseAbstrata
{
    function __construct($parametro)
    {
        $this->metodo2($parametro);
    }
}

$exemplo = new Classe('PLAY');
$exemplo->metodo3();
