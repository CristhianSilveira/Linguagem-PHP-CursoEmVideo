<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoAtual = date("Y");
        $nascimento = $_GET["nasc"] ?? 1900;
        $idadeAno= $_GET["iano"] ?? $anoAtual;
        $idade = $idadeAno - $nascimento;
          
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1920" value="<?=$nascimento?>" max="<?=$anoAtual?>">
            <label for="iano">Quer saber sua idade  em que ano? (atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
            <input type="number" name="iano" id="iano" min="1920" value="<?=$idadeAno?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nascimento?> vai ter <strong><?=$idade?> anos</strong> em <?=$idadeAno?>!</p>
    </section>
    
</body>
</html>