<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Conversor de Moedas v1.0</h1>
    <?php 
        $real = $_GET["valor"] ?? 0;
        $dolar = $real / 4.87;
        echo "Seus R$ ". number_format($real, 2, "," , "."). " equivalem a <strong>US$ ". number_format($dolar, 2, ",", ".")."</strong>";
        echo "<br/><br/> *<strong>Cotação fixa de R$ 4,87</strong> informada diretamente no código.";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>  
</body>
</html>