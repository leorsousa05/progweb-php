<?php
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];
    $desc = $_POST["desc"];
    $produto = $_POST["produto"];
    $fabricante = $_POST["fabs"];
    $email = $_POST["email"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = "Email não válido";
    };

    function number_mask(float $number, int $casasDecimais):string {
        return "R$ ".number_format($number, $casasDecimais, '.', ',');
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Cadastrado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="form-container">
        <h1>Produto cadastrado.</h1>
        <p>Nome do Produto: <?=$produto?></p>
        <p>Nome do Fabricante: <?=$fabricante?></p>
        <p>Seu Email: <?=$email?></p>
        <p>Preço do Produto: <?=number_mask($preco, 2) ?></p>
        <p>Quantidade do Produto: <?=$quantidade?></p>
        <p>Descrição do Produto: <?=$desc?></p>
    </div>
</body>
</html>