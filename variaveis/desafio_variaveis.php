<div class="titulo">Desafio Variáveis</div>

<?php

$a = 'Nossa';
$Nossa = 'Eu';
$Eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';

echo "Resultado desejado:<br>";
echo "Nossa! Eu consegui responder esse desafio.";
echo "<br>Resposta<br>";

echo "{$a}! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";

