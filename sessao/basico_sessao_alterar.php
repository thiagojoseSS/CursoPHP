<?php
session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome']?><br>
    <b>Email: </b> <?= $_SESSION['email']?>
</p>

<?php
$_SESSION['email'] = 'gabrielfilho@emailaz.com.br';
?>

<p>
    <a href="/sessao/basico_sessao.php">Voltar</a>
</p>

<p>
    <a href="/sessao/basico_sessao_limpar.php">Limpar Sessão</a>
</p>
