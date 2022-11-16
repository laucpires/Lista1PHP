<!-- 9 – Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, 
exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto. -->

<?php

echo '<h1 style="margin-bottom: 5px;">Questão 9</h1>';

$valor = 15;
echo 'Valor: ' . $valor . '<br>';

$desconto = ($valor * 7)/100;
echo 'Desconto: ' . $desconto . '<br>';

echo 'Valor com desconto: ' . ($valor - $desconto);