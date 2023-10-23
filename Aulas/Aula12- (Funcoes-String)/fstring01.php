<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 

<div>
    <?php 
    echo "<h2>Funções String PHP</h2>";

    #printf
    echo "<h2>printf:</h2>";
    $prod = "Leite";
    $preco = 4.5;
    printf("O %s custa R$ %.2f", $prod, $preco);

    #print_r
    echo "<h2>print_r:</h2>";
    $x[0] = 4;
    $x[1] = 3;
    $x[2] = 8;
    print_r($x);

    #wordwrap
    echo "<h2>wordwrap</h2>";
    $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
    $r = wordwrap($t, 20, "<br/>\n", false);
    echo $r;

    #strlen
    echo "<h2>strlen</h2>";
    $txt = "Curso em Vídeo";
    $tamanho = strlen($txt);
    echo $tamanho;

    #trim
    echo "<h2>trim</h2>";

    $nome = "   José da Silva   ";
    echo "$nome <br/>";
    echo(strlen($nome));
    
    $novo = trim($nome);
    echo "<br/> $novo <br/>";
    echo(strlen($novo));

    #str_word_count
    echo "<h2>str_word_count</h2>";
    $frase = "Eu vou estudar PHP";
    $cont = str_word_count($frase, 0);
    echo $cont;

    #explode
    echo "<h2>explode</h2>";
    $site = "Curso em Vídeo";
    $vetor = explode(" ", $site);
    print_r($vetor);

    #str_split
    echo "<h2>str_split</h2>";
    $nome2 = "Maria";
    $vetor2 = str_split($nome2);
    print_r($vetor2);

    #implode/ join
    echo "<h2>implode/ join</h2>";
    $vetor3[0] = "Curso";
    $vetor3[1] = "em";
    $vetor3[2] = "Vídeo";
    $texto = implode("#", $vetor3);
    print($texto);

    #chr
    echo "<h2>chr</h2>";
    $letra = chr(67);
    echo "A letra de código 67 é: $letra";

    #ord
    echo "<h2>ord</h2>";
    $letra2 = "c";
    $cod = ord($letra2);
    echo "A letra $letra2 tem código: $cod";

    #strtolower
    echo "<h2>strtolower</h2>";
    $nome3 = "Gustavo Guanabara";
    echo "Seu nome é ". strtolower($nome3);

    #strtoupper
    echo "<h2>strtoupper</h2>";
    $nome4 = "Juninho Santos";
    echo "Seu nome é ". strtoupper($nome4);

    #ucfirst
    echo "<h2>ucfirst</h2>";
    $nome5 = "manoel gomes";
    echo "Seu nome é ". ucfirst($nome5);

    #ucwords
    echo "<h2>ucwords</h2>";
    $nome6 = "luiz inácio lula da silva";
    echo "Seu nome é ". ucwords($nome6);

    #strrev
    echo "<h2>strrev</h2>";
    $nome7 = "cristhian silveira";
    echo "Seu nome inverso é ". strrev($nome7);

    #strpos
    echo "<h2>strpos</h2>";
    $frase2 = "Estou aprendendo PHP";
    $pos = stripos($frase2, "php");
    echo "A string foi encontrada na posição $pos";

    #substr_count
    echo "<h2>substr_count</h2>";
    $frase3= "Estou aprendendo PHP no Curso em Vídeo de PHP";
    $cont = substr_count($frase3, "PHP");
    print("PHP encontrado $cont vezes");

    #substr
    echo "<h2>substr</h2>";
    $site2 = "Curso em Video";
    $sub = substr($site2,0,5);
    echo "$sub ";

    #str_pad
    echo "<h2>str_pad</h2>";
    $nome8 = "Carlos";
    $novo = str_pad($nome8, 30, " ", STR_PAD_RIGHT);
    print("Meu professor $novo é legal!");

    #str_repeat
    echo "<h2>str_repeat</h2>";
    $txt2 = str_repeat("Php", 5);
    print("O texto gerado foi $txt2");

    #str_ireplace
    echo "<h2>str_ireplace</h2>";
    $frase4 = "Gosto de estudar Matemática!!!";
    $novafrase = str_ireplace("matemática", "PHP", $frase4);
    echo "$novafrase";

    ?>
</div>
    
</body>
</html>