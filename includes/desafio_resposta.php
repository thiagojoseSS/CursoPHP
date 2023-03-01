<div class="titulo">Desafio Includes</div>

<?php
include_once('desafio_usuario.php');
$usuario = new Usuario('Thiago JSS', 26, 'th#2022');
$usuario->apresentar();
unset($usuario);
