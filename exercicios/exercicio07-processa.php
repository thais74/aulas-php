<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 

    <?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores dos campos do formulário
    $nome = $_POST["nome"];
    $fabricante = $_POST["fabricante"];
    $preco = isset($_POST["preco"]) ? $_POST["preco"] : ""; // Check if "preco" exists, assign empty string if not
    $disponibilidade = isset($_POST["disponibilidade"]) ? $_POST["disponibilidade"] : ""; // Check if "disponibilidade" exists, assign empty string if not
    $descricao = $_POST["descricao"];

    // Sanitiza os dados utilizando filtros
    $nome = filter_var($nome, FILTER_SANITIZE_STRING);
    $fabricante = filter_var($fabricante, FILTER_SANITIZE_STRING);
    $preco = filter_var($preco, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $disponibilidade = filter_var($disponibilidade, FILTER_SANITIZE_STRING);
    $descricao = filter_var($descricao, FILTER_SANITIZE_STRING);

    // Validação dos campos obrigatórios
    if (empty($nome) || empty($preco)) { ?>
        <p>"Por favor, preencha todos os campos obrigatórios."</p> <?php
    } else { ?>
        <div class="container mt-5">
           <div class="container-sm">
                <div  class="alert alert-success" role="alert">
                     <h2>Informações cadastradas:</h2>
                </div>

                <p> Produto cadastrado com sucesso!  </p>
                <p> Nome: <?=$nome?> </p>
                <p> Fabricante:  <?=$fabricante?> </p>
                <p> Preço:  <?=$preco?> </p>
                <p> Disponibilidade: <?=$disponibilidade?> </p>
                <p> Descrição: <?=$descricao?> </p>
                </div> 
        </div>
        
        
        <?php
    }
}
?>

</body>
</html>
