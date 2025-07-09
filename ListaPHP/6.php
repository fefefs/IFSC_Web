<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>verifica se é Par ou Ímpar</title>
</head>
<body>
    

    <form method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = intval($_POST['numero']);

        if ($numero % 2 === 0) {
            $res = "Par";
        } else {
            $res = "Ímpar";
        }

        echo "O número $numero ";
        echo "é $res";
    }
    ?>
</body>
</html>