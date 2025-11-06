<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de cálculo del ejercicio 10 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <p id = "resultado" class = "text-center">
    <?php
        // Haremos que se ejecuten los cálculos 
            $numero1 = $_GET['numero1'];
            $numero2 = $_GET['numero2'];
            $operador = $_GET['operador'];

            $resultado = match($operador){
                'suma' => $numero1 + $numero2,
                'resta' => $numero1 - $numero2,
                'producto' => $numero1 * $numero2,
                'division' => $numero1 / $numero2,
                'resto' => $numero1 % $numero2,
            };
            echo "El resultado es: ",$resultado;
        

    ?>
    </p>
    
</body>
</html>