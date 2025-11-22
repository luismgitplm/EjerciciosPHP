<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario petición numérica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 60vh;
        }

        .form-text {
            visibility: hidden;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form action="calculo.php" method="get" id="form">
            <h2>Indique la nota</h2>
            <input type="text" class="form-control" name="nota" id="nota">
            <div id="notaHelp" class="form-text text-danger">La nota debe ser un número entero de 0 a 10</div>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
<script src="validacion.js"></script>
</html>