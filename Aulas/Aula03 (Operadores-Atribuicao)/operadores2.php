<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador de Atribuição</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
    <?php 
        echo "<h2>Operadores de atribuição</h2>";

        $n1 = 5;
        $n2 = 10;
        echo "$n1 += $n2 é: ".($n1 += $n2);
        echo "<br/>$n1 -= $n2 é: ".($n1 -= $n2);
        echo "<br/>$n1 *= $n2 é: ".($n1 *= $n2);
        echo "<br/>$n1 /= $n2 é: ".($n1 /= $n2);
        echo "<br/>$n1 %= $n2 é: ".($n1 %= $n2);
        echo "<br/>o decremento de $n1  é: ". (--$n1);
        echo "<br/>o incremento de $n1 é: ". (++$n1);

        # Exercício de porcentagem com operadores de atribuição
        echo "<br/><h2>Exercício 1:</h2>";
        $preco = $_GET["a"]; # Essa linha vai pegar o ano na URL

        echo "O preço do produto é R$ ". $preco;
        $preco += $preco*10/100;

        echo "<br/>E o novo preço com 10% de aumento será de R$ ". number_format($preco, 2);

        # Exercício com operadores de decremento e incremento
        echo "<br/><h2>Exercício 2:</h2>";
        $atual = $_GET["b"]; # Essa linha vai pegar o ano na URL

        echo "O ano atual é $atual e o ano anterior foi: ". --$atual;

        #Exercício com variáveis Referenciadas
        echo "<br/><h2>Exercício 3:</h2>";
        $x = 3;
        $y = &$x;
        $y += 5;
        echo "A variável X vale $x";
        echo "<br/>A variável Y vale $y";

        #Exercício com variáveis em variáveis
        echo "<br/><h2>Exercício 4:</h2>";
        $texto = "MeuTexto";
        $$texto = "OutroTexto";
        
        echo "O conteúdo da variável TEXTO é: $texto";
        echo "<br/>A variável MEUTEXTO criada recebeu o valor: $MeuTexto";
    ?>
</div>
    
</body>
</html>