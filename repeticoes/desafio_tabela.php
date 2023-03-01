<div class="titulo">Desafio Tabela</div>

<?php
$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach ($matriz as $linha) {
    foreach ($linha as $valor) {
        echo "<td>$valor </td>";
    }
    echo "<br>";
}

?>
<table>
<?php
foreach ($matriz as $linha) {
    echo "<tr>";
    foreach ($linha as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
?>
</table>

<table>
<?php
for ($cont=0; $cont<=count($matriz); $cont++) {
    echo $cont % 2 === 1 ? '<tr impar>' : '<tr par>';
    foreach ($matriz[$cont] as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
?>
</table>


<style>
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
    }

    [impar] {
        background-color: aquamarine;
    }
    
    [par] {
        background-color: azure;
    }
</style>