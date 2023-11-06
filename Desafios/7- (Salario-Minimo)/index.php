<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $min = 1_380.60;
        $sal = $_GET["sal"] ?? $min;
        $totSal = (int) ($sal / $min);
        $dif = $sal - ($min*$totSal);
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" step="0.01" value="<?=$sal?>">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($min, 2, ",", ".") ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
        echo "<p>Quem recebe um salário de R$".number_format($sal, 2, ",", ".") ." ganha <strong>$totSal salários mínimos</strong> + R$ ". number_format($dif, 2, ",", ".") .".</p>";
        ?>
    </section>
    
</body>
</html>