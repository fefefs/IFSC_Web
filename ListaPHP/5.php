<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>sorteio de um número aleatório no intervalo</title>
</head>
<body>
    <form method="POST">
        <label for="min">Valor Mínimo:</label>
        <input type="number" id="min" name="min" required>

        <label for="max">Valor Máximo:</label>
        <input type="number" id="max" name="max" required>

        <button type="submit">Sortear</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $min = intval($_POST['min']);
        $max = intval($_POST['max']);

        if ($min > $max) {
            echo "<p style='color:red;'>Erro</p>";
        } else {
            $numSorteado = rand($min, $max);
            echo "<h2>Número sorteado: <strong>$numSorteado</strong></h2>";
        }
    }
    ?>
</body>
</html>