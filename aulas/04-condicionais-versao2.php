<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP (versão 2)</title>
    <style>
        .aprovado {color: blue;}
        .recuperacao {color: orangered;}
        .reprovado {color: red;}
    </style>
</head>
<body>
    <h1>Condicionais</h1>
    <hr>

    <h2>Simples</h2>

    <?php

    $numero = 5;
    $outroNumero = 1;

    if( $numero > $outroNumero ) {
    ?>

    <p> <?=$numero?> é maior que <?=$outroNumero?></p>
    
    <?php
    }
    ?>

    <h2>Composta</h2>

<?php

    $nota1 = 7;
    $nota2 = 10;
    $media = ($nota1 + $nota2) / 2;
?>

    <p>Média: <?=$media?></p>

<?php

    if($media >= 7){ ?>
        <p style='color: green;'>Aprovado</p>
    <?php
    } else { ?>
        <p style='color: red;'>Reprovado</p>
    <?php
    }

?>

    <h2>Encadeada</h2>
<?php
    if($media >=7) { ?>
        <p class='aprovado'>Aprovado</p>
<?php
    } elseif ($media >= 6 && $media < 7) { ?>
        <p class='recuperacao'>Recuperação</p>
<?php
    } else {  ?>
        <p class='reprovado'>Reprovado</p>
<?php
    } ?>

?>

    <h2>switch/case</h2>

<?php

    $opcao = 1;
    
    switch($opcao) {
        case 1: $assunto = "<p>Reclamação</p>"; break;
        case 2: $assunto = "<p>Elogio</p>"; break;
        case 3: $assunto = "<p>Informações</p>"; break;
        default: $assunto = "<p>Falar com um humano</p>"; break;
    }

    echo "<p>$assunto</p>"

?>

</body>
</html>