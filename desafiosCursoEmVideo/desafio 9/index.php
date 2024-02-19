<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" required value="<?=$valor1?>">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" min="1" required value="<?=$peso1?>">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" required value="<?=$valor2?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" min="1" required value="<?=$peso2?>">
            <input type="submit" value="Calcular médias">
        </form>
    </main>
    <section>
        <?php
            $valor1 = floatval($_GET['v1'] ?? 0);
            $peso1 = floatval($_GET['p1'] ?? 0);
            $valor2 = floatval($_GET['v2'] ?? 0);
            $peso2 = floatval($_GET['p2'] ?? 0);

            if ($peso1 != 0 && $peso2 != 0) {
                $ma = ($valor1 + $valor2) / 2;
                $mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

                echo "<h2>Cálculo das médias</h2>";
                echo "<p>Analisando os valores $valor1 e $valor2:</p>";
                echo "<ul>";
                echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($ma, 2, ",", ".") . ".</li>";
                echo "<li>A <strong>Média Ponderada</strong> com pesos $peso1 e $peso2 é igual a " . number_format($mp, 2, ",", ".") . ".</li>";
                echo "</ul>";
            } else {
                echo "<p>Os pesos não podem ser zero. Por favor, insira valores diferentes de zero para os pesos.</p>";
            }
        ?>
    </section>
</body>
</html>
