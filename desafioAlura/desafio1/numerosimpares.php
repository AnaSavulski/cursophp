<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Alura</title>
</head>
<body>
    <main>
        <h1>Mostrar os Números Ímpares de 0 a 100</h1>
        <?php 
           for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 != 0) {
              echo $i . PHP_EOL;
            }
          }
        ?>




    </main>
    
</body>
</html>