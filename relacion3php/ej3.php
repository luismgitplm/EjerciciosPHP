<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario petición numérica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 60vh;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center" id="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <h2>Máximo común divisor</h2>
            <label for="num1" class="form-label">Indique el primer número</label>
            <input type="number" class="form-control" name="num1" id="num1">

            <label for="num2" class="form-label">Indique el segundo número</label>
            <input type="number" class="form-control" name="num2" id="num2">

            <button type="submit">Calcular</button>
        </form>


        <?php
        require_once "ej4/funcionesRel3.php";

        if (!empty($_GET)) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $mcd = mcd($num1, $num2);

            echo "El máximo común divisor de ambos números es: $mcd";
        }
        ?>

    </div>
</body>

</html>