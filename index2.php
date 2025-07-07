<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_tabuada">Calcular o tabuada do número:</label>
        <input type="number" id="numero_tabuada" name="numero_tabuada" required>
        <button type="submit" name="verificar_tabuada">Verificar</button>

    </form>
 <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_tabuada'])){
        $numero = $_POST['numero_tabuada'];
        for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo '<br>';
                echo "$numero x $i = $resultado";
            }
        }
    }   
    ?>
</body>

</html>