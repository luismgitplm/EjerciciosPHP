<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 1: Hola mundo</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <!-- ***** ejercicio inicial para mostrar output de distinto tipo:
               * texto básico con salto de línea
               * versión de PHP
               * html y css
               * variables
               * texto concatenado con .
-->
    <p>Hello <?php echo " world!"; ?></p>
    <?php
    /********** para evitar warnings */
    error_reporting(E_ALL & ~E_WARNING); // all errors, no warnings
    /**************************** */
    // vanilla output
    echo "Hello world\n"; // no funciona el /n pq es html, hay que poner <br>
    echo date("D M j G:i:s T Y");
    // version info
    echo phpinfo();
    // salida con estilo (primera aproximación)
    echo "<h1 style='color:red;'>Hola mundo</h1>";
    // "variable variable"  declaration, inicialization
    $claro = "azul";
    $$tono = "$claro";
    ?>

    <?php
    // el ámbito de las variables se mantiene entre un bloque php y otro en el mismo archivo
    echo "<p>lo que tiene la variable claro es:", $claro, " (va bien con comas)</p>";
    echo '<p>lo que tiene la variable claro es:', $claro, ' (y con comillas simples)</p>';
    echo "<p>lo que tiene la variable claro es: $claro (va bien con comillas dobles)</p>";
    echo '<p>lo que tiene la variable claro es: $claro (esto no funciona por las comillas simples)</p>';
    echo "<p>lo que tiene la variable tono es: " . $$tono . ", a la que se llega indirectamente a través de claro</p>";
    ?>
</body>

</html>