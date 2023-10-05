<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Gerador de números aleatórios de 0 a 100</h1>
        <?php 
            $min=0;
            $max=100;
            $num=mt_rand($min,$max);
            echo"<p>O número gerdo foi <strong>$num</strong>.</p>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504;Gerar outro</button>
       
    </main>
    
</body>
</html>