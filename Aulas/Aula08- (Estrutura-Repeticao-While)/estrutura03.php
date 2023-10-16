<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição While</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 

<div>
    <?php 
    echo "<h2>Estrutura de repetição While</h2>";

    #Exercício 1
    echo "<h2>Exercício 1</h2>";
    $c = 1;
    while ($c <= 10){
        echo $c ."<br/>";
        $c++;
    }
    ?>
    <!--Exercício 2-->
    <form action="estrutura04.php" method="get">
    <?php
    echo "<h2>Exercício 2</h2>";
    $c = 1;
    while ($c <= 5){
        echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
        $c++;
    }
    ?>
        <input type="submit" value="Enviar">
    </form>

    <!--Exercício 3-->
    <?php
    echo "<h2>Exercício 3</h2>";

    $inicio = isset($_GET["inicio"])?$_GET["inicio"]:0;
    $fim = isset($_GET["fim"])?$_GET["fim"]:0;
    $incremento = isset($_GET["incremento"])?$_GET["incremento"]:0;

    if ($inicio > $fim){
        while ($inicio >= $fim){
            echo "$inicio ";
            $inicio -= $incremento;
        }  
    }
    elseif ($inicio < $fim ){
        while ($inicio <= $fim){
            echo "$inicio ";
            $inicio += $incremento;
        }
    }
    else{
        echo "0";
    }
    ?>

    <a href="ex03.html">Voltar</a>
</div>
    
</body>
</html>