<div class="titulo">Variáveis de Variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA";

echo "<br>";

$epa = 'opa';
$opa = 'vish';
$vish = "eita!!!!";
echo "$epa {$$epa} {$$$epa}";

/*
Resumindo:
Quando é criada uma variável com '$' 2 ou mais vezes,
Acontece que é criada uma nova variável com o nome igual ao valor dentro do $ anterior utilizada.
Exemplo:
    $a = 'valorA';
    $$a = 'valorAA';

    igual a:

    $a = 'valorA';
    $'valorA' = 'valorAA';
*/
// Meus testes!
$usuario = 'Thiago';
$$usuario = 'José';
echo "<br>Nome completo: $usuario ${$usuario}";
