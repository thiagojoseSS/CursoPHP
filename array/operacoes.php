<div class="titulo">Operações</div>

<?php
$dados1 =[
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A";

$dadoCompletos = $dados1 + $dados2;
print_r($dadoCompletos);

echo '<br>' . is_array($dadoCompletos);
echo '<br>' . count($dadoCompletos);


echo '<br>';
$indice = array_rand($dadoCompletos);
echo "$indice = $dadoCompletos[$indice]";
echo '<br>';
echo "{$dadoCompletos['idade']}";
echo " ${dadoCompletos['idade']}";

unset($dadoCompletos["nome"]);
echo '<br>';
print_r($dadoCompletos);

unset($dadoCompletos);
echo '<br>';
var_dump($dadoCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);
