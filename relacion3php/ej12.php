<?php

    /*12- Implementa en PHP una función que ordene los componentes de una array
    de strings en desorden utilizando el famoso algoritmo de “ascenso de
    burbujas” y haz un programa que la incluya. Vamos a utilizar el envío de
    parámetros por referencia: el resultado de la ordenación, se verá reflejado en
    el propio parámetro array. */
    
    function ordenarAscensoBurbuja(&$array) {
        $n = count($array);
        
        
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
    }


    $datos = ['Pérez','García','López','Márquez','Álvarez','Domínguez','Ruíz','Díaz'];

    echo "Array original:<br>";
    echo implode(", ", $datos) . "<br><br>";

    ordenarAscensoBurbuja($datos); 

    echo "Array ordenado con bubble sort:<br>";
    echo implode(", ", $datos);


