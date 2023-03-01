<div class="titulo">Integração CSS</div>

<h1 center>
<?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo!';
    echo '</small>';
?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'!</div>" ?>
<br>
<!-- Pode integrar para uma nomeação dinamica -->
<div center><button dobro><?= "teste" ?></button></div>

<style>
    button {
        /* padding: 5px 20px; */
        padding: 5px <?= 2 * 10 ?>;
        /* Pode integrar o PHP no CSS para valores Dinámicos */
        background-color: rgb(10, 84, 153);
        color: white;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: rgb(10, 84, 153);
    }

    [dobro] {
        font-size: 2rem;
    }
</style>
