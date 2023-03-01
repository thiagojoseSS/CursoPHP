<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // Aspas simples não vai interpolar a variável
echo "<br> $numero"; // Aspas Dupla vai interpolar a variável

$texto = "A sua nota é : $numero";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos";
echo "<br>Eu tenho 5 {$objeto}s."; // interpolar ao lado de outra string
echo "<br>Eu tenho 5 { $objeto}s, mas perdi 3 {$objeto }s."; // exemplo com espaço no inicio e no final, dentro da chave
