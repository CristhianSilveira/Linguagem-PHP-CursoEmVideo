<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 

<pre>
<div>
    <?php 
    echo "<h2>Vetores e Matrizes PHP</h2>";

    #Exemplo 1
    echo "<h2>Exemplo 1 (Criando array)</h2>";
    $n = array(3,5,8,2);
    $n[] = 7;
    print_r($n);

    #Exemplo 2
    echo "<h2>Exemplo 2 (range(inicio,fim,salto)</h2>";
    $c = range(5,20,2);
    foreach ($c as $v){
       echo "$v ";
    }

    #Exemplo 3
    echo "<h2>Exemplo 3 (chave personalizada)</h2>";
    $valor = array( 3=>5, 1=>9, 0=>8, 7=>7);
    print_r($valor);

    #Exemplo 4
    echo "<h2>Exemplo 4 (chave associativa)</h2>";
    $cad = array("nome" => "Ana","idade" => 23,"peso" => 65.5);
    foreach ($cad as $chave => $cont){
        echo "O campo $chave possui o conteúdo $cont <br/>";
    }

    #Exemplo 5
    echo "<h2>Exemplo 5 (matriz)</h2>";
    $m = array(array(6,4), array(4,9), array(3,2));
    $m [0] [1] = $m[2] [0];
    print_r($m);

    #Exibir vetor
    echo "<h2>Exibir vetor na tela:</h2>";
    echo "<h3>print_r</h3>";
    $vet = array("A", "J", "M", "X", "K");
    print_r($vet);

    echo "<h3>var_dump</h3>";
    var_dump($vet);

    #Funções em vetores
    echo "<h2>Funções em vetores:</h2>";
    echo "<h3>Acrescentar vetor na última posição (array_push)</h3>";
    $veto = array("A", "J", "A");
    print_r($veto);
    array_push($veto, "X");
    print_r($veto);

    echo "<h3>Remover vetor na última posição (array_pop)</h3>";
    array_pop($veto);
    print_r($veto);

    echo "<h3>Acrescentar vetor na primeira posição (array_unshift)</h3>";
    array_unshift($veto, "F");
    print_r($veto);

    echo "<h3>Remover vetor na primeira posição (array_shift)</h3>";
    array_shift($veto);
    print_r($veto);

    echo "<h3>Ordenar vetor (sort)</h3>";
    sort($veto);
    print_r($veto);
    ?>

</div>
</pre>
    
</body>
</html>