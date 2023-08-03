<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Funções como procedimento ou sub-rotina</h2>

    <?php
function dadosAutor(){
    echo "<div>";
    echo "<p> Thais da Silva Soares</p>";
    echo "<p> <a href='' > email@aa.com.br";
    echo "</div>";
}
    
?>

<section>
    <h3>Chamada da sub-rotina/procedimento</h3>
    <?=dadosAutor()?>
    <article>
        <h4>Outra chamada</h4>
        <?=dadosAutor()?>
    </article>
</section>
<hr>


<h2>Função com retorno e dados</h2>
<?php
function dadosCurso(){
    return "Técnico em Informática para Internet";
}
?>

<p>Estamos no curso de <?=dadosCurso()?></p>
<p><?=dadosCurso()?> é ministrado no Senac Penha</p>

<h2>Função com parâmetros (ou argumentos)</h2>
<?php
function soma($valor1, $valor2, $valor3){
    $total = $valor1 + $valor2 + $valor3;
    return $total;
}

?>

<p> Resultado 1:  <?=soma(10, 20, 5)?></p>
<p> Resultado 2:  <?=soma(23, 84, 1000.75)?></p>
<?php
$resultado3 =soma(500, 480, 700);
?>

<p>Resultado 3: <?=$resultado3?></p>

<?php if($resultado3 > 100) { ?>
<p>Vinicius foi reprovado</p>
<?php } ?>

<?php if (soma (2, 3, 10) >= 10){ ?>
    <p>Leandro reprovado!!</p>
<?php } 

?>

<?php
function saudacao ($mensagem, $pessoa = "Fulano(a)"){
    return "Olá, $mensagem $pessoa!";
}
?>

<p><?=saudacao("Bom dia", "Melissa")?></p>
<p><?=saudacao("Boa noite", "Tanaka")?></p>
<p><?=saudacao("Boa tarde")?></p>

<h2>Indução de tipos de dados</h2>
<?php
/* Tipos de dados mais comuns
string --> caracteres em geral
int --> números inteiros
float --> números com casas decimais
array --> vetor
*/

/* Indução de tipos deve ser feita nos parâmetros e no retorno da função.

Isso auxiliatá na entrada/saída correta dos dados
manipulados pela função, além de melhorar as mensagens de erro quando ocorrem problemas. */


function verificaNegativo($valor):string{
        /* Early return 
        (é possível emitir o else neste caso) */
    if($valor < 0){
        return "é negativo";
    }    else{
            return "não é negativo";
        }

        // código abaixo da problema
        /* <p> Número 50: <?=verificanegativo("TEXTO")?></P> */
    }
?>



<p>Número 10: <?=verificaNegativo(10)?></p>
<p>Número -10: <?=verificaNegativo(-10)?></p>

<hr>
<h2>Função anônima (ou closure, lambda)</h2>

<?php
$formataPreco = function (float $valor){
    $precoFormatado = "R$".number_format($valor, 2, ",", ".");
    return $precoFormatado;
    // obrigatorio usar ;
}

?>

<p>1000 formatado fica: <?=$formataPreco(1000)?> </p>

</body>
</html>