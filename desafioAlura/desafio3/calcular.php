<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Executando...</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];
            $imc = $peso / ($altura * $altura);
            echo "<p>Seu IMC é: " . number_format($imc, 2)."</p>";
        }
                if ($imc < 18.5) {
                    echo "Você está abaixo do peso ideal.";
                } elseif ($imc < 25) {
                    echo "Seu peso está normal.";
                } elseif ($imc < 30) {
                    echo "Você está com sobrepeso.";
                } elseif ($imc < 35) {
                    echo "Você tem obesidade grau I.";
                } elseif ($imc < 40) {
                    echo "Você tem obesidade grau II.";
                } else {
                    echo "Você tem obesidade grau III.";
                }
?>
    <a href="index.html"><input type="button" value="Voltar">
    </main>
    
</body>
</html>