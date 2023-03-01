<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<Style>
    button, select {
        font-size: 1.8rem;
    }
</Style>

<?php
// echo $_POST['t1'];
// echo $_POST['t2'];

echo "<br>";

// $trab1 = !!$_POST['t1'];
// $trab2 = !!$_POST['t2'];

// if($trab1 && $trab2){
//     echo "Trabalhos 1 e 2 OK! Compre a TV de 50' e Sorvete!";
// } elseif($trab1 xor $trab2){
//     if($trab1){
//         echo "Trabalhos 1 Concluído!";
//     } elseif($trab2){
//         echo "Trabalhos 2 Concluído!";
//     }
//     echo " Compre a TV de 32' e Sorvete!";
// } elseif($trab1==false && $trab2==false){
//     echo "Fica em casa mais saudável!";
// }

// Resposta do Professor
echo "<br>";
if(isset($_POST['t1']) && isset($_POST['t2'])){
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;
    $resultado = '';

    if($t1 && $t2){
        $tv = '50"';
    } elseif($t1 xor $t2){
        $tv = '32"';
    }

    if($t1 or $t2){
        $sorvete = true;
    }

    if($tv){
        $resultado = "Vamos comprar uma TV de $tv";
    } else {
        $resultado = "Sem TV dessa vez :{";
    }

    $sorvete = !$sorvete;

    if($sorvete){
        $resultado .='<br>Estamos mais saudáveis!';
    } else {
        $resultado .= '<br>Sorvete liberado \o/';
    }
    echo $resultado;
}
