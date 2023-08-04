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


<h3>explode()</h3>
<?php
// Função que transforma uma string em um array
$linguagens = "HTML - CSS - JS - PHP";
$arrayLinguagens = explode(" - ", $linguagens)
?>

<pre><?=var_dump($linguagens)?></pre>
<pre><?=var_dump($arrayLinguagens)?></pre>

    <hr>



    <h2>Numéricas</h2>
    <h3>min, max, round</h3>
<?php
$valores = [10, 5, 50, 1000, 275];
$valorQualquer = 1259.76;
?>

<p>Menor valor:<?=min($valores)?></p>
<p>Maior valor:<?=max($valores)?></p>
<p>Arredondamento: <?=round($valorQualquer)?></p>

<hr>

    <h2>Arrays</h2>
    <h3>implode()</h3>
<?php
// Função que transforma array em string
$bandas = ["Megadeth", "Falling in Reverse", "Bad Omens"];
$textoBandas = implode(" - ", $bandas);
?>

<pre><?=var_dump($bandas)?></pre>
<pre><?=var_dump($textoBandas)?></pre>

<h3>extract()</h3>
<?php
// Uma função que extrai chaves associativas para variáveis

$aluno = [
    "id"=> 1,
    "nome" => "Chaves",
    "idade" => 25
];

extract($aluno);
?>

<ul>
    <li>ID: <?=$id?></li>
    <li>Nome: <?=$nome?></li>
    <li>Idade: <?=$idade?></li>
</ul>

<h3>array_sum()</h3>
<?php
// Função para somar os valores de um array

$total = array_sum($valores);
?>

<p>Soma dos valores: <?=$total?></p>

<h3>array_unique()</h3>
<?php
// Função que retorna um novo array com dados únicos
$produtos = [
    "TV", "Notebook", "TV",
    "Geladeira", "Monitor", "Notebook",
    "Teclaod", "Mouse"
];

$produtosUnicos = array_unique($produtos);
?>

<pre><?=var_dump($produtos)?></pre>
<pre><?=var_dump($produtosUnicos)?></pre>

<hr>
    <h2>Filtros</h2>

    <h2>Segurança</h2>



</body>
</html>