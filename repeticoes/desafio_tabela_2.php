<div class="titulo">Desafio Tabela #02</div>

<form action="#" method="post">
    <div>
        <label>Linhas</label>
        <input value=<?= $_POST['linhas'] ?? 10 ?>
        type="number" name="linhas">
    </div>
    <div>
        <label>Colunas</label>
        <input value=<?= $_POST['colunas'] ?? 10 ?>
        type="number" name="colunas">
    </div>
    <button>Criar</button>
</form>

<?php
$linha = intval($_POST['linhas']);
$coluna = intval($_POST['colunas']);

if (!$linha) $linha = 10;
if (!$coluna) $coluna = 10;

$cont = 0;
echo "<table>";
for ($i=0; $i<$linha; $i++){
    echo $i % 2 === 1 ? '<tr impar>' : '<tr par>';
    for ($y=0; $y<$coluna; $y++){
        $cont++;
        echo $y % 2 === 1 ? '<td onTD>' : '<td offTD>';
        echo "$cont</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<style>
    form * {
        font-size: 1.8rem;
    }

    form > div {
        margin-bottom: 10px;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border:1px solid #444;
    }

    table td {
        padding: 10px 20px;
        border-left: 1px solid rgba(70, 99, 99, 0.2);
        border-right: 1px solid rgba(70, 99, 99, 0.2);
    }

    [impar] {
        background-color: lightblue;
    }
    
    [par] {
        background-color: aliceblue;
    }

    [onTD] {
        color: blue;
    }
    
    [offTD] {
        color: firebrick;
    }
</style>