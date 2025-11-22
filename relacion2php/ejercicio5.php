<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center mb-4">Array asociativo</h1>

        <div class="card shadow-sm">
            <div class="card-body">

                <?php
                    $temperaturas = array(
                        "Lunes" => 26,
                        "Martes" => 24,
                        "Miércoles" => 25,
                        "Jueves" => 26,
                        "Viernes" => 27,
                        "Sábado" => 25,
                        "Domingo" => 23
                    );

                    echo "<p><strong>La temperatura del primer día de la semana es:</strong> {$temperaturas['Lunes']} ºC</p>";

                    echo "<p><strong>Las temperaturas de toda la semana son:</strong><br>";
                    foreach ($temperaturas as $dia => $temp) {
                        if (next($temperaturas) == null) {
                            echo "$dia: $temp ºC";
                        } else {
                            echo "$dia: $temp ºC / ";
                        }
                    }
                    echo "</p>";
                ?>

                <h5 class="mt-4">Temperaturas en lista ordenada</h5>
                <ol class="list-group list-group-numbered mb-4">
                    <?php foreach ($temperaturas as $dia => $temp) { ?>
                        <li class="list-group-item">
                            <?php echo "$dia: $temp ºC"; ?>
                        </li>
                    <?php } ?>
                </ol>

                <h5 class="mt-4">Temperaturas en tabla</h5>
                <table class="table table-bordered table-striped mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th>Día</th>
                            <th>Temperatura (ºC)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($temperaturas as $dia => $temp) {
                            echo "<tr><td>$dia</td><td>$temp</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>
