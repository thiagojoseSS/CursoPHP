<div class="titulo">Operador Ternário</div>

<?php
$idade = 70;
$status;

if ($idade >= 18){
    $status = "Maior de idade";
}else{
    $status = "Menor de idade";
}

echo "$status<br>";

$idade = 7;
$status = $idade >=18 ? "Maior de idade": "Menor de idade";
echo "$status<br>";

$idade = 80;
$status = $idade >= 18 ? ($idade >= 65 ? "Aposentado" : "Maior de idade") : "Menor de idade";
echo "$status<br>";

$idade = 75;
$tipoMaiorIdade = $idade >= 65 ? "Aposentado2" : "Maior de idade2";
$status = $idade >= 18 ? $tipoMaiorIdade : "Menor de idade2";
echo "$status<br>";