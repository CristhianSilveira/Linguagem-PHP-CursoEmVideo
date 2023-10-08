<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Aritmético</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
    <?php 
        $n1 = 30;
        $n2 = 20;
        $media = ($n1 + $n2) /2;

        echo "<h2>Valores recebidos: $n1 e $n2</h2>";

        echo "<br/><h2>Operações Aritméticas: </h2>";
        echo "<br/>A soma vale ". ($n1+$n2);
        echo "<br/>A subtração vale ". ($n1-$n2);
        echo "<br/>A multiplicação vale ". ($n1*$n2);
        echo "<br/>A divisão vale ". ($n1/$n2);
        echo "<br/>O modulo vale ". ($n1%$n2);

        echo "<br/><h2>Média Aritmética: </h2>";
        echo"<br/>A média entre $n1 e $n2 é igual a: $media";

        echo "<br/><h2>Funções Matemáticas: </h2>";
        echo "O valor absoluto de -20 é: ". abs(-20);
        echo "<br/>O valor de $n2 na base 2 é: ". base_convert($n2, 10, 2);
        echo "<br/>O valor de 2<sup>3</sup> é: ". pow(2, 3);
        echo "<br/>A raiz de 4 é: ". sqrt(4);
        echo "<br/>O valor de 20.50 arredondado é: ". round(20.50);
        echo "<br/>A parte inteira de 20.50 é: ". intval(20.50);
        echo "<br/>O valor de $n1 em moeda é: R$". number_format($n1, 2, ",", ".");
    ?>
</div>
    
</body>
</html>