<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <style>
        
    </style>
</head>
<body>
    <main>

        <h1>conversor de moedas</h1>

        <form action="conversao.php" method="get">
            <label for="din">Quantos R$ vc tem na carteira?</label>
            <input type="number" name="din" id="din" step="0.01"> <!-- step = para valores com decimais  -->
            <input type="submit" value="Converter">
        </form>
        
    </main>
</body>
</html>