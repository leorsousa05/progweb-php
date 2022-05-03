<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcçoes no PHP</title>
</head>
<body>
    <h1>Funções no PHP</h1>
    <hr>

    <h2>Funções básicas (sem retorno)</h2>

<?php 
    function dadosAutor(){
        echo "<div>";
        echo "<p> Tiago B. dos Santos</p>";
        echo date("d/m/y");
        echo "</div>";
    };
?>

    <section>
        <p>Projeto site Back-End</p>
        <?=dadosAutor()?>
    </section>

<?php 
    function dadosCurso(){
        return "Programador Web - 240 horas";
    };
?>

    <p>Informações: <?=dadosCurso()?></p>
    <p>O Senac Penha tem o curso
        <?=dadosCurso()?>
    </p>
    <h2>Funções com parâmetros/argumentos</h2>

<?php 
function soma($valor1, $valor2) {
    return $valor1 + $valor2;
};
?>

<p> <?=soma(150,200)?> </p>
<p> <?=soma(28,87)?> </p>

<?php
$primeiro = 1257.45;
$segundo = 10489;
?>

<p><?=soma($primeiro, $segundo)?></p>

<?php 
$preco = 1578.99;
$desconto = 75.4789;
$salarioMinimo = 1212;
$novoSalario = 2500.47;
function number_mask(float $number, int $casasDecimais):string {
    return "R$ ".number_format($number, $casasDecimais, '.', ',');
};
?>

<ul>
    <li>Preço: <?=number_mask($preco)?></li>
    <li>Desconto: <?=number_mask($desconto)?></li>
    <li>Salário Mínimo: <?=number_mask($salarioMinimo)?></li>
    <li>Novo salário: <?=number_mask($novoSalario)?></li>
</ul>

<h2>Indução de tipos de dados</h2>

<?php 
function calculaMedia(float $nota1, float $nota2):float {
    return ($nota1 + $nota2) / 2;

};
?>

<p> <?=calculaMedia(10,5)?> </p>
<p> <?=calculaMedia(5.5, 7.7)?> </p>
<p> <?=calculaMedia(9.84, 3.41)?> </p>

</body>
</html>