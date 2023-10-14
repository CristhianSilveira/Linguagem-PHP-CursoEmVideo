<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional Switch</title>
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
        echo "<h2>Estrutura condicional Switch</h2>";

        #Exercício 1
        echo "<h2>Exercício 1</h2>";
        $num = isset($_GET["numero"])?$_GET["numero"]:0;
        $opera = isset($_GET["oper"])?$_GET["oper"]:1;
        switch ($opera) {
            case 1:
                $r = $num * 2;
                break;
            case 2:
                $r = $num ^ 3;
                break;
            case 3:
                $r = sqrt($num);
                break;
        }
        echo "O resultado da operação solicitada foi: <span>$r</span>";

        #Exercício 2
        echo "<h2>Exercício 2</h2>";
        $dia = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($dia) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar! :)";
                break;
            case 7:
            case 8:
                echo "Descanse, pequeno gafanhoto! ;)";
                break;
            default:
                echo "Dia da semana inválido";
        }

        #Exercício 3
        echo "<h2>Exercício 3</h2>";
        $estados = isset($_GET["estados"])?$_GET["estados"]:"Estado Inválido";
        switch ($estados) {
            case "ac":
            case "ap":
            case "am":
            case "pa":
            case "ro":
            case "rr":
            case "to":
                $reg = "Região Norte";
                break;
            case "al":
            case "ba":
            case "ce":
            case "ma":
            case "pb":
            case "pe":
            case "pi":
            case "rn":
            case "se":
                $reg = "Região Nordeste";
                break;
            case "df":
            case "go":
            case "mt":
            case "ms":
                $reg = "Região Centro-Oeste";
                break;
            case "es":
            case "mg":
            case "rj":
            case "sp":
                $reg = "Região Sudeste";
                break;
            case "pr":
            case "rs":
            case "sc":
                $reg = "Região Sul";
        }
        echo "Você mora na <span> $reg </span>";

    ?>
    <a href="ex02.html">Voltar</a>
</div>
    
</body>
</html>