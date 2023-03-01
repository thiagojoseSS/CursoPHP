<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="Estados">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.4rem;
    }
</style>

<?php

echo $_POST;
print_r($_GET);
echo '<br>';
print_r($_POST);
echo '<br>' . count($_POST);