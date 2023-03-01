<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

// Atribuição por Valor
$variavelValor = $variavel;
echo "<br>".$variavelValor;
$variavelValor = 'novo valor';
echo '<br><table><tr><td>$variavel</td><td>$variavelValor</td>';
echo "<tr><td>{$variavel}---------></td><td>{$variavelValor}</td></tr></table>";

// Atribuição por Referência
echo '<table><tr><td>$variavel</td><td>$variavelReferencia</td>';
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';
echo "<tr><td>{$variavel}--></td><td>$variavelReferencia</td></tr></table>";
