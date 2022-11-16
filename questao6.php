<!-- 6 – Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e exiba para o usuário a velocidade em km/h. -->

<?php

echo '<h1 style="margin-bottom: 5px;">Questão 6</h1>';

$velocidadeMS = 53;

$velocidadeKH = $velocidadeMS/3.6;
$velocidadeKH = number_format($velocidadeKH, 2, '.', '');

echo 'Resultado: ' . $velocidadeKH . 'km/h';