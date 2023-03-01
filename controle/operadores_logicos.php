<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p>";
var_dump(true);
echo '<br>';
var_dump(!true);

echo "<hr><p class='divisao'>Tabela Verdade 'AND' (E)</p>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

// pode usar && ou AND para o Operador E

// var_dump(true and true);
// var_dump(true and false);
// var_dump(false and true);
// var_dump(false and false);

echo "<hr><p class='divisao'>Tabela Verdade 'OR' (OU)</p>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

// pode usar || ou OR para o Operador OU

// var_dump(true or true);
// var_dump(true or false);
// var_dump(false or true);
// var_dump(false or false);

echo "<hr><p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

// O Equivalente ao XOR é usando o Diferente ={ != }
// var_dump(true != true);
// var_dump(true != false);
// var_dump(false != true);
// var_dump(false != false);

echo "<hr><p class='divisao'>Exemplo</p>";
$idade = 60;
$sexo = 'F';

if($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar -> $sexo";
} else{
    echo 'Vai ter que trabalhar mais um pouco...';
}

$pagouPrevidencia = true;
$criterioHomem = $idade >= 65 && $sexo === 'M';
$criterioMulher = $idade >= 60 && $sexo === 'F';
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

if($podeSeAposentar){
    echo "<br>PODE SE APOSENTAR!";
} else {
    echo "<br>NÃO PODE SE APOSENTAR!";
}