<?php

    /*11- Haz un programa PHP que incluya una función swap(n1, n2) que
    intercambie los valores de los dos parámetros. Haz también una función que
    invierta el orden de los componentes de un array usando swap. Luego, pasa
    estas dos funciones a la librería functionsRel3.php.*/

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

    $variable1 = 'variable1';
    $variable2 = 'variable2';
    $array = [1,2,3,4,5,6,7,8];

    swap($variable1,$variable2);
    invertir($array);

    echo "Ahora la variable1 es: $variable1<br>";
    echo "Ahora la variable2 es: $variable2<br>";
    echo "El array invertido:<br>";
    for ($i = 0; $i < count($array); $i++){
        echo "$array[$i]";
    }

