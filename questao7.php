<!-- 7 – Escreva um algoritmo que leia a altura e o peso de uma pessoa, calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário. -->

<?php

echo '<h1 style="margin-bottom: 5px;">Questão 7</h1>';

$altura = 1.50;

$peso = 70;

$imc = $peso/($altura * $altura);
$imc = number_format($imc, 2, '.', '');

echo 'IMC: ' . $imc;