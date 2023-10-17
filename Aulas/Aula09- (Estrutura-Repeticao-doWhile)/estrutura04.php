<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição doWhile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 

<div>
    <?php 
    echo "<h2>Estrutura de repetição doWhile</h2>";

    #Exercício 1
    echo "<h2>Exercício 1</h2>";
    $c = 1;
    do {
        echo "$c ";
        $c++;
    } while ($c <= 10);
 
    #Exercício 2
    echo "<h2>Exercício 2</h2>";
    $v = isset($_GET["val"])?$_GET["val"]:0;

    $co = $v;
    $fat = 1;
    do {
        $fat = $fat * $co;
        $co--;
    } while ($co >= 1);
    echo "$v! = $fat";

    #Exercício 3
    echo "<h2>Exercício 3</h2>";
    $num = isset($_GET["numero"])?$_GET["numero"]:0;

    $multiplica = 1;
    $cont = 1;
    do {
        $multiplica = $num * $cont;
        echo "$num x $cont = $multiplica <br/>";
        $cont++;
    }   while ($cont <= 10);
    ?>

    <a href="ex04.html">Voltar</a>
</div>
    
</body>
</html>