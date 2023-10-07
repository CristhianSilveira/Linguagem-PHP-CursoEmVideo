<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div>
        <?php 
        $n = 4;
        $nome = "Cristhian";
        $idade = 20;
        $n2 = 4.5;
        $casado = false;
        
        // 0x = valores hexadecimais
        $hex = 0x1A;
        
        // 0b = valores binários.
        $bin = 0b1011;
        
        // 0 = valor octal.
        $oct = 010;
        
        echo "$nome tem $idade anos!";
        echo "<br/>Valor em Hexadecimal: $hex , Valor Binário: $bin , Valor Octal: $oct <br/>";
        
        // Mostra o tipo da variável.
        var_dump($n);
        var_dump($nome);
        var_dump($n2);
        var_dump($casado);
    ?>
    </div>

</body>

</html>