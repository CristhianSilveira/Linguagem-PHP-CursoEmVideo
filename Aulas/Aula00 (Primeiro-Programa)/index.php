<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando da maldição</title>
</head>

<body>
    <?php 
        // Define a data padrão e atual do servidor
        date_default_timezone_set("America/Sao_Paulo"); 
         
        // echo exibe a mensagem na tela igual print. \u{} exibe emojis na tela
        echo "<h1>Olá, Mundo! \u{1F30E}</h1>"; 
        
        // date("d/M/Y") exibe o dia, mes(string) e ano atual do servidor.OBS: D maiúsculo exibe o dia da semana e m minúsculo exibe o mes(numérico).    
        echo "<br/>Hoje é dia: ". date("d/m/Y"); 

        // date("G:i:s") exibe a hora, minutos e segundos atual do servidor.    
        echo " e a hora atual é: ". date("G:i:s"); 
    ?>
    <p>Vamos tentar nos livrar da maldição</p>
</body>

</html>