<!-- 8 – Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 9%. -->

<?php

echo '<h1 style="margin-bottom: 5px;">Questão 8</h1>';

?>

<form method="post">
    <input type="text" name="valor">
    <br>
    <label>Valor: <?php echo $_POST["valor"] ?></label>
    <br>
    <?php $desconto = ($_POST["valor"] * 9)/100 ?>
    <label>Valor com desconto: <?php echo ($_POST["valor"] - $desconto) ?></label>
</form>