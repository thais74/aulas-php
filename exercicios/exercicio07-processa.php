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
    if (empty($nome) || empty($preco)) {
        echo "Por favor, preencha todos os campos obrigatórios.";
    } else {
        // Processa os dados (por exemplo, salvar em um banco de dados)
        echo "Produto cadastrado com sucesso!";
        echo "<br>";
        echo "Nome: " . $nome;
        echo "<br>";
        echo "Fabricante: " . $fabricante;
        echo "<br>";
        echo "Preço: " . $preco;
        echo "<br>";
        echo "Disponibilidade: " . $disponibilidade;
        echo "<br>";
        echo "Descrição: " . $descricao;
    }
}
?>