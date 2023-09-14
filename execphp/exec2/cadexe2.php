<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda </title>
    <link rel="stylesheet" href="phpcss.css">
</head>
<body>
    <main>
       <?php  
        $cotacao = 5.17;
        $real = $_REQUEST["din"] ?? 0;
        $dolar = $real / $cotacao;
        $fmt = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($fmt, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($fmt, $dolar, "USD") . "</strong><br>";
        echo "Cotação do dolar: <strong>R$5,17</strong>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
       

