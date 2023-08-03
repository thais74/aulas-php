<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    
<?php 
function calMedia ($nota1, $nota2){
    $media = ($nota1 + $nota2) / 2;
    return $media;
}

function situacao ($resultadoMedia){
    if ($resultadoMedia >= 7){
    return " você foi aprovado";
} else {
    return " você foi reprovado";
};
}


?>

<p>Sua média é <?=calMedia(10, 8)?> e <?= situacao(calMedia(10, 8))?> </p>

</body>
</html>