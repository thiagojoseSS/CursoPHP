<div class="titulo">PDO: Inserir</div>

<?php

require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro 
        (nome, email, nascimento, site, filhos, salario)
        VALUES 
        (
            'Thiago Master',
            'thiago@lifecti.com.br',
            '1996-2-16',
            'http://thiagolifecti.com.br',
            0,
            4000
        )";

$conexao = novaConexao();
// print_r(get_class_methods($conexao));

if ($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id";
} else {
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}

$conexao->close();
