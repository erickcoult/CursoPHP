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
        $cotação = 5.17;
        $real = 1000;
        $dolar = $real / $cotação;
        
        echo "Seus" . numfmt_format_currency($padrão, $real, "BRL") . "equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");
        ?>
    </main>
</body>
</html>

