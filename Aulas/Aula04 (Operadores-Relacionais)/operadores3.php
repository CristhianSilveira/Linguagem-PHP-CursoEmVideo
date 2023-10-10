<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
    <?php 
        echo "<h2>Operadores Relacionais</h2>";
        $x = 10;
        $y = 5;
        echo "$x > $y é: ".($x > $y?"verdadeiro":"falso");
        echo "<br/>$x < $y é: ".($x < $y?"verdadeiro":"falso");
        echo "<br/>$x <= $y é: ".($x <= $y?"verdadeiro":"falso");
        echo "<br/>$x >= $y é: ".($x >= $y?"verdadeiro":"falso");
        echo "<br/>$x != $y é: ".($x != $y?"verdadeiro":"falso");
        echo "<br/>$x == $y é: ". ($x == $y?"verdadeiro":"falso");
        echo "<br/>$x === $y é: ". ($x === $y?"verdadeiro":"falso");

        echo "<h2>Exercício 1</h2>";
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores escolhidos foram: $n1 e $n2 <br/>"; 
        $r = ($tipo == "s")? $n1+$n2: $n1*$n2;
        echo "O resultado foi: $r";

        echo "<br/><h2>Exercício 2</h2>";
        $a = 3;
        $b = "3";
        $compara = ($a === $b)?"SIM":"NÃO";
        echo "As variáveis A e B são idênticas? $compara";

        echo "<br/><h2>Exercício 3</h2>";
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2)/2;
        echo "A média entre $nota1 e $nota2 é de: $media";
        echo "<br/>A situação do aluno é: ".(($media<6)?"REPROVADO":"APROVADO");

        echo "<br/><h2>Exercício 4</h2>";
        $ano = $_GET["an"];
        $idade = 2023 - $ano;
        echo "Quem nasceu em $ano tem $idade anos.";
        $tipo = ($idade>=18 || $idade<65)? "OBRIGATÓRIO": "NÃO OBRIGATÓRIO";
        echo "<br/>Seu voto é: $tipo";

    ?>
</div>
    
</body>
</html>