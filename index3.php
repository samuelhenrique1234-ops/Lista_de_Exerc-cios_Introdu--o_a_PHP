<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero">Informe o número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_numero'])){
        $numero = $_POST['numero'];
        $ehPositivo = true;
            if ($numero > 0) {
                $ehPositivo = true;
                echo "O número $numero é positivo";     
            }
            else if ($numero < 0) {
                $ehPositivo = false;
                echo "O número $numero é negativo";
            }
            else if ($numero == 0) {
                $ehPositivo = false;
                echo "O número $numero é zero";
            }
        }
    }   
    ?>

</body>

</html>