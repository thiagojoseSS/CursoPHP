<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro 
    (nome, nascimento, email, site, filhos, salario) 
    VALUES (
        'Carol',
        '2001-03-02',
        'carol50@email.com',
        'http://carol50.sites.com.br',
        6,
        55000.55
    )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
