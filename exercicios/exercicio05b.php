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
    return '<b class="aprovado"> você foi aprovado</b>';
} else {
    return '<b class="reprovado"> você foi reprovado</b>';
};
}

?>

<?php

$alunos = array (
    array (
        'aluno' => "Alex ",
        "notas" => array (5, 7)
    ),

    array (
        'aluno' => "Vanessa ",
        "notas" => array (7, 9)
    ),
    
    array ('aluno' => "Larissa ",
    "notas" => array (10, 8)),

    array ('aluno' => "Daniel ",
    "notas" => array (2, 10)),

    array ('aluno' => "Yasmin ",
    "notas" => array (8, 9)),

);

?>

<?php

foreach ($alunos as $aluno => $dados){
    $nome = $dados["aluno"];
    $notas = $dados["notas"]; 
    $media = calMedia($notas);
    $situacao = situacao($media);

echo "<p>Aluno $nome - Média = $media - Situação: $situacao </p>";


}
?>




</body>
</html>