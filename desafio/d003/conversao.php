<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <?php 
            //cotação do Google
            $cotação = 5.90;

            //Quanto $$ vc tem?
            //?? 0; -> se nao digitar nada vai ser 0
            $real = $_REQUEST["din"] ?? 0;

            //equivalencia em dolar
            $dólar = $real / $cotação;

            //formatação de moedas com internacionalização
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . "equivale a " . numfmt_format_currency($padrão, $dólar, "USD");

        ?>
    </main>
</body>
</html>
