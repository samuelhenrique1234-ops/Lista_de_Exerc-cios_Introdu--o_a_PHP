<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>

<body>

    <form method="POST" action="">
        <label for="number">Informe o número:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="fatorial">Verificar</button>
    </form>

    <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['verificar_amigo'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];

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

                function saoAmigos($numero1, $numero2)
                {
                    $soma1 = somaDivisores($numero1);
                    $soma2 = somaDivisores($numero2);

                    return ($soma1 == $numero2 && $soma2 == $numero1);
                }

                if (saoAmigos($num1, $num2)) {
                    echo "$num1 e $num2 são números amigos.";
                } else {
                    echo "$num1 e $num2 não são números amigos.";
                }
            }
        }
    ?>

</body>

</html>