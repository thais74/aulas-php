<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estruturas de Controle e Repetição</h1>
    <hr>

    <h2>WHILE (enquanto)</h2>

    <?php
    $i = 1;

//    while($i <= 5){
//        echo "<p> $i</p>";
//        $i++;
//    }

while ($i <= 5){
    ?>

    <p> <?=$i?> </p>
    <?php
    $i++;
}
    ?>


    <h2>DO/WHILE (repita/até)</h2>

    <?php
    $j = 1;


    do {
        ?>

        <div>
        <h3> titulo...</h3>
        <p> lorem ipsum dolor sit amet. </p>
        </div>
        <?php

        $j++;


    } while ($j <= 10);

    ?>

    <h2>FOR (para)</h2>

    <?php
 //Variavel de controle; condição; atualização
 for( $i = 1; $i <= 3; $i++){
?>
    <p><code>i</code> vale:<b> <?$i?> </b></p>

    <?php
 }
?>

<!-- Mini-exercicios
1) Crie um array com os nomes dos meses do ano
2) Usando um loop (qualquer um), acesse e 
mostre os nomes dos meses dentro de uma lista ordenada
-->

<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
?>

<ol> 
<?php
for($t =0; $t <=11; $t++) {
    ?>
    
        <li><?=$meses[$t]?></li>
    

    <?php
    }

?>

</ol>
    
<?php
$alunos = ["Melissa", "Tanaka", "Zimbo"];

$quantidade = count($alunos);

for ($a =0; $a < $quantidade; $a++){
?>

    <p>Nome: <b><?=$alunos[$a]?></b></p>

    <?php
}
?>

<hr>

<h2>FOREACH (para cada)</h2>
<p>útil (e mais facil) para lidar com <code>arrays</code>.</p>

<ol>
    <?php foreach ($meses as $mes){
        ?>
        <li><?$mes?> </li>
<?php    } ?>
</ol>


<?php
$clubes = [
    'Corinthians' => 'Timão',
    'Palmeiras' => 'Porco',
    'São Paulo' => 'Tricolor',
    'Santos' => 'Peixe'
];

foreach ($clubes as $clube => $apelido){
?>

    <p>O <?=$clube?> é conhecido como <?=$apelido?>.</p>

<?php
}

?>


<h2>Loop com Matriz</h2>

<?php
$planoDeEstudos = [
    ['HMTL', 'CSS', 'JS'],
    ['React', 'React Native']
];


// Usando for aninhado

for ($linha=0; $linha <count($planoDeEstudos); $linha++){
    for($coluna =0; $coluna < count($planoDeEstudos[$linha]); $coluna++){
        ?>
        <p><b> <?=$planoDeEstudos[$linha][$coluna]?></b></p>


        <?php
    }
}

?>

<hr>

<?php
// Usando foreach aninhado
foreach ($planoDeEstudos as $linha){
    foreach($linha as $coluna){
?> 
    <p><i><?=$coluna?></i></p>
<?php
    }
}

?>

<?php
$clientes = [
    [
        'nome' => 'Chaves',
        'idade' => 8,
    ],

    [
        'nome' => 'chapolin',
        'idade' => 25,
    ],

    [
        'nome' => 'chiquinha',
        'idade' => 10,
    ]
    ];

foreach ($clientes as $cliente){
?>
    <p>Nome: <?=$cliente['nome']?></p>
    <p>Idade: <?=$cliente['idade']?></p>

    <?php
}

/*  Lembrete sobre sintaxe de estruturas de controle (condicionais e loops)
if(){
}else{
}

if():
else:
endif;

*/
?>

</body>
</html>