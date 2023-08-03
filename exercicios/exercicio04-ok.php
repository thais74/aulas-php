<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
    <style>
        table {
  table-layout: fixed;
  width: 35%;
  border-collapse: collapse;
  margin: auto;
}



td {
  text-align: center;
}

th {
  height: 70px;
}

    tr:hover {
        background-color: pink;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}

    th {
  background-color: pink;
  color: black;
  border-collapse: collapse;
}

th, td {
  border-bottom: 1px solid #ddd;
}


    </style>
</head>
<body>
    
<?php

$linguagens = [
    [ 'id' => 1,
    "titulo" => 'HTML',
    'descritivo' =>"Estruturação",],

    ['id' => 2,
    "titulo" => " CSS " ,
    'descritivo'=> "Estilos",],


    [ 'id' => 3,
    "titulo" => " JS " ,
    'descritivo'=> "Comportamentos",],


    [ 'id' => 4,
    "titulo" => " PHP ",
    'descritivo'=> "Back-End",],


    [ 'id' => 5,
    "titulo" => " SQL ",
    'descritivo'=> "Manipulação de dados",],


    [ 'id' => 6,    
    "titulo" => "Java" , 
    'descritivo'=> "Softwares",]
];

?>
 <table>
    <tr>
        <th>ID</th>
        <th>Linguagem</th>
        <th>Descrição</th>
    </tr>
 

<?php

foreach ($linguagens as $linguagem){
?>
<tr>
    <td><?=$linguagem['id']?></td>
    <td><?=$linguagem['titulo']?></td>
    <td><?=$linguagem['descritivo']?></td>
</tr>

    <?php
}

?>
</table>




</body>
</html>