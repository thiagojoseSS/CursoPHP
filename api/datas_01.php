<div class="titulo">Datas #01</div>

<?php
echo '<span style="font-size:1.2rem;">soma em segundos a partir da data 01/01/1940 às 00:00 até o exato momento que a função "time()" é chamado:</span><br>';
echo time() . '<br>';
echo '<span style="font-size:1.2rem;">Utilizando a função "date(\'D, d \d\e m \d\e Y h:i A\')":</span><br>';
$zone = 60 * 60 * 3;
echo date('D, d \d\e m \d\e Y h:i A', time() - $zone) . '<br>';

// $zone = 60 * 60 * 3;
// echo $zone . ' - ' . $zone / 60 / 60;

echo '<span style="font-size:1.2rem;">Utilizando a função "strftime(\'%A, %d de %B de %Y\')":</span><br>';
echo strftime('%A, %d de %B de %Y', time() - $zone) . '<br>';
setlocale(LC_TIME, 'pt-BR.UTF-8', 'pt-BR');
echo '<span style="font-size:1.2rem;">Após a função "setlocale(LC_TIME, \'pt-BR.UTF-8\', \'pt-BR\')":</span><br>';
echo strftime('%A, %d de %B de %Y', time() - $zone) . '<br>';

echo '<span style="font-size:1.2rem;">Definindo data Amanhã:</span><br>';
$amanha = time() + (24 * 60 * 60) - $zone;
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

echo '<span style="font-size:1.2rem;">Definindo data + 1 semana "strtotime(\'+1 week\')":</span><br>';
$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

echo '<span style="font-size:1.2rem;">Definindo data Fixa "mktime(15, 30, 50, 2, 16, 1996)":</span><br>';
$dataFixa = mktime(15, 30, 50, 2, 16, 1996);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa) . '<br>';
