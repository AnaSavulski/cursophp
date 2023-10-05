<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Conversor de moedas</h1></header>

<?php


function divide_por_497($numero) {
    $resultado = $numero / 4.97;
    return $resultado;
}

// Obtenha o número a ser dividido do usuário
$numero = $_POST['num'];

// Chame a função e obtenha o resultado
$resultado = divide_por_497($numero);

// Exiba o resultado
echo "<p>O valor de ".number_format($numero,2)." reais, equivale a " . number_format($resultado, 2) . " dolares.</p>";
?>
<a href="index.html"><input type="button" value="Voltar">


</body>
</html>