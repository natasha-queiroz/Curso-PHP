<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <style>
        main {
            background-color: turquoise;
            height: 500px;
            width: 400px;
            text-align: center;
        }
    </style>
</head>
<body>

    <main>

        <h1>Resultado Final</h1>

        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0;
                $a = $n-1;
                $s = $n+1;

                echo "<br> O numero escolhido foi $n";
                echo "<br> O antecessor é $a";
                echo "<br> O sucessor é $s";
            ?>
        </p>
        <button onclick="javascipt:window.location.href='index.html'">&#x2B05; Voltar</button>

    </main>

</body>
</html>