<!-- 4 – Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor. -->

<?php

echo '<h1 style="margin-bottom: 5px;">Questão 4</h1>';

$valor = 3;

$porcentagem1 = ($valor * 5)/100;
$porcentagem2 = ($valor * 50)/100;

echo 'Porcentagem 5%: ' . $porcentagem1 . '<br>';
echo 'Porcentagem 50%: ' . $porcentagem2 . '<br>';