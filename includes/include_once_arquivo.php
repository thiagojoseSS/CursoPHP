<?php
echo 'Carregado: include_once_arquivo.php<br>';

$variavel = 'Estou definida';

if (!function_exists('soma')) {
    function soma($a, $b)
    {
        return $a + $b;
    }
}
