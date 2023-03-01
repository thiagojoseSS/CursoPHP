<div class="titulo">Desafio Recursão</div>

<?php

$array = [1, ['A', 'B', ['C', 'D', ['E']]], 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function imprimirEstruturaArray($obj_array, $nivel = Null)
{
  $result = "";
  foreach ($obj_array as $key) {
    if (is_array($key)) {
      $result .= imprimirEstruturaArray($key, $nivel . ($nivel === "=" ? $nivel : substr($nivel, 0, 1)));
      /* Pela resposta do Professor esse trecho de código poder ser simplesmente assim:
          Minha ideia:    ($nivel === "=" ? $nivel : substr($nivel, 0, 1))
          Melhor solução:  $nivel[0]
      */ 

    } else {
      $result .= "$nivel|_ $key<br>";
    }
  }
  return $result;
}

echo imprimirEstruturaArray($array, "=");
