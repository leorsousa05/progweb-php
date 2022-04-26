<!-- # Exercícios de PHP

## Exercício 01
Criar **variáveis** e/ou **constantes** para:

- Data de hoje
- Nome de uma pessoa
- Idade da pessoa
- Cidade em que nasceu

Coloque dados nestas variáveis/constantes e faça com que o script mostre no HTML uma mensagem semelhante ao exemplo abaixo:

`Hoje é 26/04/2022. Fulano tem 20 anos e nasceu em São Paulo` -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <?php
        date_default_timezone_set('UTC');
        $data = date("j/m/y");
        const name = "Leonardo";
        const nasc = 2004;
        $age = date("Y") - nasc;
        const city = "São Paulo";
    ?>
    <p>Hoje é <?=$data?>. <?=name?> tem <?=$age?> anos e nasceu em <?=city?></p>
</body>
</html>