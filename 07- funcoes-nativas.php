<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>
    
    <h1>Exemplos de funções nativas</h1>
    <hr>

    <h2>Strings</h2>
    <h3>trim()</h3>
<?php
// Função que remove espaços antes e depois de strings.
$nome = "   Vinicius me deve 50 paçocas         ";
$nomeSemEspaco = trim($nome);
?>

<pre><?=var_dump($nome)?></pre>
<pre><?=var_dump($nomeSemEspaco)?></pre>

<h3>str_replace()</h3>
<?php
//Função que permite substituição de strings/caracteres
$fraseFeia = "<p> Fulano é um bobão e xarope</p>";
$fraseBunitinha = str_replace(
    ["xarope", "bobão"],
    "******",
    $fraseFeia
);
?>

<p><?=$fraseFeia?></p>
<p><?=$fraseBunitinha?></p>
    <hr>

    <h2>Numéricas</h2>
    <h2>Arrays</h2>

    <h2>Filtros</h2>

    <h2>Segurança</h2>



</body>
</html>