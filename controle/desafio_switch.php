<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="celsius-fahrenheit">Graus C° > Graus F°</option>
        <option value="fahrenheit-celsius">Graus F° > Graus C°</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size:1.8rem;
    }
</style>

<?php
$valor = $_POST['param'];
$opticao = $_POST['conversao'];
const MILHA = 0.62137;
const METRO = 0.001;


function imprimir($a, $b, $v){
    echo "Opção escolhida foi <br>$a, com o valor de $b = $v";
};

if (is_numeric($valor)){
    switch ($opticao) {
        case 'km-milha':
            $valor *= MILHA;
            imprimir($opticao, $_POST['param'], $valor);
            break;
        case 'milha-km':
            $valor /= MILHA;
            imprimir($opticao, $_POST['param'], $valor);
            break;
        case 'metro-km':
            $valor *= METRO;
            imprimir($opticao, $_POST['param'], $valor);
            break;
        case 'km-metro':
            $valor /= METRO;
            imprimir($opticao, $_POST['param'], $valor);
            break;
        case 'celsius-fahrenheit':
            $valor = $valor * 1.8 + 32;
            imprimir($opticao, $_POST['param'], $valor);
            break;
        case 'fahrenheit-celsius':
            $valor = ($valor - 32) / 1.8;
            imprimir($opticao, $_POST['param'], $valor);
            break;
        default:
            $valor = 'Vazio!';
            echo $valor;
            break;
    }
}

// Resposta do Professor
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(s) = $distancia Km(s)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia Km(s)";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km(s) = $distancia Metro(s)";
        break;
    case 'celsius-fahrenheit':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}° C = {$conversao}° F";
        break;
    case 'fahrenheit-celsius':
        $conversao = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}° F = {$conversao}° C";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";
}

echo "<p><br>$mensagem</p>";