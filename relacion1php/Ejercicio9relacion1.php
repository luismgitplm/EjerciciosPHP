<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Indicar si un triángulo es equilátero, isósceles o escaleno</h1>
    <?php
    /*9- En un programa PHP, valora a partir de los 3 lados de un triángulo si es 
    equilátero, isósceles y escaleno, y muestra esa valoración por pantalla */
    //$lados = [12,7,12];

    $lado1 = 3.0;
    $lado2 = 4.0;
    $lado3 = 3.0;

    if ($lado1 == $lado2 and $lado2 == $lado3){
        echo"El triángulo es equilátero.";
    } else if ($lado1 == $lado2 or $lado2 == $lado3 or $lado1 == $lado3){
        echo"El triángulo es isósceles.";
    } else {
        echo"El triángulo es escaleno.";
    }


    ?>
</body>
</html>