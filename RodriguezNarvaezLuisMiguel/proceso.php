<?php
 function estanIncluidos(string $frase, string $caracteres, bool $caseSensitive = true) : bool  {
    $resultado = false;
    $contador = 0;

    for ($i = 0; $i < strlen($caracteres); $i++){
        for ($j = 0; $j < strlen($frase); $j++){

            if ($caseSensitive){
                if ($caracteres[$i] == $frase[$j]){
                    $contador++;
                    break;
                }

            } else {
                if (strtolower($caracteres)[$i] == strtolower($frase)[$j]){
                    $contador++;
                    break;
                }
            }
        }
    }

    if ($contador == strlen($caracteres)){
        $resultado = true;
    }

    return $resultado;

 }

 if (isset($_POST['cadena1']) && isset($_POST['cadena2'])){
    $frase = $_POST['cadena1'];
    $caracteres = $_POST['cadena2'];
    if (estanIncluidos($frase,$caracteres)){
        echo "Todos los caracteres indicados están incluidos de forma case sensitive";
    } elseif (estanIncluidos($frase,$caracteres,false)){
        echo "Todos los caracteres indicados están incluidos de forma case insensitive";
    } else {
        echo "No todos los caracteres indicados están incluidos";
    }
 }