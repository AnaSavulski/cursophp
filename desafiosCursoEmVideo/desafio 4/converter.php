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
    <header><h1>Conversor de moedas avançado</h1></header>

<?php
    $inicio = date("m-d-y",strtotime("-7 days"));
    $fim = date("m-d-y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url),true);

    $cotacao = $dados["value"][0]["cotacaoCompra"];


    // Obtenha o número a ser dividido do usuário
    $real = $_REQUEST['din'] ?? 0;

    // Chame a função e obtenha o resultado
    $dollar = $real / $cotacao;

    // Exiba o resultado
    

    echo "<p>Os seus R\$".number_format($real,2,".",",")." reais, equivalem a U\$" . number_format($dollar,2,",",".") . " dolares.</p>";
?>
    <button onclick="javascrit:history.go(-1)">Voltar</button>

</main>
</body>
</html>