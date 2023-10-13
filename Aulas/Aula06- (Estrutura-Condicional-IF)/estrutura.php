<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional IF</title>
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
        echo "<h2>Estrutura condicional IF</h2>";

        #Exercício 1
        echo "<h2>Exercício 1</h2>";

        $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
        $idade = date("Y") - $ano;
        echo "Você nasceu em $ano e terá $idade anos. <br/>";
        if($idade >= 16){
            $voto = "Já pode votar";
        }
        else {
            $voto = "Não pode votar";
        }
        echo "Com essa idade você $voto.";

        if($idade < 16 ){
            $tipoVoto = "Não vota";
        }
        elseif(($idade >= 16 && $idade < 18) || ( $idade > 65)){
            $tipoVoto = "Voto opcional";
        }
        else{
            $tipoVoto = "Voto obrigatório";
        }
        echo "<br/>E seu voto é do tipo: $tipoVoto";


        #Exercício 2
        echo "<h2>Exercício 2</h2>";

        $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
        $media = ($nota1 + $nota2)/2;

        echo "A média entre <span>".number_format($nota1, 1); echo "</span> e <span>".number_format($nota2, 1); echo "</span> é igual a:<span> ".number_format($media, 2); echo "</span>";

        if($media < 5){
            $sit = "Reprovado";
        }
        elseif($media >= 5 && $media < 7){
            $sit = "Em Recuperação";
        }
        else{
            $sit = "Aprovado";
        }

        echo "<br/>Situação do aluno: <span>$sit</span>";
    ?>
    
    <a href="ex01.html">Voltar</a>
</div>
    
</body>
</html>