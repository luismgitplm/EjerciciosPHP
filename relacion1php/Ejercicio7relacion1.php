<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Operadores</h1>
    <?php
    /*7- Calcula la nota final de una persona a partir de la media de dos notas 
    numéricas iniciales, y descontando 0.25 por cada falta sin justificar. Muestra el 
    resultado por pantalla, indicando si la persona aprueba o suspende.*/

    $nota1 = 7.2;
    $nota2 = 8.4;
    $faltas = 4;

    $notaFinal = ($nota1 + $nota2) / 2 - 0.25*$faltas;

    if ($notaFinal >= 5){
        echo"<p>Enhorabuena, has aprobado con un $notaFinal</p>";
    } else {
        echo"<p>Lo sentimos, otra vez será</p>";
    }

    ?>
</body>
</html>