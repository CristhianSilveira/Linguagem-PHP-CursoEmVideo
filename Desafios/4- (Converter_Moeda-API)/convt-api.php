<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Conversor de Moedas v2.0</h1>
    <?php 
        # Cotação vinda da API do Banco Central
        $inicio = date("m-d-Y", strtotime("-7 days")); # 7 dias antes
        $fim = date("m-d-Y"); # Dia atual
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        # Convertendo dados JSON em PHP
        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        
        $real = $_GET["valor"] ?? 0;
        $dolar = $real / $cotacao;
        echo "Seus R$ ". number_format($real, 2, "," , "."). " equivalem a <strong>US$ ". number_format($dolar, 2, ",", ".")."</strong>";
        echo "<br/><br/> *<strong>Cotação fixa de R$ ". number_format($cotacao, 2, ",", ".") ."</strong> informada diretamente no código.";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>  
</body>
</html>