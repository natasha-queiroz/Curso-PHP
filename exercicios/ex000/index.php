<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>me livrando da maldição</title>
</head>
<body>

    <h1>

        <?php 
            echo "ola, mundo! \u{1F30E}";

            date_default_timezone_set("America/Fortaleza");
            echo "hoje é dia" . date("d/m/Y");
            echo "e a hora é " . date("G:i:s T");

        ?>

    </h1>

    <p>primeiro comando em php</p>
    
</body>
</html>