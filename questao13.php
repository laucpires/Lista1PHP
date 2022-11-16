<!-- 13 – Escreva um algoritmo que leia 3 notas de um aluno e calcule a média final deste aluno, 
considerando que a média é ponderada, ou seja, o peso das notas são, respectivamente, 2, 3 e 5. -->

<!DOCTYPE html>
<head>
    <title>Questão 13</title>
</head>
</html>

<?php

echo '<h1 style="margin-bottom: 5px;margin-top: -5px;">Questão 13</h1>';

$nota1 = 3.5;
$nota2 = 9.7;
$nota3 = 10;

$media = ((3.5 * 2) + (9.7 * 3) + (10 * 5))/10;
echo 'Média: ' . $media;