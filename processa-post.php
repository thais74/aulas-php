<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    
    <h1>Exemplo usando POST</h1>
    <hr>
    <p>Receber e processar dados via <b>POST</b></p>

<pre><?=var_dump($_POST)?></pre>

<?php
$nome = $_POST["nome"];
$email= $_POST["email"];
$mensagem = $_POST["mensagem"];
?>
    <h2>Dados</h2>
    <ul>
        <li>Nome: </li>
        <li>Email: </li>
        <li>Mensagem: </li>
    </ul>
</body>
</html>