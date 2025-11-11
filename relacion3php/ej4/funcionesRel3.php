<?php
//Indicar si un número es primo
function esPrimo($num)
{
    $esPrimo = true;
    $contador = 2;

    do {
        if ($num % $contador == 0) {
            $esPrimo = false;
        }
        $contador++;
    } while ($esPrimo && $contador < $num);

    return $esPrimo;
}

//Calcula el factorial de un número (recursivo)
function factorial($n)
{
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

//Calcula el máximo común divisor (mediante resta de forma recursiva)
function mcd($n1, $n2)
{
    if ($n1 == $n2) {
        return $n1;
    } elseif ($n1 > $n2) {
        return mcd($n1 - $n2, $n2);
    } else {
        return mcd($n2 - $n1, $n1);
    }
}

//Devuelve la palabra más larga de un texto
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

//Devuelve una cadena de caracteres con las palabras invertidas
function palabrasInversas($texto)
{
    $segmentos = preg_split('/\s+/', $texto);
    $textoInvertido = "";

    for ($i = count($segmentos); $i--; $i >= 0) {
        $textoInvertido = $textoInvertido . $segmentos[$i] . " ";
    }

    return $textoInvertido;
}

//Intercambia los valores de dos variables
function swap(&$a, &$b)
{
    $varInterm = $a;
    $a = $b;
    $b = $varInterm;
}

//Invierte los elementos de un array
function invertir(&$array)
{
    $j = count($array) - 1;
    for ($i = 0; $i < $j; $i++) {
        swap($array[$i], $array[$j]);
        $j--;
    }
}
