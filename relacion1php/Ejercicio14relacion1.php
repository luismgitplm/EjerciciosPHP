<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 14 - Sumatorio</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h2>La suma de los primeros números enteros positivos</h2>

    <?php

    // acumulación de productos marcha atrás
    // bucle for
    // validación con un if

    $numero = 5;
    $sumatorio = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $sumatorio += $i;
    }

    echo "La suma de los $numero primeros números es $sumatorio";
    ?>
</body>

</html>