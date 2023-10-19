<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição Fort</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:1;
        for ($c = 1; $c <= 10; $c++){
            $r = $n * $c;
            echo "$n x $c = $r <br/>";
        }
    ?>
    <a href="estrutura05.php">Voltar</a>
</div>
    
</body>
</html>