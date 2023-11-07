<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET["num"] ?? 1;
        $quad = sqrt($num);
        $cub = pow($num, 1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            echo "<p>Analisando o número <strong>$num</strong>, temos:</p>";
            echo "<ul><li>A sua raiz quadrada é: <strong>". number_format($quad, 2, ",", ".") ."</strong></li>";
            echo "<li>A sua raiz cúbica é: <strong>". number_format($cub, 2, ",", ".") ."</strong></li></ul>";
        ?>  
    </section>
    
</body>
</html>