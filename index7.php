<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 7</title>
</head>

<body>

    <form method="POST" action="">
        <label for="number">Informe o número:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="fatorial">Verificar</button>
    </form>

    <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['verificar_numero'])) {
                $numero = $_POST['numero'];

                function somaDivisores($numero)
                {
                    $soma = 0;
                    for ($i = 1; $i <= $numero / 2; $i++) {
                        if ($numero % $i == 0) {
                            $soma += $i;
                        }
                    }
                    return $soma;
                }

                function ehPerfeito($numero)
                {
                    $soma = somaDivisores($numero);                  

                    return ($soma == $numero);
                }

                echo "<br>";
                
                if (ehPerfeito($numero)) {
                    echo "$numero é perfeito.";
                } else {
                    echo "$numero não é perfeito.";
                }
            };
                };

    ?>

</body>

</html>