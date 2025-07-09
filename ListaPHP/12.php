<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$numeros = [1,2,3,4,5,6,7,8,9];
$soma = array_sum($numeros);
$maior = max($numeros);
$menor = min($numeros);


echo "Array: " . implode(", ", $numeros) . "<br>";
echo "Soma: $soma<br>";
echo "Maior número: $maior<br>";
echo "Menor número: $menor<br>";
?>
</body>
</html>