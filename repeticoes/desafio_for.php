<div class="titulo">Desafio For</div>

<?php
for($i = 1;$i <= 5;$i++){
    for($j = 1; $j <= $i;$j++){
        echo "#";
    }
    echo "<br>";
}

for($i = 1;$i <= 5;$i++){
    switch($i){
        case 1:
            echo "#<br>";
            break;
        case 2:
            echo "##<br>";
            break;
        case 3:
            echo "###<br>";
            break;
        case 4:
            echo "#####<br>";
            break;
        case 5:
            echo "######<br>";
            break;
        default:
            echo "Estouro de do For";
    }
}

//Resposta do Professor

$impressao = '';
for($cont = 1;$cont <= 5;$cont++){
    $impressao .= "#";
    echo "$impressao <br>";
}

for($impressao = "#"; $impressao !== "######"; $impressao.="#"){
    echo "$impressao <br>";
}