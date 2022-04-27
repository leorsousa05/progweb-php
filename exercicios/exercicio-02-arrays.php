<!-- Crie um arquivo chamado exercicio02-arrays.php.

Nele, crie dois arrays para armazenar os dados fictícios de duas pessoas diferentes: nome, idade, email e sexo.

Em seguida, mostre os valores de nome, email e idade de cada pessoa dentro de tags HTML de conteúdo (como article, section, h2, p etc).

Desafio: destaque estes blocos de conteúdo usando CSS. -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <style>
        html {font-family: sans-serif;}
        body {
            height: 100vh; 
            width: 100vw; 
            overflow-x: hidden;
            overflow-y: hidden;
            background: linear-gradient(156deg, rgba(2,0,36,1) 0%, rgba(255,255,255,1) 0%, rgba(66,66,66,1) 100%);
        }

        div {
            display: grid;
            place-items: center;
            text-align: center;
            height: 100%;
        }

        section h1 {
            text-align: center;
        }

        table{
            border-collapse: collapse;
        }

        th {
            background-color: wheat;
            border-collapse: collapse;
            padding: 4px;
        }

        tr {border: 1px solid black;}

        td {
            border: 1px solid black; 
            padding: 4px;
            background-color: white;
        }

    </style>
</head>
<body>
    <?php 
        const person1 = ["Leonardo", 17, "leozingameprays@gmail.com", "Masculino"];
        const person2 = ["Mel", 18, "melzinhaguaymer@gmail.com", "Feminino"];
    ?>

    <div id="content">

        <main>

            <section>
                <h1>Pessoas em arrays</h1>

                <table>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Email</th>
                        <th>Sexo</th>
                    </tr>

                    <tr>
                        <td> <?=person1[0]?> </td>
                        <td> <?=person1[1]?> </td>
                        <td> <?=person1[2]?> </td>
                        <td> <?=person1[3]?> </td>
                    </tr>
                    <tr>
                        <td> <?=person2[0]?> </td>
                        <td> <?=person2[1]?> </td>
                        <td> <?=person2[2]?> </td>
                        <td> <?=person2[3]?> </td>
                    </tr>
                </table>

            </section>

        </main>

    </div>
</body>
</html>