<div class="titulo">Primeira Classe</div>

<?php
class Cliente
{
  public $nome = "Anômino";
  public $idade = 18;

  public function apresentar()
  {
    echo "Nome: {$this->nome} Idade: {$this->idade}<br>";
  }
}

$c1 = new Cliente();
echo $c1->nome, "<br>";
$c1->nome = "Thiago José";
echo $c1->nome, "<br>";
$c1->idade = 26;
$c1->apresentar();

$c2 = new Cliente;
$c2->nome = "Gabriel";
$c2->idade = 43;
$c2->apresentar();
