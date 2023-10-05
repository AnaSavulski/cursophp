<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada no PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Executando...</h1>
        <?php
            $num =$_REQUEST["num"]??0;
            for ($i = 1; $i <= 10; $i++) {
                $res= $num * $i;
                echo"<p>A tabuada do ".$num."<br>"
                .$num." x ".$i." = ".$res."</p>";
            }
    ?>
    <a href="index.html"><input type="button" value="Voltar">
    </main>
    
</body>
</html>