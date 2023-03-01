<div class="titulo">Traits #02</div>

<?php
trait validacao
{
    public function validarString($str)
    {
        return isset($str) && $str !== '';
    }
}
trait validacaoMelhor
{
    public function validarString($str)
    {
        return isset($str) && trim($str);
    }
}

class Usuario
{
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadof validacao;
        // validacao::validarString insteadof validacaoMelhor;

        validacao::validarString as validacaoSimples;
    }
    function __construct()
    {
    }
}

$usuario = new Usuario;
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));
