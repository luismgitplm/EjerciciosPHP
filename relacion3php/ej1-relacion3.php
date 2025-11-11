<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <!--
    <form action="<?php

                    use function PHPSTORM_META\map;

                    echo $_SERVER['PHP_SELF'] ?>" class = "m-auto p-3 w-50" method = "get" id = "form1">
        <label for = "num" class = "form-label">Indique un número para saber si es primo</label>
        <input type = "number"  class = "form-control" name = "num" id = "num">

        <input type="submit" value="Enviar">
    </form>-->

    <?php

    function esPrimo()
    {
        $esPrimo = true;
        $contador = 2;
        $num = $_GET['num'];

        do {
            if ($num % $contador == 0) {
                $esPrimo = false;
            }
            $contador++;
        } while ($esPrimo == false || $contador < $num);

        return $esPrimo;
    }

    // 3 Máximo común divisor de forma recursiva
    function mcd($n1, $n2)
    {
        if ($n1 = $n2) {
            return $n1;
        } elseif ($n1 > $n2) {
            return mcd($n1 - $n2, $n2);
        } else {
            return mcd($n2 - $n1, $n1);
        }
    }
    echo mcd(48, 18);

    // 2 Factorial de forma recursiva
    function factorial($n)
    {
        if ($n == 0 || $n == 1) {
            return 1;
        }
        return $n * factorial($n - 1);
    }


    // 9
    function palabraMasLarga($texto)
    {
        $arrayTexto = preg_split('/[\s+]/', $texto);
        $longitudMax = 0;
        $palabraMax = '';


        for ($i = 0; $i < count($arrayTexto); $i++) {
            if (strlen($arrayTexto[$i]) > $longitudMax) {
                $longitudMax = strlen($arrayTexto[$i]);
                $palabraMax = $arrayTexto[$i];
            }
        }

        return $palabraMax;
    }



    // 10
    function palabrasInversas($texto)
    {
        $segmentos = preg_split('/\s+/', $texto);
        $textoInvertido = "";

        for ($i = count($segmentos); $i--; $i >= 0) {
            $textoInvertido = $textoInvertido . $segmentos[$i] . " ";
        }

        return $textoInvertido;
    }


    //11 
    function swap(&$a, &$b)
    {
        $varInterm = $a;
        $a = $b;
        $b = $varInterm;
    }

    function invertir(&$array)
    {
        $j = count($array) - 1;
        for ($i = 0; $i < $j; $i++) {
            swap($array[$i], $array[$j]);
            $j--;
        }
    }

    // 14
    $circunferencia = function ($num) {
        return 2 * pi() * $num;
    };
    $circulo = function ($num) {
        return pi() * pow($num, 2);
    };
    $esfera = function ($num) {
        return 4 / 3 * pi() * pow($num, 3);
    };

    // 15
    $circunferencia2 = fn($num) => 2 * pi() * $num;
    $circulo2 = fn($num) => pi() * pow($num, 2);
    $esfera2 = fn($num) => 4 / 3 * pi() * pow($num, 3);

    ?>

</body>

</html>