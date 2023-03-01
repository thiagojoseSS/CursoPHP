<div class="titulo">Erros Personalizados</div>

<?php
class FaixaEtariaException extends Exception {
    public function __construct($messagem, $code = 0, $previous = null) {
        parent::__construct($messagem, $code, $previous);
    }
}

function calcularTempoAponsetadoria($idade){
    if ($idade < 18) {
        throw new FaixaEtariaException('Ainda está muito longe');
    }
    if ($idade > 70) {
        throw new FaixaEtariaException('Já deveria está aposentado');
    }
    return 70 - $idade;
}

$idadesAvaliadas = [15, 30, 60 , 80];

foreach ($idadesAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAponsetadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes<br>";
    } catch(FaixaEtariaException $e){
        echo "Não foi possível calcular para $idade anos.<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}

echo "<br>Fim!";
