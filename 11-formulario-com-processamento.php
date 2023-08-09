<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e PHP</title>
</head>
<body>
    
    <h1>Formulário e processamento JUNTOS   </h1>
    <hr>

    <?php
    /* Se o botão enviar for acionado/definido/setado. significa que o formulário foi enviado */

    if (isset($_POST["enviar"])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
    }
    ?>

    <h2>Dados processados:</h2>
    <p>Nome: <?=$nome?></p>
    <p>E-mail: <?=$email?></p>

<?php

?>

    <!-- Nessa nova versão, deixe o action vazio -->
    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input required type="text" name="nome" id="nome" >
        </p>

        <p>
            <label for="email">E-mail</label>
            <input required type="email" name="email" id="email" >
        </p>


    <!--  -->
        <button type="submit" name="enviar" id="enviar">Enviar</button>

    </form>

</body>
</html>