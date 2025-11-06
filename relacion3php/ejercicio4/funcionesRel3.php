<?php
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
