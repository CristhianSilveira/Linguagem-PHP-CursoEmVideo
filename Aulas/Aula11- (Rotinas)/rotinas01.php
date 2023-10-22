<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 

<div>
    <?php 
    echo "<h2>Rotinas PHP</h2>";

    #Exercício 1
    echo "<h2>Exercício 1</h2>";
    
    function soma ($a, $b){
        $s = $a + $b;
        echo "<p>A soma vale: $s</p>";
    }
    soma(3,4);
    soma(8,2);
    $x = 9;
    $y = 15;
    soma($x,$y);


    #Exercício 2
    echo "<h2>Exercício 2</h2>";

    function soma2($c,$d){
        return $c + $d;
    }
    $m = 3;
    $n = 8;
    $v = soma2($m, $n);
    echo "A soma entre $m e $n é igual a: $v";


    #Exercício 3
    echo "<h2>Exercício 3</h2>";

    function soma3(...$p){
        $t = func_num_args();
        $s3 = 0;
        for($i = 0; $i < $t; $i++){
            $s3 += $p[$i];
        }
        return $s3;
    }
    $res = soma3(3, 5, 2, 9, 4, 1);
    echo "A soma dos valores é $res";


    #Exercício 4
    echo "<h2>Exercício 4</h2>";

    function teste($k){
        $k += 2;
        echo "<p>O valor de X é $k</p>";
    }
    $l = 3;
    teste($l);
    echo "<p>O valor de L é $l</p>";

    ?>

    <a href="rotinas02.php">Voltar</a>
</div>
    
</body>
</html>