<?php include "recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos</title>
</head>
<body>
    <h2>Inclusão de Recursos</h2>
    <hr>

    <h2><?=ESCOLA?></h2>
    <p>Estamos no curso de <?=$curso?></p>

    <ul>

        <?php foreach($tecnologias as $tec) { ?>
            <li> <?=$tec?> </li>
        <?php } ?>
        
    </ul>

    <p>Chapolin Colorado tem 28 anos e é <b> <?=verificaIdade(28)?></b> de idade </p>

    <p>Chaves tem 8 anos e é <b><?=verificaIdade(8)?></b> de idade </p>

    <hr>

    <article>

            <h2>Conteúdo Qualquer...</h2>
            <?php include "textos.php" ?>

    </article>


</body>
</html>