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

        // Objeto a partid del array
        $miModuloOtraVezObjeto = (object) $miModuloArray;

        // serializar miModuloArray
        $miModuloArraySerializado = serialize($miModuloArray);
    ?>
</body>
</html>