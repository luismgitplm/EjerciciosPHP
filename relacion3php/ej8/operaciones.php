<?php
if (isset($_GET['texto'])){
    $texto = $_GET['texto'];
    $eleccion = $_GET['opciones']; 

    if ($eleccion == 'mayus'){
        $textoMayus = strtoupper($texto);
        echo "El texto en mayúsculas es: {$textoMayus}";
    } else {
        $textoMinus = strtolower($texto);
        echo "El texto en minúsculas es: {$textoMinus}";
    }
}