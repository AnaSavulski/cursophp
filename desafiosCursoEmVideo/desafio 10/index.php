<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculadora de Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="anoNascimento">Ano de Nascimento:</label>
            <input type="number" name="anoNascimento" id="anoNascimento" required>
            <label for="anoAtual">Ano Atual:</label>
            <input type="number" name="anoAtual" id="anoAtual" required>
            <input type="submit" value="Calcular Idade">
        </form>
    </main>
    <section>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $anoNascimento = intval($_POST['anoNascimento']);
            $anoAtual = intval($_POST['anoAtual']);

            $idade = $anoAtual - $anoNascimento;

            echo "<p>A idade calculada é: $idade anos.</p>";
        }
        ?>
    </section>
</body>
</html>
