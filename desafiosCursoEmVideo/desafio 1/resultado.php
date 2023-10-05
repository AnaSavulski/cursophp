<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Resultado:</h1>
</header>
<section>
    
    <?php
            $n =$_REQUEST["num"] ?? 0;
            $a =$n-1;
            $s =$n+1;
            echo "<p>O número digitado foi $n<br>";
            echo "O antecessor desse número é $a <br>E o sucessor é $s</p>"
            ?>
            <a href="index.html"><input type="button" value="Voltar">
</section>
    
</body>
</html>