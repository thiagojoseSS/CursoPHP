<div class="titulo">Desafio Impressão</div>

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($cont = 0;;$cont++){
    if($cont == count($array) - 1) break;
    if($cont % 2 === 1) continue;
    if($cont > 0) echo ", ";
    echo "$array[$cont]";
}
echo "<br>";
foreach ($array as $key => $value) {
    if($key % 2 === 1) continue;
    if($key > 0) echo ", ";
    echo "{$array[$key]}";
}
echo "<hr><span>Resposta do Professor</span><br>";
//Resposta do Professor
for($i = 0; $i < count($array); $i++){
    if($i % 2 === 1) continue;
    echo "{$array[$i]} ";
}
echo "<br>";

foreach ($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    echo "$valor ";
}