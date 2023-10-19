<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição For</title>
    <link rel="stylesheet" href="style.css">
    <style>
        span{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body> 

<div>
    <?php 
    echo "<h2>Estrutura de repetição For</h2>";

    #Exercício 1
    echo "<h2>Exercício 1</h2>";
    for ($i = 1; $i <= 10; $i++){
        echo "$i ";
    }
    echo "<br/>";
    for ($i = 10; $i >= 1; $i--){
        echo "$i ";
    }
    echo "<br/>";
    for ($i = 0; $i <= 50; $i+=5){
        echo "$i ";
    }
    echo "<br/>";
    for($i = 20; $i >= 0; $i-=2){
        echo "$i ";
    }

    #Exercício 2
    echo "<h2>Exercício 2</h2>";
    ?>
    <form action="estrutura06.php" method="get">
        <select name="num">
            <?php
                for ($c = 1; $c <=10; $c++){
                    echo "<option>$c</option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>

    <?php 
    #Exercício 3
    echo "<h2>Exercício 3</h2>";
    $numero = isset($_GET["numero"])?$_GET["numero"]:1;

    echo "<h2>Analisando o número $numero ...</h2>";

    $multi = 0;
    echo "Valores múltiplos:";
    for ($c = 1; $c <= $numero; $c++){
        if (($numero % $c) == 0) {
            echo "$c ";
            $multi++;
        } 
    }
    echo "<br/>Total de múltiplos: $multi";
        
    if ($multi == 2){
        $primo = "É PRIMO!";
    }
    else{
        $primo = "NÃO É PRIMO!";
    }
    echo "<br/>Resultado: $numero <span>$primo</span><br/>";
    ?>

    <a href="ex05.html">Voltar</a>
</div>
    
</body>
</html>