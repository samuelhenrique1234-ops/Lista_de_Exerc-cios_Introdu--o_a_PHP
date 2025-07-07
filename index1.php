<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero_par">Defini se é um número par ou ímpar:</label>
        <input type="number" id="numero_par" name="numero_par" required>
        <button type="submit" name="verificar_numero_par">Verificar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_numero_par'])){
        $numero = $_POST['numero_par'];
        $ehPar = true;
        if($numero % 2 == 0){
            $ehPar = true;
        }else{
            $ehPar = false;
        }
        echo "O número $numero é ". ($ehPar ? 'par':' impar');
    };

   };
    ?>
</body>

</html>