<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);
echo '<spam style="color:green;"> Linha de Comando: echo is_int(PHP_INT_MAX), "< br>";</spam>';

// int para float
echo '<p style="color:Blue; font-weight:500;">Int para Float</p>';
var_dump(PHP_INT_MAX + 1); // Quando eceder o limite máximo do inteiro, continuar como um Float, pois pegar mais numeros dos Reais.
echo '<spam style="color:green;">Linha de Comando: var_dump(PHP_INT_MAX + 1);</spam>';
echo '<br>';
var_dump(1 + 1.0);
echo '<spam style="color:green;">Linha de Comando: var_dump(1 + 1.0);</spam>';
echo '<br>';
var_dump((float) 3);
echo '<spam style="color:green;">Linha de Comando: var_dump((float) 3);</spam>';

// float para int
// Nesta convesão a perdas de dados, porque INT tem menos informações do que o FLOAT
echo '<p style="color:Blue; font-weight:500;">Float para Int</p>';
var_dump((int) 2.8); // Lembrando que dessa forma [ ( {tipo} ) {variável} ], é a CONVERSÃO EXPLíCITA.
echo '<spam style="color:green;">Linha de Comando: var_dump((int) 2.8);</spam><br>';
var_dump(intval(2.8, 10)); // intval() trunca só a parte inteira.
echo '<spam style="color:green;">Linha de Comando: var_dump(intval(2.8, 10));</spam><br>';
var_dump((int) round(2.8)); // round() arredonda um float para o interio.
echo '<spam style="color:green;">Linha de Comando: var_dump((int) round(2.8));</spam><br>';

// Operações com STRING
echo '<p style="color:Blue; font-weight:500;">Operações com String</p>';
var_dump(3 + "2");
echo '<spam style="color:green;">Linha de Comando: var_dump(3 + "2");</spam><br>';
var_dump("3" + 2);
echo '<spam style="color:green;">Linha de Comando: var_dump("3" + 2);</spam><br>';
var_dump("3" . 2);
echo '<spam style="color:green;">Linha de Comando: var_dump("3" . 2);</spam><br>';
echo is_string("3" . 2);
echo '<spam style="color:green;"> Linha de Comando: echo "< br>", is_string("3" . 2);</spam><br>';
// echo is_string("3" + 2);
// echo '<spam style="color:green;"> Linha de Comando: echo "< br>", is_string("3" + 2);</spam><br>';
var_dump(1 + "cinco");
echo '<spam style="color:green;"> Linha de Comando: var_dump(1 + "cinco");</spam><br>';
var_dump(1 + "5 cinco");
echo '<spam style="color:green;"> Linha de Comando: var_dump(1 + "5 cinco");</spam>
    <spam style="font-size:1rem; color:black;">   Atenção! só vai soma o primeiro caracter da String se for numérico.</spam><br>';
var_dump(1 + "cinco 5");
echo '<spam style="color:green;"> Linha de Comando: var_dump(1 + "cinco 5");</spam><br>';
var_dump(1 + "2+5");
echo '<spam style="color:green;"> Linha de Comando: var_dump(1 + "2+5");</spam>
    <spam style="font-size:1rem; color:black;">   Atenção! operações dentro de String não funcionam, o "+" aqui é uma String.</spam><br>';
var_dump(1 + "25");
echo '<spam style="color:green;"> Linha de Comando: var_dump(1 + "25");</spam><br>';
var_dump(1 + "3.2");
echo '<spam style="color:green;"> Linha de Comando: var_dump(1 + "3.2");</spam><br>';
var_dump(1 + "-3.2e2");
echo '<spam style="color:green;"> Linha de Comando: var_dump(1 + "-3.2e2");</spam><br>';
var_dump((int) "10.5");
echo '<spam style="color:green;"> Linha de Comando: var_dump((int) "10.5");</spam><br>';
var_dump((float) "10.5");
echo '<spam style="color:green;"> Linha de Comando: var_dump((float) "10.5");</spam>
    <spam style="font-size:1rem; color:black;">   Útil para entradas(interação) de usuário com o sistemas.</spam><br>';
