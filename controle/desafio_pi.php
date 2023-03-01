<div class="titulo">Desafio PI</div>

<?php
echo "PI = " . pi();
$pi = 3.14;
$piDiferença = $pi * 100 / pi();

if($piDiferença >= 99.94){
    echo "<br>Iguais! Precisão de $piDiferença%";
    echo "<br>Valor da variavel $pi é $pi";
} else {
    echo "<br>Diferentes!";
}


// Resposta do Professor
echo '<br><p>Resposta do Professor</p><hr>';
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - 2.8);

if($pi - pi() <= 0.01){   // O professor confundiu a ordem de subtração, pelo 'maior' - 'menor'!
    echo '<br>Praticamente iguais!';
}
/* 
Não fai funcionar o 0.01, pois a Subtração cima 
Sempres vai ser negativo.
E por isso sempre vai da True, pois qualquer número negativo
Sempre vai ser menor que um número possitivo.
Tipo:
    -0.05 é < 0.01
    -5.0 é < 0.01
    0.05 é > 0.01

A melhor forma é Subtrair o Maior pelo Menor entre os valores.
*/
if(pi() - $pi <= 0.01){
    echo '<br>Praticamente iguais!';
}

if($pi - 2.8 <= 0.01){
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Valor errado!';
}

if(pi() - 2.8 <= 0.01){
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Valor errado!';
}

?>

<style>
    p {
        margin-bottom: 0px;
    }
    hr {
        margin-top: 0px;
        margin-bottom: 0px;
    }
</style>