<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title> tabuada do número informado</title>
</head>
<body>

    <form method="POST">
        <label for="numero">Digite o número que deseja ter a tabuada :</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Click</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = intval($_POST['numero']);

        echo "Tabuada do: $numero";
        echo "<ul>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }

        echo "</ul>";
    }
    ?>
</body>
</html>