<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07</title>
    <link rel="stylesheet" href="style07.css">
</head>
<body>

    <h1>Cadastro de produtos</h1>
    

    <form class="container-fluid method="post" action="exercicio07-processa.php">

        <p>
            <label for="nome">Produto:</label>
            <input type="text" name="nome" id="nome" required>
        </p>

        <div>
        
    
        <label> Fabricante: </label>
        <select id="fabricante" name="fabricante">
            <?php
        // Array com os nomes dos fabricantes
        $fabricantes = array("Fabricante A", "Fabricante B", "Fabricante C", "Fabricante D");

        // Carrega as opções do select com base nos dados do array
        foreach ($fabricantes as $fabricante) {
          echo "<option value='$fabricante'>$fabricante</option>";
        }
        ?>
        </select>

        </div>

        <p>
            <label for="">Preço:</label>
            <input type="number" id="preco" name="preco" min="100" max="10000" step="0.01" required>
        </p>

        <p>
            <label for="" >Disponível:  </label>
            <label for="sim">Sim</label>
            <input type="radio" id="sim" name="disponibilidade" value="sim">

            <label for="nao">Não</label>
            <input type="radio" id="nao" name="disponibilidade" value="nao">
        </p>

        <p>
            <label for="descricao">Descrição: </label>
            <textarea name="descricao" cols="20" rows="6"></textarea>
        </p>

        <br>

        <button type="submit" value="cadastrar">Enviar</button>

    </form>


</body>
</html>