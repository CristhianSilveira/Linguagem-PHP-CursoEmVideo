<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET["val"] ?? 1;
        $sobra = $valor;
        # Total de notas de 100
        $cem = intval($sobra / 100);
        $sobra = $sobra % 100;
        # Total de notas de 50
        $cinquenta = intval($sobra / 50);
        $sobra = $sobra % 50;
        # Total de notas de 20
        $vinte = intval($sobra / 20);
        $sobra = $sobra % 20;
        # Total de notas de 10
        $dez = intval($sobra / 10);
        $sobra = $sobra % 10;
        # Total de notas de 5
        $cinco = intval($sobra / 5);
        $sobra = $sobra % 5;
        # Total de notas de 2
        $dois = intval($sobra / 2);
        $sobra = $sobra % 2;
        # Total de moedas de 1
        $um = intval($sobra / 1);     
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="val">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="val" id="val" min="1" step="1" required value="<?=$valor?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5, R$2 e R$1</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section id="resultado">
        <h2>Saque de -R$<?=number_format($valor, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar ás seguintes notas:</p>
        <ul>
            <li><img src="./img/100-reais.jpg" alt="Nota de 100 Reais" class="nota"> x<?=$cem?></li>
            <li><img src="./img/50-reais.jpg" alt="Nota de 50 Reais" class="nota"> x<?=$cinquenta?></li>
            <li><img src="./img/20-reais.jpg" alt="Nota de 20 Reais" class="nota"> x<?=$vinte?></li>
            <li><img src="./img/10-reais.jpg" alt="Nota de 10 Reais" class="nota"> x<?=$dez?></li>
            <li><img src="./img/5-reais.jpg" alt="Nota de 5 Reais" class="nota"> x<?=$cinco?></li>
            <li><img src="./img/2-reais.jpg" alt="Nota de 2 Reais" class="nota"> x<?=$dois?></li>
            <li><img src="./img/1-real.jpg" alt="Nota de 1 Real" class="nota"> x<?=$um?></li>
        </ul>
    </section>
    
</body>
</html>