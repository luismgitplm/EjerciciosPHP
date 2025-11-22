<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 11: Ecuación de 2º grado (2ª aproximación)</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h2>Ecuación de segundo grado</h2>
    <?php
    $a = 1;
    $b = -3;
    $c = 1;


    if ($a = 0) {                    // en caso de que a sea 0, es de primer grado
        echo "La ecuación no es de segundo grado grado ";
        if ($b = 0) {                 // si b b lo fuera, no sería siquiera una ecuación
            echo "y ni siquiera es una ecuación";
        } else {                    // la única raiz es:
            echo "<br>La única solución es: ", -$c / $b;
            // printf("La única solución es: %f.2", -$c / $b);
        }
    } else 
     if ($b = 0) {               // si b fuera 0, (sin serlo a) los resultados pueden ser o no reales
        if (-$b / $a < 0) {
            echo "<br>los resultados no son reales";
        } else {
            echo "<br>los resultados son : ", sqrt(-$b / $a), " y ", -sqrt(-$b / $a);
            // printf("Los resultados son : %f.2 y %f.2", sqrt(-$b / $a), -sqrt(-$b / $a));
        }
    } else {
        if ($c = 0) {              // si c fuera 0, una raiz es 0 y la otra, trivial
            echo "Las raices son: 0.0 y ", -$b / $a;
            // printf("Las raices son: 0.0 y %f.2", -$b / $a);
        } else {                    // si no fuera 0 ninguna... sería por el método general
            $r = $b ** 2 - 4 * $a * $c;
            if ($r < 0) {
                echo "los resultados no son reales";
            } else {
                $x1 = (-$b + sqrt($r)) / 2;
                $x2 = (-$b - sqrt($r)) / 2;
                echo "Las raices son ", $x1, " y ", $x2;
                // printf("Las raices son %f.2 y %f.2",$x1,$x2);
            }
        }
    }

    ?>
</body>

</html>