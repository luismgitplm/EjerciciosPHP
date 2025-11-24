<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form action="operaciones.php" method="get" id="form">
            <h2>Mayúsculas o Minúsculas</h2>
            <label for="texto" class="form-label">Escriba un texto</label>
            <input type="text" class="form-control" name="texto" id="texto">

            <select name="opciones" id="opciones">
                <option value="">-- Seleccione --</option>
                <option value="mayus">Mostrar en mayúsculas</option>
                <option value="minus">Mostrar en minúsculas</option>
            </select>

            <input type="submit" value="Enviar">
            <div id="alerta"></div>
        </form>
    </div>

    <script src="validacion.js">
    </script>
</body>
</html>