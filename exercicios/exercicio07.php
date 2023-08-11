<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07</title>
    <!-- Bom uso do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <!-- Script sempre no final da página -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>  


    
<div class="container mt-5">


<div class="container-sm">
    <h1>Cadastro de produtos</h1>
    
    <form class="row g-3" method="post" action="exercicio07-processa.php">

        <div class="col-md-6">
            
                <label class="form-label" for="nome">Produto:</label>
                <input class="form-control" type="text" name="nome" id="nome" required>
            
        </div>
        

        <div class="col-md-6">
        
    
        <label class="form-label"> Fabricante: </label>
        <select class="form-select" aria-label="Default select example" id="fabricante" name="fabricante">

        <!-- PHP está correto, mas é bom deixar um <option> vazio antes -->
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


        <div class="col-mb-6">
            <label class="form-label" for="">Preço:</label>
            <div class="input-group mb-3">
                <span class="input-group-text">R$</span>
                <input aria-describedby="basic-addon3 basic-addon4" class="form-control" type="number" id="preco" name="preco" min="100" max="10000" step="0.01" required>
            </div>
        </div>
        

        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0" for="" >Disponível:  </legend>
            <div  class="col-sm-10">
                    <div class="form-check">
                            <label class="form-check-label" for="sim">Sim</label>
                            <input class="form-check-input" type="radio" id="sim" name="disponibilidade" value="sim">  
                    </div> 

                    <div class="form-check">
                        <label class="form-check-label" for="nao">Não</label>
                        <input class="form-check-input" type="radio" id="nao" name="disponibilidade" value="nao">
                    </div>
            </div>
                
        </div>
        
        

        <div class="col-md-6">
            <p>
                <label class="form-label" for="descricao">Descrição: </label>
                <textarea class="form-control" name="descricao" cols="20" rows="6"></textarea>
            </p>
        </div>
        

        <br>

        <div class="col-12">
            <button type="submit" value="cadastrar" class="btn btn-primary">Enviar</button>
        </div>
        

    </form>
</div>

</div> 

</body>
</html>