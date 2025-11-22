<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 19 - Conversión a binario</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>
<body>
    <h2>Pasamos un número decimal a binario</h2>

    <?php

    // casting explícito de entero a string
    // acum de string en modo inverso

       $numero = 128;
       $resultado = "";

       echo "el resultado es : ";
       while ($numero >= 2) {
          $resultado =  (string) $numero % 2 . $resultado; // casting explícito
          $numero /= 2;
       }
    
       echo "1".$resultado;
       
    ?>
</body>
</html>