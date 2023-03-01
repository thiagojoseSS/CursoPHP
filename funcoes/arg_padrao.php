<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = "Senhor(a)", $sobrenome = "Cliente")
{
  return "Bom dia, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(null, NULL);
echo saudacao('Mestre', 'Supremo');

/* 
  Dica: Colocar Argumento Padrão por último, caso contrário, terá que sempre 
  passar o valor padrão (ficando desnecessário deixar um argumento padrão).
  Segue exemplo da função anotarPedido2.
*/
function anotarPedido($comida, $bedida = 'Água')
{
  echo "Para comer: $comida<br>";
  echo "Para beber: $bedida<br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bedida = 'Água', $comida)
{
  echo "Para comer: $comida<br>";
  echo "Para beber: $bedida<br>";
}

// anotarPedido2('Refrigerante');
anotarPedido2('Refrigerante2', 'Pizza2');
