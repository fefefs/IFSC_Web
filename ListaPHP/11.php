<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Triangulo</title>
    <style>
        
    </style>
</head>
<body>
   
    <form method="POST">
        <label for="lado1">Lado 1:</label>
        <input type="number" id="lado1" name="lado1" required>

        <label for="lado2">Lado 2:</label>
        <input type="number" id="lado2" name="lado2" required>

        <label for="lado3">Lado 3:</label>
        <input type="number" id="lado3" name="lado3" required>

        <button type="submit">Click</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $lado1 = intval($_POST['lado1']);
        $lado2 = intval($_POST['lado2']);
        $lado3 = intval($_POST['lado3']);

        
        if ($lado1 == $lado2 && $lado1 == $lado3 && $lado2 == $lado3) {
            $res = "Equilatero";
        } else if ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            $res = "Isósceles";
        } else {
            $res = "Escaleno";
        }

        echo "<h3>O triangulo é $res</h3>";
    }
    ?>
</body>
</html>