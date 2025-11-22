<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 20 - Conversión a binario, octal o hexadecimal</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h2>Pasamos un número decimal a binario</h2>

    <?php

    // casting explícito de entero a string
    // acum de string en modo inverso

    $numero = 128;
    $base = 16;
    $resultado = "";
    echo "El número original es $numero y la base a la que pasarlo $base";
    echo "<br>el resultado es : ";
    while ($numero >= $base) {
        $resultado =  (string) $numero % $base . $resultado; // casting explícito
        $numero /= $base;
    }

    echo (string) $numero . $resultado;

    ?>
</body>

</html>