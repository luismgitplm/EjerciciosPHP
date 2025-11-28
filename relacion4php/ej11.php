<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $miModulo = new stdClass();

        $miModulo->nombre = "Desarrollo Web en Entorno Servidor";
        $miModulo->acronimo = "DWES";
        $miModulo->curso = 2;

        // Array a partir de la clase estandar
        $miModuloArray = (array) $miModulo;

        echo '<strong>Datos del array obtenido a partir de un objeto stdClass:</strong><br>';
        echo var_dump($miModuloArray);

        // Objeto a partir del array
        $miModuloOtraVezObjeto = (object) $miModuloArray;

        echo '<strong><br>Datos del objeto obtenido a partir del array anterior:</strong><br>';
        echo var_dump($miModuloOtraVezObjeto);
    ?>
</body>
</html>