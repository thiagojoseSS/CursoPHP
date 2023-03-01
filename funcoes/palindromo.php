<div class="titulo">Desafio Palindromo</div>

<?php
// phpinfo();

use function PHPSTORM_META\type;

function ePalindromo1($palavra)
{
    $result = '';
    // $palavra = strtolower($palavra);
    $max = strlen($palavra) - 1;
    $contReverso = $max;
    for ($i = 0; $i <= $max; $i++) {
        if ($palavra[$i] == $palavra[$contReverso])
            $result = 'Sim';
        else
            $result = "Não";
        $contReverso--;
    }
    return $result;
}

function ePalindromo2($palavra)
{
    "";
}
$variavel = "arara";
echo "A palavra '{$variavel}' é um palindromo?";
echo '<br>', ePalindromo1($variavel);


// Solução do professor
function palindromo($palavra)
{
    $ultimoIndice = strlen($palavra) - 1;
    for ($i = 0; $i < $ultimoIndice; $i++) {
        if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return "Não";
        }
    }
    return "Sim";
}

echo '<br>-----Solução 1 <br>';
echo palindromo('arara') . ' ';
echo palindromo('ana') . ' ';
echo palindromo('abccba') . ' ';
echo palindromo('bola') . ' ';

// Solução do Professor 2 com funções da API PHP

function palindromoSimples($palavra)
{
    return $palavra === strrev($palavra) ? 'SIM' : 'NÃO';
}

echo '<br>-----Solução 2 <br>';
echo palindromoSimples('arara') . ' ';
echo palindromoSimples('ana') . ' ';
echo palindromoSimples('abccba') . ' ';
echo palindromoSimples('bola') . ' ';
