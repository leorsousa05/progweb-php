<?php
$page = basename($_SERVER["REQUEST_URI"]);

switch($page) {
    case 'index.php': $titulo = "Página Inicial - "; break;
    case 'produtos.php': $titulo = "Produtos - "; break;
    case 'servicos.php': $titulo = "Serviços - "; break;
    default : $titulo = "Contato - "; break;
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title> <?=$titulo?>Site XYZ</title>
</head>
<body>
    <header style="text-align: center;">
        <h1>Site XYZ</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="produtos.php">Produtos</a>
            <a href="servicos.php">Serviços</a>
            <a href="contatos.php">Contatos</a>
            <hr>
        </nav>
    </header>
    <main>