<?php 
    const fabricantes = ["","Asus", "Microsoft", "LG", "Brastemp"];
    const quantidade = [];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário HTML com PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="./destino.php" method="post" id="form-container">
        <label for="produto">Nome do Produto</label>
        <input type="text" placeholder="" id="produto" name="produto">

        <label for="select-fab">Fabricantes</label>
        <select name="fabs" id="select-fab">

        <?php foreach( fabricantes as $fab) { ?>
            <option value="<?=$fab?>"><?=$fab?></option>
        <?php } ?>
        </select> 
        

        <label for="preco">Coloque Um Preço</label>
        <input type="number" id="preco" min="100" max="10000" name="preco"step="0.01">

        <label for="quantidade">Quantidade de Produtos</label>
        <input type="number" id="quantidade" min="0" max="50" name="quantidade">

        <label for="email">Seu email:</label>
        <input type="text" name="email">

        <label for="desc">Descrição do Produto</label>
        <textarea name="desc" id="desc" maxlength="1000"></textarea>
        <input type="submit" value="Enviar" id="button">
    </form>
</body>
</html>