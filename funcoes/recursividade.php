<div class="titulo">Recursividade</div>

<?php

$x = 10;
function somaUmAte($numero)
{
  $soma = 0;
  for (; $numero >= 1; $numero--) {
    $soma += $numero;
  }
  return $soma;
}

echo "somaUmAte$x<br>";
echo somaUmAte(10) . "<br>";

function somaRecursivaUmAte($numero)
{
  if ($numero === 1) return 1;
  return $numero + somaRecursivaUmAte($numero - 1);
}

echo "<br>somaRecursivaUmAte$x<br>";
echo somaRecursivaUmAte(10) . "<br>";

function somaRecursivaEconomica($numero)
{
  return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo "<br>somaRecursivaEconomica$x<br>";
echo somaRecursivaEconomica(10) . "<br>";
