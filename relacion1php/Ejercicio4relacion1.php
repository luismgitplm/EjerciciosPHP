<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo básico de arrays</title>
</head>
<body>
    <h1>Manejo básico de arrays</h1>
    <?php
    //para desactivar warnings
    //error_reporting(E_ALL & ~E_WARNING);
        $SEMANA= ["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
        
        echo "El primer día de la semana es: ",$SEMANA[0];
        echo "<br>Una semana tiene ",count($SEMANA)," días";
        echo "<br>Todos los días de la semana son: ";
        
        for($x = 0;$x<count($SEMANA);$x++){
            echo "<br>Día ",$x+1, ": ",$SEMANA[$x];
        }
        
    ?>
</body>
</html>