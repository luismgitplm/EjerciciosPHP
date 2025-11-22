<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 2 - Ejercicio 1 - Formulario calculadora</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body {
            background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);
        }
        #wrapper {
            height: 85vh;
        }
    </style>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center" id="wrapper">

        <div class="card shadow-sm p-4 w-50">
            <h2 class="text-center mb-4">Calculadora básica</h2>

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

                <div class="mb-3">
                    <label for="numero1" class="form-label">Introduce número 1:</label>
                    <input type="number" step="0.01" class="form-control" name="numero1" id="numero1" required>
                </div>

                <div class="mb-3">
                    <label for="numero2" class="form-label">Introduce número 2:</label>
                    <input type="number" step="0.01" class="form-control" name="numero2" id="numero2" required>
                </div>

                <div class="mb-3">
                    <label for="operador" class="form-label">Elige operador:</label>
                    <select name="operador" class="form-select" id="operador" required>
                        <option value="suma">+</option>
                        <option value="resta">-</option>
                        <option value="producto">*</option>
                        <option value="division">/</option>
                        <option value="resto">%</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Calcular</button>

            </form>
        </div>

    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center">

                <?php
                if (!empty($_GET)) {
                    $numero1 = $_GET['numero1'];
                    $numero2 = $_GET['numero2'];
                    $operador = $_GET['operador'];

                    $resultado = match ($operador) {
                        'suma' => $numero1 + $numero2,
                        'resta' => $numero1 - $numero2,
                        'producto' => $numero1 * $numero2,
                        'division' => $numero2 != 0 ? $numero1 / $numero2 : "Error: división entre 0",
                        'resto' => $numero2 != 0 ? $numero1 % $numero2 : "Error: división entre 0",
                    };

                    echo "<div class='alert alert-info mt-3 fw-bold'>El resultado es: $resultado</div>";
                }
                ?>

            </div>
        </div>
    </div>

</body>

</html>
