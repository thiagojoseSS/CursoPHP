<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" =>25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);

var_dump($dados[0]);
echo '<br>' . $dados['idade'];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados['outra_informacao']);

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);

// adicionar um novo elemento
$lista[] = 'i';
echo '<br>';
print_r($lista);

// adicionando um novo elemento com chave
$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);