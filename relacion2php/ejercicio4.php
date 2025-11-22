<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo básico de arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<!--4- Retoma el ejercicio 4 de la relación anterior y aplícale estilos con clases de
Bootstrap 5 (experimentaremos así las listas numeradas)-->

<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center mb-4">Manejo básico de arrays</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <?php
                    $SEMANA= ["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
                    
                    echo "<p>El primer día de la semana es: <strong>{$SEMANA[0]}</strong></p>";
                    echo "<p>Una semana tiene <strong>" . count($SEMANA) . "</strong> días.</p>";
                    echo "<p><strong>Todos los días de la semana son:</strong></p>";

                    echo "<ul class='list-group'>";
                    for($x = 0; $x < count($SEMANA); $x++){
                        echo "<li class='list-group-item'>Día " . ($x+1) . ": " . $SEMANA[$x] . "</li>";
                    }
                    echo "</ul>";
                ?>
            </div>
        </div>
    </div>

    

</body>
</html>
