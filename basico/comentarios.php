<div class="titulo">Comentários PHP</div>

<?php
    echo "Estou no PHP";
    // echo "Comentario";
    # echo "Comentario";
    // echo # "Comentario";
    # echo // "Comentario";
    
    echo "<p style='color:green; font-size: 1.4rem;'>";
    echo "<spam style='color:black;'>1  </spam>";
    echo '// echo "Comentario";<br>';
    echo "<spam style='color:black;'>2  </spam>";
    echo '# echo "Comentario";<br>';
    echo "<spam style='color:black;'>3  </spam>";
    echo '// echo # "Comentario";<br>';
    echo "<spam style='color:black;'>4  </spam>";
    echo '# echo // "Comentario";<br>';
    echo "<spam style='color:black;'>5  </spam>";
    echo "# <spam style='color:blue;'>?></spam>";
    echo "</p>";

# ?>

<div style='font-size: 1.2rem;'>
    Se utilizar o comentário de 'Linha' na 
    linha do fechamento do bloco 
    '<spam style='color:blue;'>?></spam>' 
    do PHP, não interfere no fechamento, 
    pois o fechamento é mais forte que o comentário da linha.    
</div>
<p>Depois do primeiro bloco!</p>


<?php
echo "<p style='color:green; font-size: 1.4rem;'>";
echo "/*<br>";
echo "Linha 1 do comentário<br>";
echo "Linha 2 do comentário<br>";
echo "Linha 3 do comentário<br>";
echo "?> */";
/*
Linha 1 do comentário
Linha 2 do comentário
Linha 3 do comentário

?> */
?>

<div style='font-size: 1.2rem;'>
    Agora no comentário de 'Bloco' já é diferente,    
    Quando é comentado o fechamento do bloco 
    '<spam style='color:blue;'>?></spam>'
    do PHP, porque o fechamento do 
    bloco de comentário é mais forte.
</div>
<p>Depois do segundo bloco!</p>

<pre style='color:green; font-size: 1.2rem;'>
<spam><</spam>!-- 
    <spam><</spam>p>Comentário HMTL 1<spam><</spam>/p>
    <spam><</spam>p>Comentário HMTL 2<spam><</spam>/p>
    <spam><</spam>p>Comentário HMTL 3<spam><</spam>/p>
-->
</pre>

<!-- 
    <p>Comentário HMTL 1</p>
    <p>Comentário HMTL 2</p>
    <p>Comentário HMTL 3</p>
-->

