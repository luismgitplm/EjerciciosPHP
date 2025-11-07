<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tipos y formatos de salida</h1>
    <?php
        /*2- Haz un programa PHP que muestre un valor de ejemplo de cada tipo de 
            dato escalar en php con echo utilizando la función var_dump(), y también 
            con printf
        */
        $verdadero = true;
        $nombre = "Luis";
        $curso = 2;
        $altura = 1.90;

        echo "<br>boolean: ",var_dump($verdadero);
        echo "<br>string: ",var_dump($nombre);
        echo "<br>entero: ",var_dump($curso);
        echo "<br>real: ",var_dump($altura);
        
    ?>
</body>
</html>