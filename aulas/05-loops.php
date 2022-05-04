<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>
<body>
    <h1>Loops (ou laços de repetição</h1>
    <hr>

    <h2>While (enquanto)</h2>

<?php 
    $i = 1;
    while ($i <= 3) {  //ou $i < 4; ?>
        <p> <?=$i?></p>
<?php
        $i++;
    }
?>

    <h2>do/while (Faça/enquanto)</h2>

<?php 
    $j = 1;
    do {
?>

        <div style="border: solid 1px; text-align: center;">
            <h3>Exemplo <?=$j?> </h3>
        </div>

<?php 
    $j++;
    } while($j <=5);
?>


    <h2>for (para)</h2>
<?php 
for ($i = 1; $i <= 3; $i++) {
?>
    <p>Valor de i é <b><?=$i?></b></p>
<?php 
}
?>

    <h2>Exercício Array e Loop</h2>
    <p>Crie um array contendo os nomes dos 12 meses do ano.</p>
    <p>Usando um loop, faça o nome dos meses aparecer em uma lista ordenada</p>

    <ol>

<?php 
    const meses = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro",];
    $n = 0;

    do { ?>

        <li> <?=meses[$n]?> </li>
<?php
    $n++;
    } while ($n < count(meses));
?>


    </ol>

    <h2>foreach (para cada)</h2>
    <p>loop exclusivo para Arrays</p>

    <ol>
        <?php foreach(meses as $mes) {?>
        <li> <?=$mes?> </li>
        <?php }; ?>
    </ol>

    <?php 
        $curso = [
            "nome" => "Programador Web",
            "carga_horaria" => 240,
            "unidade" => "Penha",
            "ucs" => 5
        ];

        foreach($curso as $key => $value) {
    ?>

    <p> <?=$dados?> <?=$valor?>  </p>

    <?php } ?>


</body>
</html>