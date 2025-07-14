<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 6</title>
</head>

<body>

    <form method="POST" action="">
        <label for="number">Informe o número:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" name="fatorial">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['exibir_divisores'])) {
            $numero = $_POST['numero'];
            for($i = 1; $i <= $numero; $i++){
                if($numero % $i == 0){
                    echo $i . " ";
                    };
                };
            };
        };
    ?>

</body>

</html>