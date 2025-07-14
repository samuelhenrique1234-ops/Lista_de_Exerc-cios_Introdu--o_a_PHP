<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10</title>
</head>

<body>

    <form method="POST" action="">
        <label for="number">Informe o número:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="fatorial">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['fibonacci'])) {
            $numero = $_POST['numero'];

            $a = 0;
            $b = 1;
            $t = 0;

            while ($b < $numero) {
                echo $b . '<br / > ';
                $t = $a;
                $a = $b;
                $b = $t + $b;
                };
            };
        };
    ?>

</body>

</html>