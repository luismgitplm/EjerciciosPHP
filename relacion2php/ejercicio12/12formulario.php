<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="visibilidad.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
     <div class = "d-flex justify-content-center align-items-center" id = "wrapper">
    <form action="12calculo-nota.php" method = "get" class = "m-auto p-3 w-50" id = "form1">
        <h2>Petición de notas</h2>
        <div class = "mb-3">
            <label for = "nota1" class = "form-label">Introduce la primera nota:</label>
            <input type = "text"  class = "form-control" name = "nota1" id = "nota1">
            <div id = "nota1Help" class = "form-text text-danger">La nota debe ser un número entero entre 1 y 10</div>
        </div>
        <div class = "mb-3">
            <label for = "nota2" class = "form-label">Introduce la segunda nota:</label>
            <input type = "text"  class = "form-control" name = "nota2" id = "nota2">
            <div id = "nota2Help" class = "form-text text-danger">La nota debe ser un número entero entre 1 y 10</div>
        </div>
        <div class = "mb-3">
            <label for = "faltas" class = "form-label">Indica el número de faltas</label>
            <input type = "text"  class = "form-control" name = "faltas" id = "faltas">
            <div id = "faltasHelp" class = "form-text text-danger">El número de faltas debe ser un número entero positivo o cero</div>
        </div>
         <div class = "mb-3">
            <label for = "email" class = "form-label">Indica un email</label>
            <input type = "text" class = "form-control" name = "email" id = "email">
        </div>
         <div class = "mb-3">
            <label for = "nombre" class = "form-label">Indica tu nombre</label>
            <input type = "text"  class = "form-control" name = "nombre" id = "nombre">
            <div id = "nombreHelp" class = "form-text text-danger">El nombre no puede quedar vacío</div>
        </div>
            <input type="submit" value="Enviar">
    </form>
    </div>
    
</body>
<script src="./validaciones.js"></script>
</html>