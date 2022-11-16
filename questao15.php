<!-- 15 – Escreva um algoritmo que receba de entrada a distância total (em km) 
percorrida por um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la, 
calcule e imprima o consumo médio de combustível.  
Fórmula: Consumo médio = Km / litros -->

<!DOCTYPE html>
<head>
    <title>Questão 15</title>
</head>
</html>

<?php

echo '<h1 style="margin-bottom: 5px;margin-top: -5px;">Questão 15</h1>';

$distancia = 15;
$litros = 4;

$consumoMedio = $distancia/$litros;
echo 'Consumo médio: ' . $consumoMedio;