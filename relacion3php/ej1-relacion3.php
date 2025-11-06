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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" class = "m-auto p-3 w-50" method = "get" id = "form1">
        <label for = "num" class = "form-label">Indique un número para saber si es primo</label>
        <input type = "number"  class = "form-control" name = "num" id = "num">

        <input type="submit" value="Enviar">
    </form>-->

    <?php

    function esPrimo(){
        $esPrimo = true;
        $contador = 2;
        $num = $_GET['num'];

        do{
            if ($num % $contador == 0){
                $esPrimo = false;
            }
            $contador ++;
        }while($esPrimo == false || $contador < $num);

        return $esPrimo;
    }

    function mcd($n1,$n2){ // Máximo común divisor de forma recursiva
        if ($n1 = $n2){
            return $n1;
        } elseif ($n1 > $n2){
            return mcd($n1 - $n2,$n2);
        } else {
            return mcd($n2 - $n1,$n1);
        }
    }

    function factorial($n){// Factorial de forma recursiva
        if ($n == 1){
            return $n;
        } else{
            return factorial($n-1);
        }
    }

    function palabrasInversas($texto){
        $segmentos = preg_split('/\s+/', $texto);
        $textoInvertido = "";

        for ($i = count($segmentos); $i--; $i >= 0){
            $textoInvertido = $textoInvertido.$segmentos[$i]." ";
        }

        echo $textoInvertido;

    }
    palabrasInversas("Hola que tal");
    ?>
    
</body>
</html>