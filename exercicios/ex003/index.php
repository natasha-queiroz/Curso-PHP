<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>

    <h1>
        Teste de tipos primitivos
    </h1>

    <?php 
    
        //0x = hexadecimal 0b = binario 0 = octal
        // $num = 010;  
        // echo "O valor da variavel é $num";

        // $v = true;
        // var_dump($v);

        // $num = 3e2; // 3 x 10(2)
        // echo "o valor e $num";

        //$num = (int) 3e2; // 3 x 10(2)
        // echo "o valor e $num";
        //var_dump($num);

        // $num = (float) "950";
        // var_dump($num);

        // $casado = false;
        // var_dump($casado);

        // $vet = [6, 2.5, "maria", 3, false];
        // var_dump($vet);

        class Pessoa 
        
        {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>