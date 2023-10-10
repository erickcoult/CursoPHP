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
        $início = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $início .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        $cotação = $dados["value"]["0"]["cotacaoCompra"];

        $real = $_REQUEST["din"] ?? 0;
        $dolar = $real / $cotação;
        $fmt = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($fmt, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($fmt, $dolar, "USD") . "</strong><br>";
        echo "Cotação do dólar:$" . $dados["value"][0]["cotacaoCompra"];
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
       

