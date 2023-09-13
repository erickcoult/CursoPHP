<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda </title>
</head>
<body>
    <main>
       <?php  
        $cotacao = 5.17;
        $real = $_REQUEST["din"] ?? 0;
        $dolar = $real / $cotacao;
        $fmt = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($fmt, $real, "BRL") . " equivalem a " . numfmt_format_currency($fmt, $dolar, "USD");
        ?>
    </main>
</body>
       

