<div class="titulo">Desafio Equação</div>

<?php

$a1 = 6;
$p = 3;
$z = 2;
$a2 = $p + $z;
$a3 = $p * $z;
$Aa1 = ($a1 * $a2)**$z;
$a = $Aa1 / $a3;
$b1 = 1 - 5;
$b2 = $z - 7;
$Bb1 = ($b1 * $b2)/$z;
$b = $Bb1**$z;
$primeiraParte = ($a - $b);
$segundaA = 10;
$Principal = ($primeiraParte**$p) / $segundaA**$p;

echo "<nav class='modulos'>";
echo "<div>";
echo "(" . $a . "-" . $b . ")³<br>";
echo "---------<br>";
echo $segundaA . "³<br>";
echo "</div>";

echo "<div>";
echo "(" . $primeiraParte . ")³<br>";
echo "---------<br>";
echo $segundaA . "³<br>";
echo "</div>";

echo "<div><br>";
echo $Principal . "<br>";
echo "</div>";

echo "</nav><br>";

// Abaixo Resposta do Professo

$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;
echo "O resultado final é " . $final . ".";
