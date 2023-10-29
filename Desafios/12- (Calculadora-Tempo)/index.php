<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $tempo = $_GET["seg"] ?? 0;
        $sobra = $tempo;
        # Total de semanas
        $semanas = (int)($sobra / 604800);
        $sobra = $sobra % 604800;
        # Total de Dias
        $dias = (int)($sobra / 86400);
        $sobra = $sobra % 86400;
        # Total de Horas
        $horas = (int)($sobra / 3600);
        $sobra = $sobra % 3600;
        # Total de Minutos
        $minutos = (int)($sobra / 60);
        $sobra = $sobra % 60;
        # Total de Segundos
        $segundos= $sobra;    
               
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$tempo?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php 
         echo "<p>Analisando o valor que você digitou, <strong>". number_format($tempo, 0, ",", ".") ." segundos</strong> equivalem a um total de:</p>";
        ?>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
    
</body>
</html>