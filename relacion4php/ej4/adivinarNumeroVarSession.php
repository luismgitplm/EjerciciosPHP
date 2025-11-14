<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php 
        if (!isset($_SESSION['num'])){
            $_SESSION['num'] = rand(1,100);
        }
    ?>

    <div class="d-flex flex-column justify-content-center align-items-center" id="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <h2>Adivine un número del 1 al 100</h2>
            <label for="numero" class="form-label">Indique número</label>
            <input type="number" class="form-control" name="numero" id="numero">

            <button type = "submit" name="enviar">Enviar</button>
        </form>

        <p id="contenido">
            <?php 
                if (isset($_GET['enviar'])){
                    if($_GET['numero'] > $_SESSION['num']){
                        echo "El número es menor que ".$_GET['numero'];
                    } else if ($_GET['numero'] < $_SESSION['num']) {
                        echo "El número es mayor que ".$_GET['numero'];
                    } else {
                        echo "Has acertado!!!!";
                        session_destroy();
                    }
                }
            ?>
        </p>
    </div>
</body>
    
</body>
</html>