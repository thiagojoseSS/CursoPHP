<?php namespace DesafioIntdiv;

use DivisionByZeroError;
use ValueError;

 ?>
<div class="titulo">Desafio intdiv</div>

<?php
class DivisaoPorZerroException extends \DivisionByZeroError{
    public function __construct($messagem, $code = 0, $previous = null) {
        parent::__construct($messagem, $code, $previous);
    }
}

class NaoInteiroException extends \Exception{
    public function __construct($messagem, $code = 0, $previous = null) {
        parent::__construct($messagem, $code, $previous);
    }
}

function intdiv($a, $b){
    try {
        if ($b === 0) {
            throw new DivisaoPorZerroException("Error! Divisão por Zero!");
            
        }
        if ( is_integer($a / $b)) {
            echo $a / $b . '<br>';
        } else {
            throw new NaoInteiroException('Não é divisão inteira!');
        }
    } catch(DivisaoPorZerroException $z) {
        echo "Não foi possível! Motivo: {$z->getMessage()}!<br>";
    } catch(NaoInteiroException $e) {
        echo "Não foi dessa vez! Motivo: {$e->getMessage()}!<br>";
    }
}

$valores = [[8, 3], [8, 0], [8, 2]];

foreach ($valores as $item) {
    echo \DesafioIntdiv\intdiv($item[0], $item[1]);
}

echo \intdiv(8, 2) . '<br>';

echo "<br>Fim!";
