<?php namespace Desafio\Namesp\Proprio; ?>
<div class="titulo">Desafio Próprio</div>

<?php
include_once('desafio_usuario2.php');

use \Desafio\Namesp\Usuario as ctx;
$usuario = new ctx\Usuario2('Thiago JSS', 26, 'th#2022');
$usuario->apresentar();
unset($usuario);
