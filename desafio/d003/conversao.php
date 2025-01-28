<?php 
    $cotação = 5.90;

    $real = $_REQUEST["din"];

    $dólar = $real / $cotação;

    $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . "equivale a " . numfmt_format_currency($padrão, $dólar, "USD");

?>