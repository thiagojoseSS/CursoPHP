<div class="titulo">Argumentos & retorno</div>

<?php

function obterRetorno(){
    return 'Seja bem vindo(a)!';
}

obterRetorno();
$m = obterRetorno();
echo $m;
echo '<br>', obterRetorno();
echo '<br>';
var_dump(obterRetorno());

function obterRetornoComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterRetornoComNome('Thiago');

function soma($a, $b){
    return $a + $b;
}

echo '<br>', soma(4, 5);
echo '<br>', soma(45, 78);

function trocarValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
TrocarValor($variavel, 3);
echo '<br>', $variavel;

/*
    Esta função abaixo recebe o endereço de memória da variável ao colocar o '&' no Argumento.
    Assim altera diretamento o valor da variável passada como paramentro.
    Caso não coloque, ficará normal, passará uma cópia da variável.
*/
function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;
