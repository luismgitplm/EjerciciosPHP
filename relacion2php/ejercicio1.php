<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 2 - Ejercicio 1 - Formulario calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 80vh;
        }
    </style>
</head>

<body>
    <!--1- Crea un formulario de entrada para una calculadora en PHP a partir de dos
    números enteros y un operador. Para la introducción de datos, utilizaremos dos
    campos de texto y un select que contenga como opción diferentes operadores :
    +,-,*,/,%.-->
    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" class="m-auto p-3 w-50">
            <h2>Calculadora básica con 2 números y un operador</h2>
            <div class="mb-3">
                <label for="numero1" class="form-label">Introduce número 1:</label>
                <input type="number" step="0.01" class="form-control" name="numero1" id="numero1">
            </div>
            <div class="mb-3">
                <label for="numero2" class="form-label">Introduce número 2:</label>
                <input type="number" step="0.01" class="form-control" name="numero2" id="numero2">
            </div>
            <div class="mb-3">
                <label for="operador" class="form-label">Elige operador</label>
                <select name="operador" class="form-select" id="operador">
                    <option value="suma">+</option>
                    <option value="resta">-</option>
                    <option value="producto">*</option>
                    <option value="división">/</option>
                    <option value="resto">%</option>
                </select>
            </div>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <!-- A continuación saldrá el resultado del cálculo realizado tras el envío -->
    <p id="resultado" class="text-center">
        <?php
        // Haremos que se ejecuten los cálculos
        if (!empty($_GET)) {
            $numero1 = $_GET['numero1'];
            $numero2 = $_GET['numero2'];
            $operador = $_GET['operador'];

            $resultado = match ($operador) {
                'suma' => $numero1 + $numero2,
                'resta' => $numero1 - $numero2,
                'producto' => $numero1 * $numero2,
                'division' => $numero1 / $numero2,
                'resto' => $numero1 % $numero2,
            };

            echo "El resultado es: ", $resultado;
        }

        ?>
    </p>
</body>

</html>