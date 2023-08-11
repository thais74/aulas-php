<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<!-- Script deve ficar no final da página, pouco antes do </body> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 

<!-- Podia ter pelo menos um <h1> aqui -->

    <?php
// Verifica se o formulário foi enviado
/* Essa verificação está correta, mas é desnecessária.
Afinal, você já tinha definido o action do seu formulário. */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores dos campos do formulário
    $nome = $_POST["nome"];
    $fabricante = $_POST["fabricante"];

    /* Esse ternário está correto, mas poderia ser simplificado usando ?? */
    $preco = isset($_POST["preco"]) ? $_POST["preco"] : ""; // Check if "preco" exists, assign empty string if not
    $disponibilidade = isset($_POST["disponibilidade"]) ? $_POST["disponibilidade"] : ""; // Check if "disponibilidade" exists, assign empty string if not
    $descricao = $_POST["descricao"];

    // Sanitiza os dados utilizando filtros

    /* Pelo que entendi, primeiro você capturou os dados (variáveis acima)
    e depois reatribuiu valores à elas com sanitização, certo?
    É uma forma válida, embora não muito comum (afinal, dá pra fazer de uma vez só).
    
    Quanto as sanitizações, o FILTER_SANITIZE_STRING foi descontinuado.
    O ideal é usar o SPECIAL_CHARS. */

    $nome = filter_var($nome, FILTER_SANITIZE_STRING);
    $fabricante = filter_var($fabricante, FILTER_SANITIZE_STRING);

    /* Esta sanitização está certinha. */
    $preco = filter_var($preco, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $precoBRL = $preco;
    $disponibilidade = filter_var($disponibilidade, FILTER_SANITIZE_STRING);
    $descricao = filter_var($descricao, FILTER_SANITIZE_STRING);

    // Validação dos campos obrigatórios
    if (empty($nome) || empty($preco)) { ?>
        <p>"Por favor, preencha todos os campos obrigatórios."</p> <?php
    } else { ?>
        <div class="container mt-5">
           <div class="container-sm">
                <div  class="alert alert-success" role="alert">
                     <h2> Produto cadastrado com sucesso!  </h2>
                </div>

                <p> Nome: <?=$nome?> </p>
                <p> Fabricante:  <?=$fabricante?> </p>
                <p> Preço:  <?= 'R$' .number_format($precoBRL, 2, ",", ".")?> </p>
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
