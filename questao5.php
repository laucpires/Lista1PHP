<!-- 5 – Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados e mostre o resultado.-->

<?php

echo '<h1 style="margin-bottom: 5px;">Questão 5</h1>';

$numero1 = 45;
$numero2 = 23;

$quadrado1 = $numero1 * $numero1;
$quadrado2 = $numero2 * $numero2;

$somaquadrado = $quadrado1 + $quadrado2;
echo 'Soma dos quadrados de ' . $numero1 . ' e ' . $numero2 . ': ' . $somaquadrado;