<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<?php 

function calMedia ($notas){
    $soma = array_sum($notas);
    $media = $soma / count($notas);
    return $media;

}

function situacao ($media){
    if ($media >= 7){
    return '<div class="aprovado"> você foi aprovado</div>';
} else {
    return '<div class="reprovado"> você foi reprovado</div>';
};
}

?>

<?php

$alunos = array (
    array ('aluno' => "Alex ",
    "notas" => array (5, 7)),

    array ('aluno' => "Vanessa ",
    "notas" => array (10, 9)),
    
    array ('aluno' => "Larissa ",
    "notas" => array (10, 9)),

    array ('aluno' => "Daniel ",
    "notas" => array (10, 9)),

    array ('aluno' => "Yasmin ",
    "notas" => array (10, 9)),

);

?>

<?php

foreach ($alunos as $i=> $aluno){
    $nome = $aluno["aluno"];
    $notas = $aluno ["notas"]; 
    $media = calMedia($notas);
    $situacao = situacao($media);

}

echo "Aluno ". ($i + 1) . ": Média = $media - Situação: $situacao";
?>




</body>
</html>