<?php
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

    