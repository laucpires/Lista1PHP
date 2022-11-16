<!-- Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, 
divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra. -->

<!DOCTYPE html>
<head>
    <title>Questão 14</title>
</head>
</html>

<?php

echo '<h1 style="margin-bottom: 5px;margin-top: -5px;">Questão 14</h1>';

$valorProduto = 150;
echo 'Valor do produto: ' . $valorProduto . '<br>';

$valorParcela = ((($valorProduto * 16)/100) + $valorProduto)/10;
echo 'Valor do produto em 10 parcelas: ' . $valorParcela;