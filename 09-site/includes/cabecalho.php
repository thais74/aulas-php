<?php
//Recuperar/descobrir qual o nome da página aberta no momento
$pagina = basename($_SERVER['PHP_SELF']);

// Função match()
// Disponível a partir do PHP versão 8
$titulo = match($pagina){
    "index.php" => "Página Inicial",
    "cursos.php" => "Cursos",
    "duvidas.php" => "Dúvidas",
    default3,3 => "Contato"
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site PHP</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1> <?=$titulo?> - Site PHP</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cursos.php">Treinamentos</a>
            <a href="duvidas.php">Dúvidas</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>
    
    <main>