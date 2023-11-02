<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $sort = mt_rand(0, 100);
            echo "Gerando um número aleatório entre 0 e 100...";
            echo "<br/> O valor gerado foi: <strong>$sort</strong><br/><br/>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar Outro</button>
    </main>  
</body>
</html>