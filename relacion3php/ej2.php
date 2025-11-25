<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 30vh;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <h2>Factorial de un número</h2>
            <label for="num" class="form-label">Indique un número</label>
            <input type="number" class="form-control" name="num" id="num">
        </form>
    </div>

    <p id="resultado" class="text-center">
        <?php
        require_once "ej4/funcionesRel3.php";

        if (isset($_GET['num']) && $_GET['num'] !== '') {
            $num = (int)$_GET["num"];
            $factorial = factorial($num);
            echo "El factorial del número indicado es: $factorial";
        }
        ?>
    </p>
</body>

</html>