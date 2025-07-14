<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9</title>
</head>

<body>

    <form method="POST" action="">
        <label for="number">Informe o número:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="fatorial">Verificar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

            if (is_numeric($num1) && is_numeric($num2)) {
            $num1 = $num1;
            $num2 = $num2;

            $soma = 0;
            for ($i = min($num1, $num2) + 1; $i < max($num1, $num2); $i++) {
            $soma += $i;
            }

            echo "A soma dos números entre " . min($num1, $num2) . " e " . max($num1, $num2) . " é: " . $soma;
        }   else 
            echo "Por favor, insira números válidos.";
    
        }
    ?>

</body>

</html>