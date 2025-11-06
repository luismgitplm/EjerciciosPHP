<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <!--1- Haz una función PHP esPrimo($num) que devuelva un booleano que indique
    si el número pasado como parámetro es primo o no. Haz un programa que
    pida un número natural, e incluyendo esta función, la utilice para mostrar
    todos los números primos entre 1 y el introducido. Todo en el mismo archivo
    php-->
    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" class="m-auto p-3 w-50">
            <h2>Cantidad de números primos</h2>
            <div class="mb-3">
                <label for="num" class="form-label">Indique un número natural</label>
                <input type="number" class="form-control" name="num" id="num">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <?php
        function esPrimo($num)
        {
            $esPrimo = true;
            $contador = 2;

            do {
                if ($num % $contador == 0) {
                    $esPrimo = false;
                }
                $contador++;
            } while ($esPrimo && $contador < $num);

            return $esPrimo;
        }

        if (isset($_GET['num'])) {
            $n = (int)$_GET['num'];

            echo "Números primos entre 1 y $n:<br>";
            for ($i = 1; $i <= $n; $i++) {
                if (esPrimo($i)) {
                    echo $i . " ";
                }
            }
        }
        ?>
    </div>
</body>

</html>