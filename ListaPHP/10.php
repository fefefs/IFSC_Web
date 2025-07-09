<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>intervalo de numeros</title>
    <style>
        .numero {
            display: inline-block;
            margin: 5px;
            padding: 10px;
            font-weight: bold;
            color:rgb(69, 25, 87);
            background-color:rgb(230, 216, 240);
            border: 1px solidrgb(58, 216, 61);
            border-radius: 2px;
            
        }
    </style>
</head>
<body>
   
    <form method="POST">
        <label for="inicio">inicio:</label>
        <input type="number" id="inicio" name="inicio" required>

        <label for="fim">Fim:</label>
        <input type="number" id="fim" name="fim" required>

        <button type="submit">Click</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $inicio = intval($_POST['inicio']);
        $fim = intval($_POST['fim']);

        
        if ($inicio > $fim) {
            [$inicio, $fim] = [$fim, $inicio];
        }

        echo "<h3>Números no intervalo de $inicio a $fim:</h3>";
        for ($i = $inicio; $i <= $fim; $i++) {
            echo "<span class='numero'>$i</span>";
        }
    }
    ?>
</body>
</html>