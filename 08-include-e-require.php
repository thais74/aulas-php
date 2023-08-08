<?php
/* Fazendo a inclusão de um arquivo de recursos */
require "recursos.php";

/* include OU require
A diferença entre eles é na forma como lidam no
caso de acontecer algum erro na inclusão.

Erros de carregamento com include, dão alertas (warnings)
mas NÃO PARAM completamente a aplicação.

Erros de carregamento com require, dão erro fatal (fatal
error), e PARAM completamente a aplicação. */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modularização e Inclusão de Recursos</title>
</head>
<body>
    <h1>Modularização e Inclusão de Recursos</h1>
    <hr>

    <h2> <?=ESCOLA?> </h2>
    <p>Estamos fazendo o curso de <?=$curso?></p>

    <!-- Monte uma lista não-ordenada contendo
    cada uma das tecnologias -->
    <ul>
        <?php foreach($tecnologias as $tecnologia){ ?>
            <li> <?=$tecnologia?> </li>
        <?php } ?>
    </ul>

    <p> O aluno Fulano tem 20 anos e é <?=verificaIdade(20)?> 
    de idade. </p>

    <hr>

    <article>
        <h2>Título qualquer...</h2>
        <?php include "textos.php" ?>
    </article>


</body>
</html>