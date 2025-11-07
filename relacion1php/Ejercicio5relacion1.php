<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativo</title>
</head>

<body>
    <h1>Array asociativo</h1>
    <?php
    /*5- Crea un array asociativo constante, en el que utilices como clave el día de la
        semana, y como valor, la temperatura máxima de ese día en formato real. A
        continuación, muestra:
        ● la temperatura del primer dia de la semana
        ● la temperatura de todos los días, secuencialmente
        ● lo mismo que el anterior, pero en formato de lista <numerada></numerada>*/

    $temperaturas = array("Lunes" => 26, "Martes" => 24, "Miércoles" => 25, "Jueves" => 26, "Viernes" => 27, "Sábado" => 25, "Domingo" => 23);

    echo "La temperatura del primer día de la semana es: ", $temperaturas["Lunes"], " ºC.";
    echo "<br>Las temperaturas de toda la semana son: ";
    foreach ($temperaturas as $x => $y) {
        if (next($temperaturas) == null) {
            echo "$x: $y ºC";
        } else {
            echo "$x: $y ºC / ";
        }
    }

    ?>

    <?php echo "<br>Las temperaturas de la semana en formato lista ordenada: " ?>

    <ol>
        <?php
        foreach ($temperaturas as $x => $y) {
        ?>
            <li><?php echo "<br>$x: $y ºC<br>"; ?></li>

        <?php } ?>

    </ol>

    <?php 
    echo "En forma de tabla";
    echo "<table style = 'border: black solid 1px'>";
        foreach ($temperaturas as $x => $y) {
        echo "<tr> <td>$x</td>  <td>$y</td> </tr>";
    }


    echo "</table>";

    ?>

</body>

</html>