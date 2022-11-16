<!-- 12 – Escreva um algoritmo que receba dois valores, calcule e apresente a área de um trapézio. -->

<!DOCTYPE html>
<head>
    <title>Questão 12</title>
</head>
</html>

<?php

echo '<h1 style="margin-bottom: 5px;margin-top: -5px;">Questão 12</h1>';

$valor1 = 7;
$valor2 = 42;

// TRAPÉZIO PRECISA DE DUAS BASES
$areaTrapezio = (($valor1 + $valor1) * $valor2)/2;
echo 'Área do trapézio: ' . $areaTrapezio;